@extends('layouts.app')

@section('content')

    <div class="container">
        <x-article.article-full :article="$article" />
    </div>

@endsection
