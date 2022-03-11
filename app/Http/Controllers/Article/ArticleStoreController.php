<?php

namespace App\Http\Controllers\Article;

use App\Http\Requests\Article\ArticleStoreRequest;
use Illuminate\Http\RedirectResponse;

class ArticleStoreController extends ArticleBaseController
{
    public function __invoke(ArticleStoreRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();
        $author = $request->user();

        $this->articleService->store($validatedData, $author);

        return redirect(route('app.home'));
    }
}
