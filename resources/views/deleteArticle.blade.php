@extends('templates/management_layout')
@section('content')

<div class="containeirManagement">
    
    <section class="lista_article">
        <div class="caixa_voltar">
            <h1 class="titulo_manage">Excluir artigo?</h1>
            <a class="voltar_criar" href="{{ route('createArticle') }}">Voltar</a>
        </div>
        <div>
            @foreach ($articles as $article)
                <div  class="card_lista">
                    <h3 class="seo_titulo">{{ $article->seo_titulo }}</h3>
                    <div class="link_delete_caixa">
                        <a class="link_delete" href="{{ route('deleteArticleForm', ['id' => Crypt::encrypt($article->id)]) }}">Excluir</a>
                    </div>            
                </div>
            @endforeach
        </div>
    </section>
</div>

@endsection
