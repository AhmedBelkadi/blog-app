<?php

namespace App\Http\Controllers;

use App\Http\Requests\articleRequest;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function showArticles(){
        $articles = Article::paginate(10);
        $lastFourArticles = Article::orderBy("updated_at","desc")->take(3)->get();

        // dd($lastFourArticles);
        return view("home" , [ "articles" => $articles , "lastFourArticles" => $lastFourArticles ] );
    }

    public function showMesArticles()
    {
        $u = User::findOrFail(Auth::id());
        $articles = $u->articles;

        $lastFourArticles = $u->articles;

        // dd($lastFourArticles);
        return view("mesArticles" , [ "articles" => $articles , "lastFourArticles" => $lastFourArticles ] );
    }

    public function showArticle(Request $request){
        $article = Article::find($request->id);

        return view("article" , [ "article" => $article ] );
    }

    public function create(  ){
        return view("createArticle");
    }

    public function store(articleRequest $req ){

        $a = $req->file("image")->store("articles","public");
//        dd($a);
        Article::create([
            "titre" => $req->titre,
            "slug" => $req->slug,
            "image" => $a,
            "content" => $req->content,
            "user_id" => Auth::id(),
        ]);

        return to_route("home");


    }

    public function edit( Article $article ){
        return view("editArticle",compact("article"));
    }

    public function update( articleRequest $req ,  Article $article  ){

        $a = Article::find($article->id);
        $a->titre = $req->titre;
        $a->slug = $req->slug;
        $a->content = $req->content;
        $a->image = $req->file("image")->store("articles","public");
        $a->save();

        return to_route("mesArticles");

    }

    public function destroy( Article $article   ){
        $article->delete();
        return to_route("home");
    }


}
