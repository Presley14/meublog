@extends('templates/articlePage_layout')

@section('content')
    <section class="container_mostrar_artigo">
        <div>
            <div>
                <img class="img_pagina_artigo" src="{{ $article->url_imagem }}" alt="canada">
            </div>
            <div class="pagina_titulo_artigo">
                <h1>{{ $article->seo_titulo}}</h1>    
            </div>
            <div class="pagina_descricao_artigo">
                <p>{{ $article->seo_descricao }}</p>
            </div>                        
            <div class="caixa_autor_pagina">
                <h4 class="nome_autor">Presley Oliveira |</h4> 
                <p class="data_pagina">{{ $article->created_at->format('d-m-Y') }}</p>
            </div>
            <div class="pagina_artigo_texto_mais">
                <div class="pagina_artigo_texto">
                    <p>{!! $article->texto_artigo !!}</p>
                </div>
                <div class="pagina_artigo_mais">
                    @foreach($art_vertical_id_ as $article)
                        <div class="card_artigo_vertical">
                            <div class="categoria_do_artigo_caixa">
                                <h4 class="categoria_do_artigo">{{ $article->categoria_do_artigo }}</h4>
                            </div>
                            <a href="{{ route('showArticle', ['id' => $article->id]) }}">
                                <div class="img_pagina_mais_caixa">
                                    <img class="img_pagina_mais" src="{{ $article->url_imagem}}" alt="">
                                </div>
                                <h2 class="pagina_artigo_vertical">{{ $article->seo_titulo }}</h2>
                            </a>
                        </div>
                    @endforeach
                </div>                
            </div>
        </div>
        <div>
            <hr class="hr_recomenda">
            <div class="card_recomenda_caixa">
                @foreach ($articles_emphasis as $article)
                    <div class="card_recomenda">
                        <div class="categoria_do_artigo_caixa">
                            <h4 class="categoria_do_artigo">{{ $article->categoria_do_artigo }}</h4>
                        </div>
                        <a href="{{ route('showArticle', ['id' => $article->id]) }}">
                            <div class="img_recomenda_caixa">  
                                <img class="img_card_recomenda" src="{{ $article->url_imagem }}" alt="{{ $article->seo_titulo }}">                            
                            </div>
                            <div class="created_at_caixa_recomenda">
                                <h2 class="titulo_mais_recomenda">{{ $article->seo_titulo }}</h2>
                                <p class="created_at_recomenda">{{ $article->created_at->format('d-m-Y') }}</p>
                            </div>
                        </a>                        
                    </div>
                @endforeach                
            </div>
        </div>
        <span class="img_topo_caixa">
            <a href="#" class="scroll-to-top"><img class="img_topo" src="{{ asset('images/topo.png') }}" alt="topo"></a>
        </span>
        <span class="img_rede_caixa">
            <p>Compartilhe</p>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}" target="_blank" class="link_rede">
                <img class="img_rede" src="{{ asset('images/in.png') }}" alt="topo">
            </a>
            <a href="https://api.whatsapp.com/send?text={{ urlencode($article->seo_titulo . ' ' . url()->current()) }}" target="_blank" class="link_rede">
                <img class="img_rede" src="{{ asset('images/zap.png') }}" alt="WhatsApp">
            </a>
            <a href="https://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank" rel="noopener noreferrer" class="link_rede">
                <img class="img_rede" src="{{ asset('images/facebook.png') }}" alt="topo">
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $article->seo_titulo }}" target="_blank" class="link_rede">
                <img class="img_rede" src="{{ asset('images/twitter.png') }}" alt="topo">
            </a>
        </span>
    </section>
@endsection