<x-master>
    <div class="bg-gray-50 mt-16 py-12 px-8 rounded-lg h-auto flex-col pl-12">

    <div class="w-full mb-8">
        <h2 class="">Create A Topic Category</h2>
    </div>

    <div class="flex">
        <form class="mt-4 w-full" method="post" action="{{route('store_category')}} " enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="">Category Name</label>
                <input class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 rounded-md border bg-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 disabled:cursor-not-allowed disabled:opacity-50" type="text" name="name" placeholder="Category Name" value="{{old('name')}}">
                @error('name')
                    <div class="text-xs font-bold text-red-500 mb-4 py-2 right">
                        {{$message}}
                    </div>
                @enderror   
                
            </div>
            <div class="mb-4">
               
                <input class="w-full md:w-2/3 lg:w-2/3 xl:w-2/3 bg-indigo-600 hover:bg-indigo-400 border-0 text-white font-bold text-lg mt-4 rounded-lg" type="submit" name="" style="" value="Submit Category" >
            </div>

        </form>
    </div>
    
</div>


</x-master>
