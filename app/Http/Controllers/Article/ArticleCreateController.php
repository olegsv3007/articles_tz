<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleCreateController extends Controller
{
    public function __invoke()
    {
        return view('article.create');
    }
}
