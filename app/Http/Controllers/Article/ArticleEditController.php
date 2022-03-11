<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleEditController extends Controller
{
    public function __invoke(Request $request, Article $article)
    {
        if ($request->user()->cannot('update', $article)) {
            abort(403);
        }

        return view('article.edit', compact(['article']));
    }
}
