<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Request;

class ArticlesController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        $articles = Article::all();
        return view("articles.index", compact('articles'));
    }
    public function  show($id)
    {
        $article = Article::findOrFail($id);

        return view("articles.show", compact('article'));
    }
    public function create()
    {
        $article = new Article;
        return view("articles.create", compact('article'));
    }
    public function store()
    {
        $input = Request::all();

        Article::create($input);

        return redirect('articles');
        //return view("articles.create", compact('article'));
    }
}
