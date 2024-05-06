@extends('templates/categoryArticle_layout')

@section('content')
    <section class="categoria_tecnologia">
        <br><br><br>
        <div class="resultado_pesquisa_caixa">
            <h2 class="resultado_pesquisa">resultado da pesquisa:</h2>
            <p class="resultado_pesquisa_texto">{{ $resultado_pesquisa }}</p>
        </div><hr><br><br><br><br><br><br>
        <div class="card_categorias_caixa">
            @foreach ($artigos as $article)
                <div class="card_categorias">
                    <div class="categoria_do_artigo_caixa">
                        <h4 class="categoria_do_artigo">{{ $article->categoria_do_artigo }}</h4>
                    </div>
                    <a href="{{ route('showArticle', ['id' => $article->id]) }}">
                        <div class="img_card_categorias_caixa">  
                            <img class="img_card_categorias" src="{{ $article->url_imagem }}" alt="{{ $article->seo_titulo }}">                            
                        </div>
                        <div class="created_at_caixa_categoria">
                            <h2 class="titulo_categorias">{{ $article->seo_titulo }}</h2>
                            <p class="created_at">{{ $article->created_at->format('Y-m-d') }}</p>
                        </div>
                    </a>                        
                </div>
            @endforeach                
        </div>
    </section>
@endsection