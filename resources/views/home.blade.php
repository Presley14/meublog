@extends('templates/home_layout')

@section('content')
    <div class="container">
        <section class="secao_principal">
            <div class="recentes_home">
                <h1>Recentes</h1>
                @foreach ($articles_recent as $article)
                    <img src="{{ $article->url_imagem }}" alt="" width="300" height="200">
                    <h2>{{ $article->seo_titulo }}</h2>
                    <p>{{ $article->seo_descricao }}</p>
                    <a href="{{ route('showArticle', ['id' => $article->id]) }}">ver mais</a>
                @endforeach
            </div>
            <div class="emDestaque_home">
                <div>
                    @foreach($articles_emphasis as $article)
                        <p>{!! $article->texto_artigo !!}</p>
                    @endforeach
                </div>
            </div>
        </section>
        <h2>Artigos por sessao</h2>
        <section class="sessao_artigos">
            <div class="desencolvimento_pessoal">
                <h3>desencolvimento pessoal</h3>
                <div>
                    <a href=""><img src="{{ asset('images/2.jpg')}}" width="300" height="200"></img></a>
                </div>
            </div>
            <div class="tecnologia">
                <h3>tecnologia</h3>
                <div>
                    <a href=""><img src="{{ asset('images/3.png')}}" width="300" height="200"></img></a>
                </div>
            </div>
            <div class="bem_estar">
                <h3>bem-estar</h3>
                <div>
                    <a href=""><img src="{{ asset('images/1.jpg')}}" width="300" height="200"></img></a>
                </div>
            </div>
            <div class="viagem">
                <h3>viagem</h3>
                <div>
                    <a href=""><img src="{{ asset('images/4.webp')}}" width="300" height="200"></img></a>
                </div>
            </div>
        </section>
        <section class="sessao_mais">
            <div>
                <h2>mais</h2>
                @foreach($articles_more as $article)
                    <p>{!! $article->texto_artigo !!}</p>
                @endforeach
            </div>
        </section>
        <section class="sessao_redator">
            <div>
                <h2>Redator</h2>
            </div>
        </section>
    </div>
@endsection