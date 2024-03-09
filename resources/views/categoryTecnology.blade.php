@extends('templates/categoryArticle_layout')

@section('content')
<div>
    @foreach($articles as $article)
        <img src="{{ $article->url_imagem }}" width="300" height="200">
    @endforeach
</div>
<span class="img_topo_caixa">
    <a href="#" class="scroll-to-top"><img class="img_topo" src="{{ asset('images/topo.png') }}" alt="topo"></a>
</span>
@endsection