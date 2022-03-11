<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleShowController extends Controller
{
    public function __invoke(Article $article)
    {
        return view('article.detail', compact(['article']));
    }
}
