@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ __('article.my_article_title') }}</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">{{ __('article.table.id_title') }}</th>
                    <th scope="col">{{ __('article.table.title_title') }}</th>
                    <th scope="col">{{ __('article.table.created_at_title') }}</th>
                    <th scope="col">{{ __('article.table.edit_title') }}</th>
                    <th scope="col">{{ __('article.table.destroy_title') }}</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <th scope="col">{{ $article->id }}</th>
                            <th scope="col"><a href="{{ route('app.article.detail', $article) }}">{{ $article->title }}</a></th>
                            <th scope="col">{{ $article->created_at }}</th>
                            <th scope="col"><a class="btn btn-warning" href="{{ route('app.article.edit', $article) }}">{{ __('article.edit_button') }}</a></th>
                            <th scope="col">
                                <form action="{{ route('app.article.destroy', $article) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ __('article.destroy_button') }}</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        {{ $articles->onEachSide(2)->links('templates.paginator') }}
    </div>

@endsection
