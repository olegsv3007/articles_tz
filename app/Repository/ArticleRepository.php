<?php

namespace App\Repository;

use App\Models\Article;

class ArticleRepository
{
    public const ITEMS_PER_PAGE = 10;

    public function all()
    {
        return Article::orderBy('created_at', 'DESC')
            ->paginate(self::ITEMS_PER_PAGE);
    }
}
