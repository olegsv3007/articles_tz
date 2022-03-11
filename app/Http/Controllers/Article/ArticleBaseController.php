<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Service\ArticleService;

abstract class ArticleBaseController extends Controller
{
    public function __construct(protected ArticleService $articleService) { }
}
