<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content='{{ csrf_token() }}'>

    <title>{{ $title }} | {{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel='stylesheet' href="/css/app.css">
    <link rel='stylesheet' href="/fontawesome/css/all.min.css">
    <link rel='stylesheet' href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @section('styles') @show

    @livewireStyles
    @include('layouts.scripts')
    @section('scripts') @show
    @livewireScripts

</head>
<body class="flex justify-center">

    <div class="w-10/12 my-10 flex">
        @yield('content')
    </div>

</body>
</html>
