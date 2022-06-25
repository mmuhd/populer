<x-master>
    <div class="bg-top">
        
   

    <div class="flex my-16 items-center flex-col flex-wrap" >

        <h3 class="font-bold text-4xl mb-6 text-gray-800 lg:text-2xl md:text-2xl sm:text-2xl xs:text-2xl">Search the Most Populer Topics</h3>
        <!-- <p class="text-gray-700 mb-6 text-sm">Find Topics that matter, filter down and compare to find the best one's.</p> -->
      
        <div class="flex xl:w-1/2 lg:w-1/2">
        <form class="flex border-2 border-gray-400 rounded-lg p-1 w-full" method="get" action="http://saas.test/search">
            <input type="text" name="term" class="px-2 outline-none w-full border-0" placeholder="Search anything..." required>
            <input type="submit" name="" value="Search" class="border-0 bg-gray-800 text-white p-1 px-2 rounded-lg hover:bg-indigo-600 outline-none cursor-pointer">
            
        </form>
        </div>
    </div>

    @if (session('status'))
    <div id="status" class="font-bold text-red-500 text-lg text-center bg-gray-200 p-2 border border-red-500">
        {{ session('status') }}
    </div>
    @endif
     <div id="timeline-start" class="mt-24">
    <h1 class="font-bold text-gray-700 text-xl py-2 mt-3">Latest Topics</h1>
    @include('layouts.timeline')
    </div>

    </div>

</x-master>
