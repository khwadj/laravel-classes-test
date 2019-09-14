<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>
    <!-- 			<link rel="icon" href=""/> -->

    <!-- Fonts -->

    <!-- Icons -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >

    <!-- Scripts  -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>

<body>

    <div id="main-container" class="container">
        <div class="row">
            @yield('content')
        </div>

    </div>

</body>
</html>
