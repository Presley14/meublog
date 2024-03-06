<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/articlePage.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/articlePage_layout.css') }}">
    <title>{{ $title }}</title>
</head>
<body>
    @include('nav')
    @yield('content')
</body>
</html>