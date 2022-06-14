<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('pageTitle')</title>
    <style>
        body{
            height: 100vh;
        }
    </style>
</head>
<body>
    @include('partials.header')
    @yield('mainContent')
    @include('partials.footer')
</body>
</html>