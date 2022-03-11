<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;

class ArticleIndexController extends ArticleBaseController
{
    public function __invoke()
    {
        $articles = $this->articleService->all();

        return view('article.index', compact(['articles']));
    }
}
