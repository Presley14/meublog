<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {

        $articles = ArticleModel::orderBy('created_at', 'desc')
                                ->get();

        $articles_recent = ArticleModel::orderBy('created_at', 'desc')
                                        ->take(1)
                                        ->get();

        $articles_recent_vertical = ArticleModel::orderBy('created_at', 'desc')
                                        ->skip(1)
                                        ->take(3)
                                        ->get();

        $articles_emphasis = ArticleModel::orderBy('created_at', 'desc')
                                        ->skip(0)
                                        ->take(9)
                                        ->get();
                           
        $articles_more = ArticleModel::orderBy('created_at', 'desc')
                                    ->skip(0)
                                    ->take(10000)
                                    ->get();                               
                                              

        $data = [
            'title' => 'topensando',
            'articles' => $articles,
            'articles_recent' => $articles_recent,
            'articles_recent_vertical' => $articles_recent_vertical,
            'articles_emphasis' => $articles_emphasis,
            'articles_more' => $articles_more,
        ];

        return view('home', $data);
    }

    public function showArticle($id)
    {


        $article_id = ArticleModel::find($id);

        if (!$article_id) {
            return redirect()->route('home')
                             ->with('error', 'Artigo não encontrado.');
        }

        $art_exeption_id_recommendation = ArticleModel::where('id', '!=', $id)
                                            ->skip(3)
                                            ->take(6)
                                            ->get();

        $art_exeption_id_more = ArticleModel::where('id', '!=', $id)
                                            ->skip(9)
                                            ->take(6)
                                            ->get();

        $art_vertical_id_ = ArticleModel::where('id', '!=', $id)
                                            ->skip(1)
                                            ->take(6)
                                            ->get();     
                                            
        $articles_emphasis = ArticleModel::orderBy('created_at', 'desc')
                                        ->skip(0)
                                        ->take(9)
                                        ->get();

        $data = [
            'title' => $article_id->title,
            'article' => $article_id,
            'art_exeption_id_recommendation' => $art_exeption_id_recommendation,
            'art_exeption_id_more' => $art_exeption_id_more,
            'art_vertical_id_' => $art_vertical_id_,
            'articles_emphasis' => $articles_emphasis
        ];

        return view('articlePage', $data);
    }

    public function categoriaTecnolongia()
    {
        $articles = ArticleModel::where('categoria_do_artigo', '=', 'Tecnologia-vital')
                                ->get();
        
        $data = [
            'title' => 'Tecnologia',
            'articles' => $articles,
        ];

        return view('categoryTecnology', $data);
    }

    public function desenvolvimento_pessoal()
    {
        $articles = ArticleModel::where('categoria_do_artigo', '=', 'Desenvolvimento pessoal')
                                ->get();
        
        $data = [
            'title' => 'Desenvolvimento pessoal',
            'articles' => $articles,
        ];

        return view('personalDevelopment', $data);
    }

    public function bemEstar()
    {
        $articles = ArticleModel::where('categoria_do_artigo', '=', 'Bem-estar')
                                ->get();
        
        $data = [
            'title' => 'Bem-estar',
            'articles' => $articles,
        ];

        return view('weelBeing', $data);
    }

    public function viagem()
    {
        $articles = ArticleModel::where('categoria_do_artigo', '=', 'Férias')
                                ->get();
        
        $data = [
            'title' => 'Viagem',
            'articles' => $articles,
        ];

        return view('trip', $data);
    }
}
