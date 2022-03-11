<?php

namespace App\Repository;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Collection;

class CommentRepository
{
    public function findByArticleId(int $articleId): Collection
    {
        return Comment::where('article_id', $articleId)
            ->orderBy('created_at', 'DESC')
            ->get();
    }

    public function store(array $commentData, Article $article)
    {
        $comment = Comment::make($commentData);
        $article->comments()->save($comment);
    }
}
