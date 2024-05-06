@extends('templates/categoryArticle_layout')

@section('content')

    <section class="categoria_tecnologia">
        <br><br><h2>Soft Skills</h2><br><br>
        <div class="card_categorias_caixa">
            @foreach ($articles as $article)
                <div class="card_categorias">
                    <div class="categoria_do_artigo_caixa">
                        <h4 class="categoria_do_artigo">{{ $article->categoria_do_artigo }}</h4>
                    </div>
                    <a href="{{ route('showArticle', ['id' => $article->id]) }}">
                        <div class="img_card_categorias_caixa">  
                            <img class="img_card_categorias" src="{{ $article->url_imagem }}" alt="{{ $article->seo_titulo }}">                            
                        </div>
                        <div class="created_at_caixa">
                            <h2 class="titulo_categorias">{{ $article->seo_titulo }}</h2>
                            <p class="created_at">{{ $article->created_at }}</p>
                        </div>
                    </a>                        
                </div>
            @endforeach                
        </div>
    </section>

@endsection