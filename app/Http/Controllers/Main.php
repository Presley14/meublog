<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){

        $articles = ArticleModel::orderBy('created_at', 'desc')
                                ->get();

        $articles_recent = ArticleModel::orderBy('created_at', 'desc')
                                        ->take(3)
                                        ->get();

        $articles_emphasis = ArticleModel::orderBy('created_at', 'desc')
                                        ->skip(3)
                                        ->take(6)
                                        ->get();
                           
        $articles_more = ArticleModel::orderBy('created_at', 'desc')
                                    ->skip(9)
                                    ->take(10000)
                                    ->get();                               
                                              

        $data = [
            'title' => 'topensando',
            'articles' => $articles,
            'articles_recent' => $articles_recent,
            'articles_emphasis' => $articles_emphasis,
            'articles_more' => $articles_more,
        ];

        return view('home', $data);
    }

    public function showArticle($id){


        $article_id = ArticleModel::find($id);

        if (!$article_id) {
            return redirect()->route('home')
                             ->with('error', 'Artigo não encontrado.');
        }

        $articles_exeption_id = ArticleModel::where('id', '!=', $id)
                                            ->skip(3)
                                            ->take(6)
                                            ->get();

        $data = [
            'title' => $article_id->title,
            'article' => $article_id,
            'articles_exeption_id' => $articles_exeption_id
        ];

        return view('articlePage', $data);
    }
}
