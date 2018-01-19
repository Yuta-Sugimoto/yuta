<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class Articlecontroller extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index') -> with(compact('articles'));
        //
    }  //
    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show') -> with(compact('article'));
        //
    }  //
    public function create()
    {
        return view('article.create');
        //
    }  //
    public function store(Request $request)
    {
        $data = $request->all();
        $article = new Article;
        $article->user_id = '123';
        $article->status = '123';
        $article->title = $data["title"];
        $article->body = $data["body"];
        $article->save();
        return redirect('article');
    }
}