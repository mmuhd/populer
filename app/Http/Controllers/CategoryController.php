<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Topic;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    public function view($id)
    {
        //
         $topics = Topic::where('category_id', $id)->with('user')->with('category')
          ->with('upvotes')->with('reviews')->get()->sortByDesc('upvotes');
 
        //$categories = Category::where('id', $id)->with('topics.upvotes')->with('topics.reviews')->with('topics.user')->get();
        
        return view('category_home', compact('topics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category');
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
            'name' => 'min:4|max:250|string'
        ]);

        //Generating slug for url
        $slug = strtolower(str_replace(' ', '', $data['name']));
        //dd($slug);

        //Storing in DB
        Category::create([
            'name' => $data['name'],
            'slug' => $slug,
            'user_id' => currentUserId()
        ]);

        return redirect(route('submit'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $topic = $category->apps;
        return view('category', compact('topic'));
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
         // $topics = Topic::where('category_id', $id)->with('user')->with('category')
        //   ->with('upvotes')->with('reviews')->get()->sortBy(function($topics)
        //     {
        //         return $topics->upvotes->count();
        //     }); 
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
    public function destroy($id)
    {
        //
    }
}
