<?php

namespace App\Http\Requests\Article;

use App\Models\Article;
use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user()->isAuthorOfArticle($this->article);
    }

    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'short_text' => 'required|min:10',
            'text' => 'required|min:100',
            'image' => 'file|mimes:jpg,bmp,png|max:2048',
        ];
    }
}
