<?php

namespace App\Http\Controllers\Article;

use App\Http\Requests\Article\ArticleUpdateRequest;
use App\Models\Article;

class ArticleUpdateController extends ArticleBaseController
{
    public function __invoke(ArticleUpdateRequest $request, Article $article)
    {
        $validatedData = $request->validated();

        $this->articleService->update($article, $validatedData);
        return redirect(route('app.article.detail', $article));
    }
}
