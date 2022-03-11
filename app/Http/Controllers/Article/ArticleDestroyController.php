<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleDestroyController extends ArticleBaseController
{
    public function __invoke(Article $article)
    {
        $this->articleService->delete($article);

        return redirect(route('app.home'));
    }
}
