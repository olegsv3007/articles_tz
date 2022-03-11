<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CommentStoreRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->user();
    }

    public function rules()
    {
        return [
            'comment' => 'required',
        ];
    }
}
