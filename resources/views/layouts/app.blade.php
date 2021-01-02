<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scripts -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery library -->


    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'TweetClone') }}</title>

    <link rel="shortcut icon" href="{{asset('images/logo.svg')}}">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">

                <div class="row-cols-2">

                    <a href="{{url('/')}}" style="text-decoration: none">
                        <img src="{{asset('images/logo.svg')}}" height="50" width="50">
                        <h5 class="navbar-brand">
                            {{ config('app.name', 'TweetClone') }}
                        </h5>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::user()->name ?? Auth::user()->username}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('tweet.create') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('tweet-form').submit();">
                                        {{ __('Tweet') }}
                                    </a>
                                    <form id="tweet-form" action="{{ route('tweet.create') }}" method="get" class="d-none">
                                        @csrf
                                    </form>


                                    <a class="dropdown-item" href="{{ route('account.show', Auth::user()-> id )}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('account-form').submit();">
                                        {{ __('Account') }}
                                    </a>
                                    <form id="account-form" action="{{ route('account.show', Auth::user()-> id )}}" method="get" class="d-none">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('account.edit', Auth::user()->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('settings-form').submit();">
                                        {{ __('Settings') }}
                                    </a>
                                    <form id="settings-form" action="{{ route('account.edit', Auth::user()->id)}}" method="get" class="d-none">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('tweet.index', Auth::user()->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('feed-form').submit();">
                                        {{ __('Feed') }}
                                    </a>
                                    <form id="feed-form" action="{{ route('tweet.index', Auth::user()->id)}}" method="get" class="d-none">
                                        @csrf
                                    </form>

                                    <a class="dropdown-item" href="{{ route('account.destroy', Auth::user()->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                        {{ __('Delete Account') }}
                                    </a>
                                    <form id="delete-form" action="{{ route('account.destroy', Auth::user()->id)}}" method="post" class="d-none">
                                        @method('DELETE')
                                        @csrf
                                    </form>


                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" id="app">
            @yield('content')
        </main>



        <footer class="text-center p-3" style="background-color: rgb(0, 172, 238)">
            <strong>© 2020 Copyright: TweetClone.com</strong>
        </footer>
    </div>

    <script src="{{mix('js/app.js')}}"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{asset('js/ajax.js')}}" type="text/javascript">
        // Save Comment

    </script>

</body>
</html>
