<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArticleTest extends TestCase
{
	use DatabaseMigrations;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testSomethingIsTrue()
    {
        $this->visit('/article')
             ->see('Listing articles');
	}

	public function testDisplayArticles()
	{
		$article = factory(App\Article::class)->create();
		$this->visit('/article')
			->see($article->title)
			->see($article->text);
	}
}
