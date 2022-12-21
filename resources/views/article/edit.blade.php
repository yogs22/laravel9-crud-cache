@extends('layout.master', ['title' => 'Edit Article'])

@section('content')
    <main class="main-wrapper">
        <div class="ps-lg-0">
            <h2 class="text-4xl fw-bold color-palette-1 mb-30">
                Edit Article
            </h2>
            <div class="latest-transaction">
                <div class="main-content main-content-table">
                    <form action="{{ route('article.update', $article->id) }}" enctype="multipart/form-data" method="post">
                        @csrf @method('PUT')
                        <div class="form-group mb-3">
                            <label for="title" class="mb-2 required">Title</label>
                            <input
                                type="text"
                                class="form-control @error('title') is-invalid @enderror"
                                id="title"
                                name="title"
                                value="{{ old('title') ?? $article->title }}"
                                placeholder="Enter title"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="content" class="mb-2 required">Content</label>
                            <textarea
                                type="text"
                                class="form-control @error('content') is-invalid @enderror ckeditor"
                                id="content"
                                name="content"
                                placeholder="Enter content"
                                required>{{ old('content') ?? $article->content }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image" class="mb-2">Image</label>
                            <input
                                type="file"
                                class="form-control @error('image') is-invalid @enderror"
                                id="image"
                                name="image"
                                placeholder="Enter image"
                                accept="image/*">
                            @include('layout.feedback', ['field' => 'image'])
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('article.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    </script>
@endpush
