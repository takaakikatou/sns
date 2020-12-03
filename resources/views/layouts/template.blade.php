<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SNS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/posts/index') }}">
                <span class="logo">M</span>ASS
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="scrolltxt" >
                    <a href="#btm">SCROLL</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul>
                        <li class="nav-menu"><a class="nav-link" href="{{ route('posts.index') }} ">TOP.</a></li>
                        <li class="nav-menu"><a class="nav-link" href="{{ route('home.profile') }} ">PROFILE.</a></li>
                        <li class="nav-menu"><a class="nav-link" href="{{ route('home.activity') }}">ACTIVITY.</a></li>
                        <li class="nav-menu"><a class="nav-link" href="{{ route('posts.create') }}">POSTING.</a></li>
                    </ul>
                    <!-- middle Side Of Navbar --> 
                    <div class="screen">
                        <div class="container top">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            tweet
                                        </div>
                                        <div class="card-body-wrap">
                                            @foreach ($posts as $post)
                                            <div class="card-body">
                                                <h6 class="card-title">{{ $post->title }}</h6>
                                                <p class="card-text">{{ $post->body }}</p>
                                            </div>
                                            @if (empty(asset('uploads/'. $post->post_image)))
                                            <img class="post_image" src="{{ asset('image/unimage.jpg') }}" width="200px" height="200px">
                                            @else
                                            <img class="post_image" src="{{ $post->post_image }}" width="200px" height="200px">
                                            @endif
                                            <div class="card-footer text-muted">
                                                {{ $post->created_at }}
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item logout-btn">
                                @if (empty(Auth::user()->profile_image))
                                    <img class="profile_myimage" src="{{ asset('image/アイコン.png') }}" width="60px" height="60px">
                                @else
                                <img src="{{Auth::user()->profile_path}}">
                                @endif
                               
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="">
                                    {{ Auth::user()->name }} 
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!-- <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a> -->
                                    <a href="{{route('user.logout')}}" class="logout">logout .</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>