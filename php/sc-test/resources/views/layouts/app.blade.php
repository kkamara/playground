<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" /> --}}
</head>
<body>
    <div id="app"></div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
