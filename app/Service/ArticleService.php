<?php

namespace App\Service;

use App\Repository\ArticleRepository;

class ArticleService
{
    public function __construct(private ArticleRepository $articleRepository) { }

    public function all()
    {
        return $this->articleRepository->all();
    }
}
