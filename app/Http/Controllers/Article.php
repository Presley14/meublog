<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use App\Models\CategoryModel;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class Article extends Controller
{ 
    public function createArticle()
    {
        $model = new CategoryModel();
        $category = $model->all();

        $data = [
            'title' => 'Criar Texto',
            'category' => $category,
        ];

        return view('createArticle', $data);
    }

    public function form_criar_artigo(Request $request)
    {
        $request->validate(
            [
                'text_article' => 'required|min:6', // obs: o textarea já contém 8 caracteres incluso.
                'seo_title' => 'required|min:3',
                'seo_description' => 'required|min:3',
                'seo_keys' => 'required|min:10',
                'url_imagem_capa' => 'required'
            ],
            [
                'text_article.required' => 'O campo é de preenchimento obrigatório.',
                'text_article.min' => 'O campo deve conter mo mínimo 600 caracteres',

                'seo_title.required' => 'O campo é de preenchimento obrigatório.',
                'seo_title.min' => 'O campo deve conter mo mínimo 3 caracteres',

                'seo_description.required' => 'O campo é de preenchimento obrigatório.',
                'seo_description.min' => 'O campo deve conter mo mínimo 3 caracteres',

                'seo_keys.required' => 'O campo é de preenchimento obrigatório.',
                'seo_keys.min' => 'O campo deve conter mo mínimo 10 caracteres',

                'url_imagem_capa.required' => 'O campo é de preenchimento obrigatório.',
            ]);
        
        $title_seo = $request->input('seo_title');
        $description_seo = $request->input('seo_description');
        $keys_seo = explode(',', $request->input('seo_keys'));
        $text_article = $request->input('text_article');
        $categoria_do_artigo = $request->input('select_category');
        $url_imagem_capa = $request->input('url_imagem_capa');

        SEOTools::setTitle($title_seo);
        SEOTools::setDescription($description_seo);
        //SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        SEOTools::metatags()->setKeywords($keys_seo);

        $article = ArticleModel::where('seo_titulo', '=', $title_seo)
                         ->whereNull('deleted_at')
                         ->first();

        if($article){
            return redirect()->route('createArticle')
                             ->withInput()
                             ->with('article_error', 'Já existe um artigo com esse nome.');
        }

        $model = new ArticleModel();
        $model->categoria_do_artigo = $categoria_do_artigo;
        $model->seo_titulo = $title_seo;
        $model->seo_descricao = $description_seo;
        $model->seo_keys = implode(',', $keys_seo);
        $model->url_imagem = $url_imagem_capa;
        $model->texto_artigo = $text_article;
        $model->created_at = date('Y-m-d H:i:s');
        $model->save();

        return redirect()->route('createArticle')->with('success', true);
    }
}