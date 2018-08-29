<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Source+Code+Pro|Spectral" rel="stylesheet">
    <!-- Scripts -->
    <script defer src="{{ mix('js/app.js') }}"></script>
</head>
<body class="bg-white">
    <div id="app" class="w-full">
        @yield('content')
    </div>
</body>
</html>
