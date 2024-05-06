<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/style_desktop/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/style_desktop/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/style_desktop/categoryArticle.css') }}">

    <link rel="stylesheet" href="{{ asset('styles/style_tablet/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/style_tablet/categoryArticle.css') }}">
    
    <link rel="stylesheet" href="{{ asset('styles/style_cell/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/style_cell/categoryArticle.css') }}">
    
    <link rel="stylesheet" href="{{ asset('styles/style_cellSmall/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/style_cellSmall/categoryArticle.css') }}"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100;300;400;900&family=Maven+Pro:wght@400..900&family=Potta+One&family=Rubik+Maps&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>{{ $title}}</title>
</head>
<body>
    @include('nav')
    @yield('content')
</body>
</html>