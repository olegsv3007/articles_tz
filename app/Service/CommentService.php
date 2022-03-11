<?php

namespace App\Service;

use App\Models\Article;
use App\Models\User;
use App\Repository\CommentRepository;

class CommentService
{
    public function __construct(private CommentRepository $commentRepository) { }

    public function store(array $commentFormData, Article $article, User $author)
    {
        $commentFormData['author_id'] = $author->id;

        $this->commentRepository->store($commentFormData, $article);
    }
}
