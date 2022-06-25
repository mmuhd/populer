<x-master>


<div class="bg-gray-50 mt-16 py-12 px-8 rounded-lg h-auto flex-col pl-12">

    <div class="w-full mb-8">
        <h1 class="">Submit A Topic</h1>
        <p class="0">Submit a Topic on Populr to make it easier for other people to discover and use.</p>
    </div>

    <div class="flex">
        <form class="mt-4 w-full" method="post" action="{{route('submit')}} " enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <a class="text-indigo-700 hover:text-indigo-500 no-underline mb-4" href="{{ route('create_category') }}">
                    {{ __('Create New Category +') }}
                </a>
                <label class="">Category</label>
                <select class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 rounded-md border bg-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 disabled:cursor-not-allowed disabled:opacity-50" name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option class="p-2 m-2 font-bold" value="{{$category->id}}">{{$category->name}} </option>
                @endforeach
                </select>

                @error('category_id')
                    <div class="text-xs font-bold text-red-500 mb-4 py-2 right">
                        {{$message}}
                    </div>
                @enderror  
            </div>

            <div class="mb-4">
                <label class="">Topic Name</label>
                <input class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 rounded-md border bg-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 disabled:cursor-not-allowed disabled:opacity-50" type="text" name="name" placeholder="Name" value="{{old('name')}}">
                @error('name')
                    <div class="text-xs font-bold text-red-500 mb-4 py-2 right">
                        {{$message}}
                    </div>
                @enderror   
                
            </div>

            <div class="mb-4">
                <label class="">One Liner</label>
                <input class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 rounded-md border bg-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 disabled:cursor-not-allowed disabled:opacity-50" type="text" name="one_liner" value="{{old('one_liner')}}" placeholder="One line description." >
                @error('one_liner')
                    <div class="text-xs font-bold text-red-500 mb-4 py-2 right">
                        {{$message}}
                    </div>
                @enderror   
            </div>

            <div class="mb-4">
                <label class="">Description</label>
                <textarea class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 rounded-md border bg-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 disabled:cursor-not-allowed disabled:opacity-50" type="text" name="description" placeholder="Details about the Topic.">{{old('description')}}</textarea>
                @error('description')
                    <div class="text-xs font-bold text-red-500 mb-4 py-2 right">
                        {{$message}}
                    </div>
                @enderror  
            </div>

            <div class="mb-4">
                <label class="">Website</label>
                <input class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 rounded-md border bg-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 disabled:cursor-not-allowed disabled:opacity-50" type="text" name="website" value="{{old('website')}}" placeholder="URL">
                @error('website')
                    <div class="text-xs font-bold text-red-500 mb-4 py-2 right">
                        {{$message}}
                    </div>
                @enderror  
            </div>


            <div class="mb-4">
                <label class="">Thumbnail</label>
                <input class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 rounded-md border bg-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 disabled:cursor-not-allowed disabled:opacity-50" type="file" name="thumbnail">
                @error('thumbnail')
                    <div class="text-xs font-bold text-red-500 mb-4 py-2 right">
                        {{$message}}
                    </div>
                @enderror  
            </div>


            <div class="mb-4">
                <label class="">Screenshot </label>
                <input class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 rounded-md border bg-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 disabled:cursor-not-allowed disabled:opacity-50" type="file"  name="screenshot">
                @error('screenshot')
                    <div class="text-xs font-bold text-red-500 mb-4 py-2 right">
                        {{$message}}
                    </div>
                @enderror  
            </div>


            <div class="mb-4">
               
                <input class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 bg-indigo-600 hover:bg-indigo-400 border-0 text-white font-bold text-lg mt-4 rounded-lg" type="submit" name="" style="" value="Submit Topic" >
            </div>

        </form>
    </div>
    
</div>
<script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
<script>
 $('#category_id').searchable();
</script>

</x-master>
