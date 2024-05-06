<?php

use App\Http\Controllers\Article;
use App\Http\Controllers\Main;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;

Route::middleware('CheckLogout')->group(function(){
    Route::get('/', [Main::class, 'index'])->name('index');

    Route::get('/artigo/{id}', [ Main::class, 'showArticle'])->name('showArticle');

    Route::get('/tecnologia', [ Main::class, 'categoriaTecnolongia'])->name('categoriaTecnolongia');
    Route::get('/desenvolvimento_pessoal', [ Main::class, 'desenvolvimento_pessoal'])->name('desenvolvimento_pessoal');
    Route::get('/programador_habilidoso', [ Main::class, 'programadorHabilidoso'])->name('programadorHabilidoso');
    Route::get('/soft_skills', [ Main::class, 'softSkills'])->name('softSkills');

    Route::post('/pesquisar', [ Main::class, 'pesquisar'])->name('pesquisar');

    Route::get('/cadastro', [Login::class, 'cadastro'])->name('cadastro');
    Route::post('/formCadastro', [Login::class, 'formCadastro'])->name('formCadastro');

    Route::get('/login', [Login::class, 'login'])->name('login');
    Route::post('/formLogin', [Login::class, 'formLogin'])->name('formLogin');
});


Route::middleware('CheckLogin')->group(function(){
    Route::get('/criar_artigo', [Article::class, 'createArticle'])->name('createArticle');
    Route::post('/form_criar_artigo', [Article::class, 'form_criar_artigo'])->name('form_criar_artigo');

    Route::get('/excluir_artigo', [Article::class, 'deleteArticle'])->name('deleteArticle');
    Route::get('/excluir_artigo_form/{id}', [Article::class, 'deleteArticleForm'])->name('deleteArticleForm');

    Route::get('/logout', [Login::class, 'logout'])->name('logout');
});



