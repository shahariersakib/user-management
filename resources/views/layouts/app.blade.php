<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'User Management') }}</title>

    <link rel="stylesheet" href="{{ asset('/css') }}/index.css">
    <link rel="stylesheet" href="{{ asset('/css') }}/auth.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

</head>

<body>
    <div class="container">
        <section class="color-1">
            <nav class="cl-effect-14">
                <a href="{{ route('user-list.index') }}">User List</a>
                <a href="{{ route('user-list-two.index') }}">User List 2</a>
                <a href="{{ route('roles.index') }}">Roles</a>
                <a href="{{ route('users.index') }}">System Users</a>
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @else
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            </nav>
        </section>
    </div>

    @yield('content')

    <script src="{{ asset('/js') }}/index.js"></script>
</body>

</html>
