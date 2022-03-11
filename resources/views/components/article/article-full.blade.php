@props(['article'])

<h1 class="text-center">{{ $article->title }}</h1>
<div class="row mt-3">
    <div class="col-4">
        <img width="100%" src="{{ $article->articleImagePublicPath }}">
    </div>
    <div class="col-8">
        {!! $article->text !!}
        <div class="d-flex justify-content-between mt-5">
            <div class="text-secondary">{{ $article->author->name }}</div>
            <div class="text-secondary">{{ $article->created_at }}</div>
        </div>
    </div>
</div>
