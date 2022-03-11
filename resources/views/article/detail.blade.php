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
    </div>

@endsection
