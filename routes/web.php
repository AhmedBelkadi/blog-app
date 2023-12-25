<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SubscribeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::prefix("/articles")->group(function(){



// });



    Route::delete('/articles/{article}', [ ArticleController::class , "destroy" ] )->name('articles.destroy');

    Route::put('/articles/{article}', [ ArticleController::class , "update" ] )->name('articles.update')->middleware("auth");


    Route::get('/articles/{article}/edit', [ ArticleController::class , "edit" ] )->name('articles.edit')->middleware("auth");

    Route::get('/', [ ArticleController::class , "showArticles" ] )->name('home');

    Route::get('/mesArticles', [ ArticleController::class , "showMesArticles" ] )->name('mesArticles')->middleware("auth");

    Route::get('/articles/{id}', [ ArticleController::class , "showArticle" ] )->name('article');

    Route::get('/create', [ ArticleController::class , "create" ] )->name('createArticle')->middleware("auth");
// Route::view("/create",[ ArticleController::class , "create" ]);

    Route::post('/store', [ ArticleController::class , "store" ] )->name('storeArticle')->middleware("auth");

    Route::post('/subscribe', [ SubscribeController::class , "subscribe" ] )->name('subscribe');

    Route::get('/subscribe', [ SubscribeController::class , "showSubscribe" ] )->name('showSubscribe');




    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');



    Route::get('/about', function () { return view('about'); })->name('about');






Route::get('/login', [ \App\Http\Controllers\LoginController::class,"showLogin"] )->name('showLogin');
Route::get('/logout', [ \App\Http\Controllers\LoginController::class,"logout"] )->name('logout');
Route::post('/login', [ \App\Http\Controllers\LoginController::class,"login"] )->name('login');







