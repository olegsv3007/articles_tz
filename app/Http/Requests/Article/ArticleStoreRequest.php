<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return !is_null(auth()->user());
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'short_text' => 'required|min:10',
            'text' => 'required|min:100',
            'image' => 'required|file|mimes:jpg,bmp,png|max:2048',
        ];
    }
}
