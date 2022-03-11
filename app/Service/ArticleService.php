<?php

namespace App\Service;

use App\Models\Article;
use App\Models\User;
use App\Repository\ArticleRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ArticleService
{
    public const IMAGE_DESTINATION = '/img/articles/';

    public function __construct(
        private ArticleRepository $articleRepository,
        private ImageService $imageService,
    ) { }

    public function all(): LengthAwarePaginator
    {
        return $this->articleRepository->all();
    }

    public function store(array $articleFormData, User $author):void
    {
        $filename = $this->imageService->storeImage($articleFormData['image'], self::IMAGE_DESTINATION);
        $articleFormData['image_filename'] = $filename;
        unset($articleFormData['image']);

        $this->articleRepository->store($articleFormData, $author);
    }

    public function update(Article $article, array $articleFormData): void
    {
        if ($newImage = $articleFormData['image'] ?? false) {
            $filename = $this->imageService->updateImage($newImage, self::IMAGE_DESTINATION, self::IMAGE_DESTINATION . $article->image_filename);
            $articleFormData['image_filename'] = $filename;
        }

        $this->articleRepository->update($article, $articleFormData);
    }

    public function delete(Article $article): void
    {
        $this->imageService->removeImage(self::IMAGE_DESTINATION . $article->image_filename);
        $this->articleRepository->destroy($article);
    }

    public function getArticleByUser(User $user): LengthAwarePaginator
    {
        return $this->articleRepository->getArticleByUser($user);
    }
}
