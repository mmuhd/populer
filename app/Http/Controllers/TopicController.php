<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Category;
use App\Upvote;
use App\Review;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Notifications\UserNotifications;


class TopicController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $topics = Topic::with('user')->with('category')
         // ->with('upvotes')->with('reviews')->paginate(10)->all();
        //$topics = Topic::paginate(10)->all();
        $topics = Category::with('topics.upvotes')->with('topics.reviews')->with('topics.user')->get()->sortByDesc('topics.upvotes');
        //dd($topics);
        return view('homepage', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('submit', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        //Data Validation here
        $data = $request->validate([
            'name' => 'min:4|max:250|string',
            'category_id' => 'integer|min:1|max:999',
            'description' => 'min:20|max:9999|string',
            'one_liner' => 'min:5|max:200|string',
            'website' => 'url',
            'thumbnail' => 'image',
            'screenshot' => 'image',
        ]);

        //Images resizing using helper function
        $thumbnail = imageresize(200, $request->file('thumbnail'), 'thumbnails');
        $screenshot = imageresize(1200, $request->file('screenshot'), 'screenshots');

        //Generating slug for url
        $slug = strtolower(str_replace(' ', '', $data['name']));

        //Storing in DB
        Topic::create([
            'name' => $data['name'],
            'slug' => $slug,
            'category_id' => $data['category_id'],
            'description' => $data['description'],
            'one_liner' => $data['one_liner'],
            'website' => $data['website'],
            'thumbnail' => $thumbnail,
            'screenshot' => $screenshot,
            'user_id' => currentUserId()
        ]);

        return redirect(route('app', $slug));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topics)
    {
        // $topics = Topic::with('user')->with('category')
        // ->with('upvotes')->with('reviews')->find($topics);
        // dd($topics);
        return view('app', compact('topics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topics)
    {
        if(Gate::allows('delete-topics', $topics))
        {
           $topics->delete();
           return redirect(route('home'))->with('status', 'Topic Deleted!');
        } else
        {
            return redirect(route('home'))->with('status', 'Opps! You are not allowed to delete it.');
        }
    }

    public function search(Request $request)
    {
        $term = '%'.$request->term.'%';

        $topics = Topic::where('name', 'like', $term)
            ->orWhere('description', 'like', $term)
             ->orWhere('one_liner', 'like', $term)
            ->paginate(10)->all();

        return view('search', compact('topics', 'term'));
    }


    public function Upvote(Topic $topics){

        if(currentUser()->checkIfUserUpvoted($topics))
        {
            Upvote::where([
                ['user_id', currentUserId()],
                ['topic_id', $topics->id]
            ])->delete();


        }elseif (currentUser()->checkIfUserUpvoted($topics) === false) {

           $topics->upvotes()->create([
                'user_id' => currentUserId(),
            ]);

            $msg = $topics->name . ' Was Upvoted By ' . currentUser()->name;
            $topics->user->notify(new UserNotifications($msg));
        }
    
        return back();
    }

    public function userUpvotes()
    {
        $ids = currentUser()->myUpvotes->pluck('topic_id');
        $topics = Topic::wherein('id', $ids)->get();

        return view('myupvotes', compact('topics'));
    }

    public function addReview(Request $request)
    {

        //dd($request->all());
        $data = $request->validate([
            'topic_id' => 'required|string',
            'body' => 'min:10|max:1000|string'
        ]);

        Review::create([
            'user_id' => currentUserId(),
            'topic_id' => $data['topic_id'],
            'body' => $data['body'],
       ]);

        $topics = Topic::find($request->topic_id);

        $msg = $topics->name . ' Was Reviewed By ' . currentUser()->name;
        $topics->user->notify(new UserNotifications($msg));

        return back();
    }
}
