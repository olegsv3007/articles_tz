<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;

class ArticleByUserController extends ArticleBaseController
{
    public function __invoke(Request $request)
    {
        $articles = $this->articleService->getArticleByUser($request->user());

        return view('article.my-article', compact(['articles']));
    }
}
