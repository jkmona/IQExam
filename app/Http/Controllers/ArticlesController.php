<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;

class ArticlesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth', [ 'except'=>['index', 'show']]);
    }

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        return view("articles.index", compact('articles'));
    }

    public function  show($id)
    {
        $article = Article::findOrFail($id);
        //dd($article->published_at->addDays(8)->diffForHumans());
        return view("articles.show", compact('article'));
    }
    public function create()
    {
        $tags = \App\Models\Tag::all('name', 'id');
        return view("articles.create", compact('tags'));
    }

    /**
     * save a new article
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
        //dd($request->input('tags'));
        //session()->flash('flash_message', 'Your arcticle has been created');
        $this->createArticle($request);
        return redirect('articles')->with([
            'flash_message' => 'Your arcticle has been created',
            'flash_message_important' => true
        ]);
    }

    /**
     * edit an existing article
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $tags = \App\Models\Tag::all('name', 'id');
        return view("articles.edit", compact('article', 'tags'));
    }

    /**
     * update an article
     * @param $id
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request-all());
        $this->syncTags($article, $request);

        return redirect('articles');
    }

    /**
     * Sync up the list of tags in the database
     * @param Article $article
     * @param ArticleRequest $request
     */
    private function syncTags(Article $article, ArticleRequest $request)
    {
        $article->tags()->sync($request->input('tags'));
    }

    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());
        $this->syncTags($article, $request);
        return $article;
    }
}
