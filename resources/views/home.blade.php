@extends('templates/home_layout')

@section('content')
    <div class="container_home">
        <section class="secao_recentes">
            <div class="recentes_home">
                <h1>Artigos recentes</h1>
                @foreach ($articles_recent as $article)
                    <div class="recentes_caixa">
                        <br>
                        <div class="categoria_do_artigo_caixa">
                           <h4 class="categoria_do_artigo">{{ $article->categoria_do_artigo }}</h4>
                        </div>
                        <a href="{{ route('showArticle', ['id' => $article->id]) }}">
                            <div class="img_recente_caixa">  
                                <img class="img_recente" src="{{ $article->url_imagem }}" alt="{{ $article->seo_titulo }}">                            
                            </div>
                            <p class="created_at_linear">{{ $article->created_at }}</p>
                            <h2 class="titulo_recente">{{ $article->seo_titulo }}</h2>
                        </a>                        
                    </div>
                @endforeach
            </div>
            <div class="recentes_home_vertical">
                <br>
                @foreach ($articles_recent_vertical as $article)
                <br>
                    <div class="categoria_do_artigo_caixa">
                        <h4 class="categoria_do_artigo">{{ $article->categoria_do_artigo }}</h4>
                    </div>
                    <div class="recente_caixa_vertical">
                        <a href="{{ route('showArticle', ['id' => $article->id]) }}">
                            <div class="img_titulo_recente_vertical">
                                <img class="img_destaque_vertical" src="{{ $article->url_imagem }}" alt="{{ $article->seo_titulo }}">                                        
                            </div>
                            <div class="created_at_caixa">
                                <p class="created_at">{{ $article->created_at->format('d-m-Y') }}</p>
                                <h3 class="titulo_recente_vertical">{{ $article->seo_titulo }}</h3>                                
                            </div>
                        </a>            
                    </div>
                @endforeach
            </div>
        </section>
        <section class="secao_destaque">
            <h1>Destaques</h1>
            <div class="card_caixa">
                @foreach ($articles_emphasis as $article)
                    <div class="card_destaque">
                        <div class="categoria_do_artigo_caixa">
                            <h4 class="categoria_do_artigo">{{ $article->categoria_do_artigo }}</h4>
                        </div>
                        <a href="{{ route('showArticle', ['id' => $article->id]) }}">
                            <div class="img_card_destaque_caixa">  
                                <img class="img_card_destaque" src="{{ $article->url_imagem }}" alt="{{ $article->seo_titulo }}">                            
                            </div>
                            <p class="created_at_linear">{{ $article->created_at }}</p>
                            <h2 class="titulo_destaque">{{ $article->seo_titulo }}</h2>
                        </a>                        
                    </div>
                @endforeach                
            </div>
        </section>
        <section class="secao_mais">
            <h2 class="titulo_mais_artigo">Mais artigos</h2>
            <div class="card_mais_caixa">
                @foreach ($articles_emphasis as $article)
                    <div class="card_mais">
                        <div class="categoria_do_artigo_caixa">
                            <h4 class="categoria_do_artigo">{{ $article->categoria_do_artigo }}</h4>
                        </div>
                        <a href="{{ route('showArticle', ['id' => $article->id]) }}">
                            <div class="img_card_mais_caixa">  
                                <img class="img_card_mais" src="{{ $article->url_imagem }}" alt="{{ $article->seo_titulo }}">                            
                            </div>
                            <div class="created_at_caixa">
                                <p class="created_at">{{ $article->created_at }}</p>
                                <h2 class="titulo_mais">{{ $article->seo_titulo }}</h2>
                            </div>
                        </a>                        
                    </div>
                @endforeach                
            </div>
        </section>
        <section >
            <h2 class="titulo_artigos_secao">Artigos por sessao</h2>
            <div class="secao_artigos">
                <div class="desencolvimento_pessoal">
                    <h3 class="artigo_por_sesao">Desencolvimento pessoal</h3>
                    <div>
                        <a class="link_img_por_secao" href="{{ route('desenvolvimento_pessoal')}}"><img class="img_por_secao" src="{{ asset('images/2.jpg')}}"></img></a>
                    </div>
                </div>
                <div class="tecnologia">
                    <h3 class="artigo_por_sesao">Tecnologia-vital</h3>
                    <div>
                        <a class="link_img_por_secao" href="{{ route('categoriaTecnolongia')}}"><img class="img_por_secao" src="{{ asset('images/3.png')}}"></img></a>
                    </div>
                </div>
                <div class="bem_estar">
                    <h3 class="artigo_por_sesao">Bem-estar</h3>
                    <div>
                        <a class="link_img_por_secao" href="{{ route('bemEstar')}}"><img class="img_por_secao" src="{{ asset('images/1.jpg')}}"></img></a>
                    </div>
                </div>
                <div class="viagem">
                    <h3 class="artigo_por_sesao">Férias</h3>
                    <div>
                        <a class="link_img_por_secao" href="{{ route('viagem')}}"><img class="img_por_secao" src="{{ asset('images/4.webp')}}"></img></a>
                    </div>
                </div>
            </div>
        </section>
        <span class="img_topo_caixa">
            <a href="#" class="scroll-to-top"><img class="img_topo" src="{{ asset('images/topo.png') }}" alt="topo"></a>
        </span>
    </div>
@endsection