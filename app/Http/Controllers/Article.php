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
                'text_article' => 'required|min:600', // obs: o textarea já contém 8 caracteres incluso.
                'seo_title' => 'required|min:3',
                'seo_description' => 'required|min:3',
                'seo_keys' => 'required|min:10',
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
            ]);
        
        $title_seo = $request->input('seo_title');
        $description_seo = $request->input('seo_description');
        $keys_seo = explode(',', $request->input('seo_keys'));
        $text_article = $request->input('text_article');
        $id_category = $request->input('select_category');

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
        $model->id_categoria = $id_category;
        $model->seo_titulo = $title_seo;
        $model->seo_descricao = $description_seo;
        $model->seo_keys = implode(',', $keys_seo);
        $model->texto_artigo = $text_article;
        $model->created_at = date('Y-m-d H:i:s');
        $model->save();

        return redirect()->route('createArticle')->with('success', true);
    }
}