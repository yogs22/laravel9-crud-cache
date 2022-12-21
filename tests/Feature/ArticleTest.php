<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Article;

class ArticleTest extends TestCase
{
    public function testCanShowDataTablePage()
    {
        $response = $this->actingAs($this->user)->get(route('article.index'));
        $response->assertStatus(200);
        $response->assertViewIs('article.index');
    }

    public function testCanShowCreateArticleForm()
    {
        $response = $this->actingAs($this->user)->get(route('article.create'));
        $response->assertStatus(200);
        $response->assertViewIs('article.create');
    }

    public function testCanStoreNewArticle()
    {
        $article = Article::factory()->make();
        $response = $this->actingAs($this->user)->post(route('article.store'), $article->toArray());

        $response->assertSessionHasNoErrors();

        $response->assertStatus(302);

        $this->assertDatabaseHas('articles', $article->toArray());
        $response->assertRedirect(route('article.index'));
    }

    public function testCanShowArticleDetailPage()
    {
        $article = Article::factory()->create();
        $response = $this->actingAs($this->user)->get(route('article.show', $article));
        $response->assertStatus(200);
        $response->assertViewIs('article.show');
    }

    public function testCanShowUpdateArticleForm()
    {
        $article = Article::factory()->create();
        $response = $this->actingAs($this->user)->get(route('article.edit', $article));

        $response->assertSessionHasNoErrors();

        $response->assertStatus(200);
        $response->assertViewIs('article.edit');
    }

    public function testCanUpdateArticle()
    {
        $article = Article::factory()->create();
        $newData = Article::factory()->make();
        $response = $this->actingAs($this->user)->put(route('article.update', $article), $newData->toArray());

        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $this->assertDatabaseHas('articles', $newData->toArray());
        $response->assertRedirect(route('article.show', $article));
    }

    public function testCanDeleteArticle()
    {
        $article = Article::factory()->create();
        $response = $this->actingAs($this->user)->delete(route('article.destroy', $article));
        $response->assertStatus(302);
        $this->assertDatabaseMissing('articles', $article->toArray());

        $response->assertRedirect(route('article.index'));
    }
}
