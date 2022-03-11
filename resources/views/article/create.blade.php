@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">{{ __('article.add_article') }}</h1>
        <form action="{{ route('app.article.store') }}" method="post" enctype="multipart/form-data" class="needs-validation d-flex flex-column align-items-center">
            @csrf
            <div class="has-validation mt-3 col-6">
                <label for="title">{{ __('article.form.title_label') }}</label>
                <input
                    id="title"
                    type="text"
                    class="form-control @error('title') {{ 'is-invalid' }} @enderror"
                    name="title"
                    value="{{ old('title') }}"
                >
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="has-validation mt-3 col-6">
                <label for="short_text">{{ __('article.form.short_text_label') }}</label>
                <textarea
                    id="short_text"
                    class="form-control @error('short_text') {{ 'is-invalid' }} @enderror"
                    name="short_text"
                >{{ old('short_text') }}</textarea>
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="has-validation mt-3 col-6">
                <label for="text">{{ __('article.form.text_label') }}</label>
                <textarea
                    id="text"
                    class="form-control @error('text') {{ 'is-invalid' }} @enderror"
                    name="text"
                >{{ old('text') }}</textarea>
                @error('text')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="has-validation mt-3 col-6">
                <label for="image" class="form-label">{{ __('article.form.image_label') }}</label>
                <input
                    id="image"
                    class="form-control @error('image') {{ 'is-invalid' }} @enderror"
                    type="file"
                    name="image"
                >
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <input type="submit" value="{{ __('article.form.create_submit') }}" class="mt-5 btn btn-primary col-3">
        </form>
    </div>
@endsection
