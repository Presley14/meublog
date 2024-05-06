<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use App\Models\CategoryModel;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
                'text_article' => 'required|min:92', // obs: o textarea já contém 8 caracteres incluso.
                'seo_title' => 'required|min:5',
                'seo_description' => 'required|min:5',
                'seo_keys' => 'required|min:10',
                'url_imagem_capa' => 'required'
            ],
            [
                'text_article.required' => 'O campo é de preenchimento obrigatório.',
                'text_article.min' => 'O campo deve conter mo mínimo 100 caracteres',

                'seo_title.required' => 'O campo é de preenchimento obrigatório.',
                'seo_title.min' => 'O campo deve conter mo mínimo 5 caracteres',

                'seo_description.required' => 'O campo é de preenchimento obrigatório.',
                'seo_description.min' => 'O campo deve conter mo mínimo 5 caracteres',

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


    public function deleteArticle()
    {
        $articles = ArticleModel::all();

        $data = [
            'title' => 'Deletar artigo',
            'articles' => $articles,
        ];

        return view('deleteArticle', $data);
    }

    public function deleteArticleForm($id)
    {
        try {
            $id_decrypt = Crypt::decrypt($id);
        } catch (\Exception $e) {
            return redirect()->route('createArticle');
        }

        $article = ArticleModel::find($id_decrypt);
        if (!$article) {
            return redirect()->route('deleteArticle');
        }

        $article->delete();

        return redirect()->route('deleteArticle')->with('success', 'Artigo excluído com sucesso!');
    }

    
}