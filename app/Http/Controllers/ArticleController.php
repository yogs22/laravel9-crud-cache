<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    /**
     * Add custom message for toast
     * @var string
     */
    protected $message;

    /**
     * Construct function
     */
    public function __construct()
    {
        $this->message = [
            'data' => 'article'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article.index', [
            'articles' => Article::getArticles()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        DB::beginTransaction();

        try {
            Article::storeArticle($request->toArray());

            Cache::forget('articles');

            toast(trans('messages.success_store', $this->message), 'success');

            DB::commit();

            return redirect()->route('article.index');
        } catch (\Exception $e) {
            toast(trans('messages.failed'), 'failed');

            DB::rollback();

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        DB::beginTransaction();

        try {
            Article::updateArticle($request->toArray(), $article);

            Cache::forget('articles');

            toast(trans('messages.success_update', $this->message), 'success');

            DB::commit();

            return redirect()->route('article.show', $article);
        } catch (\Exception $e) {
            toast(trans('messages.failed'), 'failed');

            DB::rollback();

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::deleteArticle($article);

        Cache::forget('articles');

        toast(trans('messages.success_delete', $this->message), 'success');

        return redirect()->route('article.index');
    }
}
