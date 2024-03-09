@extends('templates/categoryArticle_layout')

@section('content')
<div>
    @foreach($articles as $article)
        <img src="{{ $article->url_imagem }}" width="300" height="200">
    @endforeach
</div>
@endsection