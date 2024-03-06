<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/createArticle_layout.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/createArticle.css') }}">
    {!! SEO::generate(true) !!}
    <title>{{ $title }}</title>

</head>
<body>
    @yield('content')
    @yield('scripts')
</body>
</html>