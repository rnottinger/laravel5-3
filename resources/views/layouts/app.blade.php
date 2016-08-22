<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    {{--<li>{{ auth()->guard('admin')->check() }}</li>--}}
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        {{--<li><a href="{{ url('/legit') }}">Login</a></li>--}}
                        @yield('login_link')
{{--                        <li><a href="{{ url('/register') }}">Register</a></li>--}}
                        @yield('register_link')
                    @else
                        {{--<li>blam</li>--}}
                        {{--@if (auth()->guard('web')->check())--}}
                            {{--<li>web guard</li>--}}
                        {{--@endif--}}
                        {{--@if (Auth::guard('customer')->check())--}}
                            {{--<li>customers guard</li>--}}
                        {{--@endif--}}
                        {{--@if (Auth::guard('admin')->check())--}}
                            {{--<li>Admins Guard</li>--}}
                        {{--@endif--}}

                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            @yield('logout_link')
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
