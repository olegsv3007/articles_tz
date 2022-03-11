@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="d-flex justify-content-end">
            @can('update', $article)
                <a class="btn btn-secondary m-1" href="{{ route('app.article.edit', $article) }}">{{ __('article.edit_button') }}</a>
            @endcan
            @can('delete', $article)
                <form method="POST" action="{{ route('app.article.destroy', $article) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger m-1">{{ __('article.destroy_button') }}</button>
                </form>
            @endcan
        </div>
        <x-article.article-full :article="$article" />

        @auth
            <form action="{{ route('app.comment.store', $article) }}" method="post">
                @csrf
                <h2 class="mt-5">{{ __('article.comment_form_title') }}</h2>
                <div class="has-validation mt-3 col-12">
                    <label for="comment">{{ __('article.form_comment.comment_label') }}</label>
                    <textarea
                        id="comment"
                        class="form-control @error('comment') {{ 'is-invalid' }} @enderror"
                        name="comment"
                    >{{ old('comment') }}</textarea>
                    @error('comment')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <input type="submit" value="{{ __('article.form_comment.comment_submit') }}" class="mt-2 btn btn-primary col-3">
            </form>
        @endauth
        <h2 class="mt-5">{{ __('article.comments_title') }}</h2>
        @foreach($comments as $comment)
            <x-comment :comment="$comment" />
        @endforeach
    </div>


@endsection
