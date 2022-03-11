@extends('layouts.app')

@section('content')

    <div class="container">
        @can('update', $article)
            <div class="d-flex justify-content-end">
                <a class="btn btn-secondary" href="{{ route('app.article.edit', $article) }}">{{ __('article.edit.button') }}</a>
            </div>
        @endcan
        <x-article.article-full :article="$article" />
    </div>

@endsection
