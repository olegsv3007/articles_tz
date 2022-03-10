@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{ __('article.index_title') }}</h1>
    @foreach($articles as $article)
        <x-article.card :article="$article" />
    @endforeach
    {{ $articles->onEachSide(1)->links('templates.paginator') }}
</div>

@endsection
