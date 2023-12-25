<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('/css') }}/index.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

</head>
<body>
   <div class="container">
   	<section class="color-1">
   		<nav class="cl-effect-14">
   			<a href="#">File</a>
   			<a href="#">Edit</a>
   			<a href="#">View</a>
   			<a href="#">Favourites</a>
   			<a href="{{ route('login') }}">Login</a>
   			<a href="{{ route('register') }}">Register</a>
   		</nav>
   	</section>
   </div>

           <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

   <script src="{{ asset('/js') }}/index.js"></script>
</body>
</html>
