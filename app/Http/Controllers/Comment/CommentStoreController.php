<?php

namespace App\Http\Controllers\Comment;

use App\Http\Requests\Comment\CommentStoreRequest;
use App\Models\Article;

class CommentStoreController extends CommentBaseController
{
    public function __invoke(CommentStoreRequest $request, Article $article)
    {
        $validatedData = $request->validated();

        $this->commentService->store(
            $validatedData,
            $article,
            $request->user(),
        );

        return redirect()->back();
    }
}
