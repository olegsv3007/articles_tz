@props(['comment'])

<div class="card border-dark mb-3">
    <div class="card-header">{{ $comment->author->name }}</div>
    <div class="card-body text-dark">
        <p class="card-text">{{ $comment->comment }}</p>
        <p class="card-text"><small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small></p>
    </div>
</div>
