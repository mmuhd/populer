<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">  

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Populer - Most Popular Topics in Nigeria!</title>
    <!-- PWA  -->
	<meta name="theme-color" content="#6777ef"/>
	<link rel="apple-touch-icon" href="{{ asset('favicon-32x32.png') }}">
	<link rel="manifest" href="{{ asset('/manifest.json') }}">
     <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
     <!-- Fonts -->
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-906TTT1GCQ"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-906TTT1GCQ');
	</script>
</head>

<body class="bg-white h-full antialiased leading-relaxed ">
<div class="w-full px-6 pb-12 antialiased bg-white">
<section>
   <div class="mx-auto">
	<nav
          class="relative z-50 h-24 select-none"
          x-data="{ showMenu: false }"
        >
          <div
            class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-200 md:overflow-visible lg:justify-center sm:px-4 md:px-2"
          >
            <div class="flex items-center justify-start w-1/4 h-full pr-4">
              <a href="{{ route('home') }}" class="inline-block py-4 md:py-0">
                <span class="p-1 text-xl font-black leading-none text-gray-900"
                  >
                  <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="body_1" width="26" height="26">

				<g transform="matrix(0.05078125 0 0 0.05078125 0 0)">
					<g>
				        <path d="M249.5 -0.5C 251.5 -0.5 253.5 -0.5 255.5 -0.5C 255.5 109.833 255.5 220.167 255.5 330.5C 255.5 330.833 255.5 331.167 255.5 331.5C 250.202 336.297 245.035 341.297 240 346.5C 228.167 334.667 216.333 322.833 204.5 311C 197.803 306.421 191.136 306.421 184.5 311C 172.667 322.833 160.833 334.667 149 346.5C 144.132 354.076 144.632 361.243 150.5 368C 157.098 372.589 163.765 372.589 170.5 368C 178.348 359.985 186.348 352.152 194.5 344.5C 206.319 355.819 217.986 367.319 229.5 379C 235.083 382.826 241.083 383.492 247.5 381C 250.331 378.999 252.997 376.833 255.5 374.5C 255.5 420.167 255.5 465.833 255.5 511.5C 249.167 511.5 242.833 511.5 236.5 511.5C 170.862 501.696 123.362 467.03 94 407.5C 81.0731 377.092 76.4064 345.425 80 312.5C 86.4982 258.672 102.832 208.005 129 160.5C 158.446 106.937 193.78 57.6036 235 12.5C 239.432 7.55987 244.265 3.22653 249.5 -0.5z" stroke="none" fill="#FF9E00" fill-rule="nonzero" fill-opacity="0.99215686" />
					</g>
					<g>
				        <path d="M255.5 -0.5C 257.167 -0.5 258.833 -0.5 260.5 -0.5C 264.785 1.62186 267.952 4.9552 270 9.5C 270.333 54.5 270.667 99.5 271 144.5C 275.934 165.39 289.101 174.557 310.5 172C 328.192 165.946 337.025 153.446 337 134.5C 341.47 126.016 348.303 123.183 357.5 126C 360.102 126.883 362.269 128.383 364 130.5C 394.395 178.635 415.395 230.635 427 286.5C 437.702 336.26 430.702 383.26 406 427.5C 374.95 475.288 331.116 503.288 274.5 511.5C 268.167 511.5 261.833 511.5 255.5 511.5C 255.5 465.833 255.5 420.167 255.5 374.5C 255.833 373.833 256.167 373.167 256.5 372.5C 279.465 350.035 302.299 327.368 325 304.5C 325.333 315.5 325.667 326.5 326 337.5C 333.71 349.438 342.71 350.438 353 340.5C 353.862 338.913 354.529 337.246 355 335.5C 355.667 311.5 355.667 287.5 355 263.5C 353.167 258.333 349.667 254.833 344.5 253C 320.167 252.333 295.833 252.333 271.5 253C 259.587 259.403 257.587 268.069 265.5 279C 267.167 280 268.833 281 270.5 282C 281.5 282.333 292.5 282.667 303.5 283C 287.632 299.035 271.632 314.868 255.5 330.5C 255.5 220.167 255.5 109.833 255.5 -0.5z" stroke="none" fill="#FE641A" fill-rule="nonzero" />
					</g>
					<g>
				        <path d="M256.5 372.5C 255.504 359.01 255.171 345.344 255.5 331.5C 255.5 331.167 255.5 330.833 255.5 330.5C 271.632 314.868 287.632 299.035 303.5 283C 292.5 282.667 281.5 282.333 270.5 282C 268.833 281 267.167 280 265.5 279C 257.587 268.069 259.587 259.403 271.5 253C 295.833 252.333 320.167 252.333 344.5 253C 349.667 254.833 353.167 258.333 355 263.5C 355.667 287.5 355.667 311.5 355 335.5C 354.529 337.246 353.862 338.913 353 340.5C 342.71 350.438 333.71 349.438 326 337.5C 325.667 326.5 325.333 315.5 325 304.5C 302.299 327.368 279.465 350.035 256.5 372.5z" stroke="none" fill="#C5E0E5" fill-rule="nonzero" />
					</g>
					<g>
				        <path d="M255.5 331.5C 255.171 345.344 255.504 359.01 256.5 372.5C 256.167 373.167 255.833 373.833 255.5 374.5C 252.997 376.833 250.331 378.999 247.5 381C 241.083 383.492 235.083 382.826 229.5 379C 217.986 367.319 206.319 355.819 194.5 344.5C 186.348 352.152 178.348 359.985 170.5 368C 163.765 372.589 157.098 372.589 150.5 368C 144.632 361.243 144.132 354.076 149 346.5C 160.833 334.667 172.667 322.833 184.5 311C 191.136 306.421 197.803 306.421 204.5 311C 216.333 322.833 228.167 334.667 240 346.5C 245.035 341.297 250.202 336.297 255.5 331.5z" stroke="none" fill="#E7EEEB" fill-rule="nonzero" />
					</g>
				</g></svg></span>
				<span>Popular</span
                  ><span class="text-indigo-600">.</span></span
                >
              </a>
            </div>
            <div
              class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex"
              :class="{'flex fixed': showMenu, 'hidden': !showMenu }"
            >
              <div
                class="flex-col w-full justify-end h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row"
              >
              
	            @auth
                <div
                  class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center"
                >
                 <a
                    href="{{ route('submit') }}"
                    class="inline-flex items-end w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600"
                    >Submit Topic</a
                  >
                  <a
                    href="{{ route('notifications') }}"
                    class="inline-block w-full py-2 mx-0 ml-6 font-medium text-left text-indigo-600 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center"
                    >Notifications</a
                  >
                  <a
                    href="{{ route('myupvotes') }}"
                    class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center"
                    >Upvotes</a
                  >
                  <a
                    href="{{ route('profile', currentUser()->id) }}"
                    class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center"
                    >Profile</a
                  >
                  <a
                    href="{{ url('/logout') }}"
                    class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
	                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                    </form>
                </div>
                @else
                <div
                  class="flex flex-col items-start justify-end w-full pt-4 md:items-end md:w-1/3 md:flex-row md:py-0"
                >
                  <a
                    href="{{ route('login') }}"
                    class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto"
                    >{{ __('Login') }}</a
                  >
                  @if (Route::has('register'))
                  <a
                    href="{{ route('register') }}"
                    class="inline-flex items-end w-full px-6 py-3 text-sm font-medium leading-4 text-indigo-500 bg-white md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 hover:text-white focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-white"
                    >{{ __('Register') }}</a
                  >
	              @endif
                  <a
                    href="{{ route('submit') }}"
                    class="inline-flex items-end w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600"
                    >Submit Topic</a
                  >
                </div>
                @endauth
              </div>
            </div>
            <div
              @click="showMenu = !showMenu"
              class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100"
            >
              <svg
                class="w-6 h-6 text-gray-700"
                x-show="!showMenu"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor"
                x-cloak=""
              >
                <path d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
              <svg
                class="w-6 h-6 text-gray-700"
                x-show="showMenu"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                x-cloak=""
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                ></path>
              </svg>
            </div>
          </div>
        </nav>
    </div>
   </section> 
<!-- Main Boy -->
<div class="content-center min-h-screen">
  
       
       {{$slot}}

</div>

</div>

<!-- footer section -->
<div id="footer" class="flex mt-16 p-8 bg-gray-100 w-full rounded-lg text-center content-center items-center justify-center">
    <p class="text-sm text-gray-600">Populer Copyright (c) 2022 - All Rights Reserved</p>
</div>
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
</body>
</html>
