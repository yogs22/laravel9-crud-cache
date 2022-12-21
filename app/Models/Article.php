<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Cache;
use App\Traits\WithUser;
use App\Traits\WithImage;

class Article extends Model
{
    /**
     * Add factory for article data
     */
    use HasFactory;

    /**
     * Add user & imgage trait for better relation
     */
    use WithUser;
    use WithImage;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content'
    ];

    /**
     * The attributes that are default eager loading.
     *
     * @var array
     */
    protected $with = [
        'user', 'image'
    ];

    /**
     * Get all articles data
     * @return Illuminate\Support\Facades\Cache
     */
    public static function getArticles()
    {
        return Cache::remember('articles', now()->addMinutes(150), function () {
            return self::latest()->get();
        });
    }

    /**
     * Store article data
     * @param  Array $request
     * @return \App\Models\Article
     */
    public static function storeArticle($request)
    {
        $article = self::create($request);

        self::assosicateUser($article);

        if (isset($request['image'])) {
            Image::uploadImage($request['image'], $article);
        }

        return $article;
    }

    /**
     * Update article data
     * @param  Array $request
     * @param  Article::class $article
     * @return \App\Models\Article
     */
    public static function updateArticle($request, $article)
    {
        $article->update($request);

        if (isset($request['image'])) {
            Image::deleteImage($article);
            Image::uploadImage($request['image'], $article);
        }

        return $article;
    }

    /**
     * Update article data
     * @param  Article::class $article
     * @return bool
     */
    public static function deleteArticle($article)
    {
        if ($article->image) {
            Image::deleteImage($article);
        }

        $article->delete();

        return true;
    }

    /**
     * Associate article with user
     * @param  Article::class $article
     * @return \App\Models\Article
     */
    public static function assosicateUser($article)
    {
        $article->user()->associate(auth()->user());
        $article->save();

        return $article;
    }
}
