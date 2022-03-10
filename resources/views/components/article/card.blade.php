@props([
    'article'
])

<div class="card mb-3">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img width="100%" src="{{ asset('img/articles/' . $article->image_filename) }}" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ $article->short_text }}</p>
                <p class="card-text"><small class="text-muted">{{ $article->created_at->diffForHumans() }}</small> by <i>{{ $article->author->name }}</i></p>
            </div>
        </div>
    </div>
</div>
