<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('StartUp|Hunt') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-screen font-sans antialiased leading-none bg-gray-100">
    <div id="app">
        <header class="py-3 bg-white border-b border-gray-100">
            <div class="flex items-center justify-between max-w-6xl mx-auto">
                <div>
                    <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo-600 no-underline">
                        {{ ('StartUp|Hunt') }}
                    </a>
                </div>
                <ul class="flex items-center hidden space-x-8 lg:flex">
            <!----    <li><a href="{{ route('startup.index') }}" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-indigo-400 ">Startup</a></li>  -------->
                <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-indigo-400 ">Features</a></li>
                <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-indigo-400 ">About us</a></li>
                </ul>
                <nav class="justify-start space-x-4 text-sm text-teal-800 sm:text-base">
                                       
                    @guest
                        <a class="px-3 py-2 text-sm font-semibold text-indigo-500 no-underline bg-white border rounded-md hover:bg-gray-100" href="{{ route('login') }}">{{ __('Log in') }}</a>
                        @if (Route::has('register'))
                            <a class="px-3 py-2 text-sm font-semibold text-white no-underline bg-indigo-500 border rounded-md hover:bg-indigo-700" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>
                        <a href="{{ route('startup.create') }}"><button class="px-4 py-2 border border-indigo-500">Post</button></a>
                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div class="max-w-6xl mx-auto">
        @yield('content')
        </div>

        <div>
            
        </div>
    </div>
</body>
</html>
