<x-master>

    <div id="main-app" class="mt-8 p-10 rounded sm:p-4 w-full max-w-3xl mx-auto p-2 flex-auto" style="background: #fbfbfb">

        <div class="space-y-4">
            <div class="bg-white rounded-md shadow-md">
                <div class="flex flex-col divide-y">
                    <div class="flex">
                        <div class="flex-auto p-3 no-underline flex space-x-4">
                            <!-- Logo-->
                            <div class="sm:w-20 sm:h-20 w-12 h-12 flex-shrink-0">
                                <img class="w-full max-h-full object-contain" src="{{asset('storage/' .$topics->thumbnail) }}" alt="topic thumbnail">
                            </div>
                            <div class="flex flex-col flex-auto space-y-2">
                                <div class="flex space-x-2">
                                    <!-- Title + Outline-->
                                    <div class="flex flex-col flex-auto space-y-2">
                                        <h2 class="text-xl font-bold mt-1">
                                            <a class="no-underline leading-6" href="{{$topics->website}}" target="_blank" rel="noopener">{{$topics->name}}
                                            </a>
                                        </h2>
                                        <div class="flex text-sm flex-auto leading-4">{{$topics->one_liner}}
                                        </div>
                                    </div>
                                    <!-- Upvote button-->
                                    <form action="/app/upvote/{{$topics->id}}" method="post" onsubmit="">
                                            @csrf
                                        <button class="sm:w-16 hover:bg-gray-100  upvote-btn group w-12" type="submit" id="upvote" title="">
                                            @auth
                                           <span class="text-green-600"><strong> {{currentUser()->checkIfUserUpvoted($topics) ? 'Upvoted' : 'Upvote'}} </strong></span>
                                            @endauth
                                            <div class="h-8 flex justify-center items-center">
                                                <span class="upvote-symbol group-hover:hidden h-6 flex m-2">
                                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="body_1" width="26" height="26">
                                                <g transform="matrix(0.05078125 0 0 0.05078125 0 0)">
                                                <g><path d="M249.5 -0.5C 251.5 -0.5 253.5 -0.5 255.5 -0.5C 255.5 109.833 255.5 220.167 255.5 330.5C 255.5 330.833 255.5 331.167 255.5 331.5C 250.202 336.297 245.035 341.297 240 346.5C 228.167 334.667 216.333 322.833 204.5 311C 197.803 306.421 191.136 306.421 184.5 311C 172.667 322.833 160.833 334.667 149 346.5C 144.132 354.076 144.632 361.243 150.5 368C 157.098 372.589 163.765 372.589 170.5 368C 178.348 359.985 186.348 352.152 194.5 344.5C 206.319 355.819 217.986 367.319 229.5 379C 235.083 382.826 241.083 383.492 247.5 381C 250.331 378.999 252.997 376.833 255.5 374.5C 255.5 420.167 255.5 465.833 255.5 511.5C 249.167 511.5 242.833 511.5 236.5 511.5C 170.862 501.696 123.362 467.03 94 407.5C 81.0731 377.092 76.4064 345.425 80 312.5C 86.4982 258.672 102.832 208.005 129 160.5C 158.446 106.937 193.78 57.6036 235 12.5C 239.432 7.55987 244.265 3.22653 249.5 -0.5z" stroke="none" fill="#FF9E00" fill-rule="nonzero" fill-opacity="0.99215686" />
                                                </g><g><path d="M255.5 -0.5C 257.167 -0.5 258.833 -0.5 260.5 -0.5C 264.785 1.62186 267.952 4.9552 270 9.5C 270.333 54.5 270.667 99.5 271 144.5C 275.934 165.39 289.101 174.557 310.5 172C 328.192 165.946 337.025 153.446 337 134.5C 341.47 126.016 348.303 123.183 357.5 126C 360.102 126.883 362.269 128.383 364 130.5C 394.395 178.635 415.395 230.635 427 286.5C 437.702 336.26 430.702 383.26 406 427.5C 374.95 475.288 331.116 503.288 274.5 511.5C 268.167 511.5 261.833 511.5 255.5 511.5C 255.5 465.833 255.5 420.167 255.5 374.5C 255.833 373.833 256.167 373.167 256.5 372.5C 279.465 350.035 302.299 327.368 325 304.5C 325.333 315.5 325.667 326.5 326 337.5C 333.71 349.438 342.71 350.438 353 340.5C 353.862 338.913 354.529 337.246 355 335.5C 355.667 311.5 355.667 287.5 355 263.5C 353.167 258.333 349.667 254.833 344.5 253C 320.167 252.333 295.833 252.333 271.5 253C 259.587 259.403 257.587 268.069 265.5 279C 267.167 280 268.833 281 270.5 282C 281.5 282.333 292.5 282.667 303.5 283C 287.632 299.035 271.632 314.868 255.5 330.5C 255.5 220.167 255.5 109.833 255.5 -0.5z" stroke="none" fill="#FE641A" fill-rule="nonzero" /></g>
                                                <g><path d="M256.5 372.5C 255.504 359.01 255.171 345.344 255.5 331.5C 255.5 331.167 255.5 330.833 255.5 330.5C 271.632 314.868 287.632 299.035 303.5 283C 292.5 282.667 281.5 282.333 270.5 282C 268.833 281 267.167 280 265.5 279C 257.587 268.069 259.587 259.403 271.5 253C 295.833 252.333 320.167 252.333 344.5 253C 349.667 254.833 353.167 258.333 355 263.5C 355.667 287.5 355.667 311.5 355 335.5C 354.529 337.246 353.862 338.913 353 340.5C 342.71 350.438 333.71 349.438 326 337.5C 325.667 326.5 325.333 315.5 325 304.5C 302.299 327.368 279.465 350.035 256.5 372.5z" stroke="none" fill="#C5E0E5" fill-rule="nonzero" /></g>
                                                <g><path d="M255.5 331.5C 255.171 345.344 255.504 359.01 256.5 372.5C 256.167 373.167 255.833 373.833 255.5 374.5C 252.997 376.833 250.331 378.999 247.5 381C 241.083 383.492 235.083 382.826 229.5 379C 217.986 367.319 206.319 355.819 194.5 344.5C 186.348 352.152 178.348 359.985 170.5 368C 163.765 372.589 157.098 372.589 150.5 368C 144.632 361.243 144.132 354.076 149 346.5C 160.833 334.667 172.667 322.833 184.5 311C 191.136 306.421 197.803 306.421 204.5 311C 216.333 322.833 228.167 334.667 240 346.5C 245.035 341.297 250.202 336.297 255.5 331.5z" stroke="none" fill="#E7EEEB" fill-rule="nonzero" /></g></g></svg>   
                                                </span>
                                                <span class="group-hover:flex flex text-xs hidden leading-4">Populer!</span>
                                            </div>
                                            <span class="upvotes-count"><strong>{{count($topics->upvotes) ?? '0'}}</strong></span>
                                        </button>
                                    </form>
                                </div>
                                <!-- Author + Date-->
                                <div class="flex space-x-4 items-center">
                                    <div class="text-xs">
                                        <div class="flex space-x-2 items-center">
                                            <img class="w-4 h-4 rounded-full shadow" src="https://www.gravatar.com/avatar/b722e5b6f55523aef840f835e83fa14c?d=identicon" alt="user avatar"><div class="font-bold">{{$topics->user->name ?? ''}}</div>
                                        </div>
                                    </div>
                                    <div class="text-xs text-gray-600">{{$topics->created_at->diffForHumans()}}</div>
                                    <div class="flex space-x-2 text-xs text-gray-600">
                                        {{$topics->category->name ?? ''}}
                                    </div>
                                </div>
                                <!-- Open website + Share-->
                                <div class="flex pt-2 flex-start items-start flex-wrap">
                                    <a class="inline-flex items-end w-full px-3 py-2 m-1 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600" href="{{$topics->website}}?ref=populer" target="_blank" rel="noopener">Open website</a>
                                    <a class="inline-flex items-end w-full px-3 py-2 m-1 text-sm font-medium leading-4 text-white bg-blue-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-blue-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-blue-600" href="https://twitter.com/intent/tweet?url=https://populer.com.ng/app/{{$topics->slug}}&amp;text=Hey%2C%20Just%20upvoted%20a%20popular%20topic%20%20%3A%0A%0A%F0%9F%A4%98%20{{$topics->name}}%2C%20%0A%0A(via%20%40Populer_Ng)" target="_blank" rel="noopener">Share on Twitter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-4 flex justify-center items-center" style="max-height: 300px">
                        <img class="object-contain" src="{{asset('storage/' .$topics->screenshot) }}" style="max-height: 268px" alt="topic screenshot">
                    </div>
                    <div class="sm:p-4 p-2">
                        <h3 class="text-lg font-bold mb-2">Description</h3>
                        <div class="text-formatted">
                            <p>{{$topics->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-md">
                <div class="flex flex-col divide-y-2 divide-gray-200">
                    @auth
                    <form action="{{route('addreview') }}" method="post">
                        @csrf
                        <div class="sm:flex-row sm:space-y-0 sm:space-x-4 flex flex-col space-y-2 items-start">
                            <label class="flex-auto flex flex-col items-stretch self-stretch space-y-1">
                                <textarea name="body" required="required" maxlength="102400" placeholder="What do you think of this Topic?"></textarea>
                                <input type="text" value="{{$topics->id}}" name="topic_id" hidden>
                            </label>

                        </div>
                        <button class="inline-flex items-end w-full px-2 py-2 m-2 text-sm text-white bg-indigo-600 md:px-2 md:w-auto rounded lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600" type="submit">Send</button>
                    </form>
                    @error('topics_id')
                    {{$message}}
                    @enderror
                    @error('body')
                    {{$message}}
                    @enderror
                    @error('user_id')
                    {{$message}}
                    @enderror
                    @else
                    <div class="sm:p-4 p-2">
                        <h3 class="text-lg font-bold mb-4">Comments</h3>
                        <a href="/login">Login to add a comment</a>
                    </div>
                    @endauth
                @forelse($topics->reviews as $review)
                    <div class="sm:p-4 p-2">
                        <ul>
                            <li class="my-4">
                                <div class="flex flex-col text-sm space-y-1">
                                    <div class="flex space-x-2 items-center">
                                        <img class="w-4 h-4 rounded-full shadow" src="https://www.gravatar.com/avatar/b722e5b6f55523aef840f835e83fa14c?d=identicon" alt="user avatar">
                                        <div class="font-bold">{{$review->user->name}}</div>
                                    </div>
                                    <div data-score="0.014622512546485894">
                                      <p>{{$review->body}}</p>  
                                    </div>
                                    <div class="flex space-x-2 text-xs">
                                        <form action="#" method="post" onsubmit="">
                                            <button class="upvote-comment-btn flex space-x-1 no-underline" type="submit" id="upvoteCommentButton-62a9c76fed8fdc00174a91e8-62a9c78fed8fdc00174a91ea" title="">
                                                <span class="upvote-symbol">▲</span>
                                                <span class="upvotes-count">1</span>
                                            </button>
                                        </form>
                                        <span>{{ $review->updated_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                 @empty
                    <div class="sm:p-4 p-2">
                        No Comments Yet
                    </div>   
                @endforelse
                </div>
            </div>
        </div>
        
    </div>


</x-master>
