@extends('templates/articlePage_layout')

@section('content')
    <section class="container_mostrar_artigo">
        <div>
            <div>
                <img src="{{ $article->url_imagem }}" alt="canada" width="100%" height="500">
            </div>
            <div>
                <h1>{{ $article->seo_titulo}}</h1>    
            </div>
            <div>
                <h2>{{ $article->seo_descricao }}</h2>
            </div>
            <div>
                <p>autor</p>
                <span>data</span>
            </div>
            <div>
                <p>{!! $article->texto_artigo !!}</p>
            </div>
        </div>
        <div>
            <div>
                <h2>recomendacoes</h2>
                <div>
                    @foreach($articles_exeption_id as $article)
                        <img src="{{ $article->url_imagem }}" width="300" height="200">
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <div>
                <h2>mais artigos</h2>
            </div>
        </div>
    </section>
@endsection