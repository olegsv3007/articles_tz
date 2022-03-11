<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Repository\CommentRepository;

class ArticleShowController extends Controller
{
    public function __invoke(Article $article, CommentRepository $commentRepository)
    {
        $comments = $commentRepository->findByArticleId($article->id);

        return view('article.detail', compact(['article', 'comments']));
    }
}
