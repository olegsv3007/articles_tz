<?php

namespace App\Repository;

use App\Models\Article;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ArticleRepository
{
    public const ITEMS_PER_PAGE = 10;

    public function all(): LengthAwarePaginator
    {
        return Article::orderBy('created_at', 'DESC')
            ->paginate(self::ITEMS_PER_PAGE);
    }

    public function store(array $articleData, User $author): void
    {
        $article = Article::make($articleData);
        $author->articles()->save($article);
    }

    public function update(Article $article, array $articleData): void
    {
        $article->update($articleData);
    }

    public function destroy(Article $article): void
    {
        $article->delete();
    }
}
