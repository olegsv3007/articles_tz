<?php

namespace App\Service;

use App\Models\Article;
use App\Models\User;
use App\Repository\ArticleRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ArticleService
{
    public function __construct(
        private ArticleRepository $articleRepository,
        private ImageService $imageService,
    ) { }

    public function all(): LengthAwarePaginator
    {
        return $this->articleRepository->all();
    }

    public function store(array $articleFormData, User $author): ?Article
    {
        $filename = $this->imageService->storeImage($articleFormData['image'], '/img/articles/');

        if (!$filename) {
            return null;
        }

        $articleFormData['image_filename'] = $filename;
        unset($articleFormData['image']);

        return $this->articleRepository->store($articleFormData, $author);
    }
}
