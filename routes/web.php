<?php

use App\Http\Controllers\Article;
use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;


Route::get('/', [Main::class, 'index'])->name('index');

Route::get('/criar_artigo', [Article::class, 'createArticle'])->name('createArticle');
Route::post('/form_criar_artigo', [Article::class, 'form_criar_artigo'])->name('form_criar_artigo');

Route::get('/artigo/{id}', [ Main::class, 'showArticle'])->name('showArticle');

