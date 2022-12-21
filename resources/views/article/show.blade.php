@extends('layout.master', ['title' => 'Article Detail'])

@section('content')
    <main class="main-wrapper">
        <div class="ps-lg-0">
            <h2 class="text-4xl fw-bold color-palette-1 mb-30">
                Article Detail
            </h2>
            <div class="latest-transaction">
                <div class="main-content main-content-table">
                    <div class="d-block table-responsive">
                        <table class="table">
                            <tr>
                                <td>Title</td>
                                <td>:</td>
                                <td>{{ $article->title }}</td>
                            </tr>
                            <tr>
                                <td>Content</td>
                                <td>:</td>
                                <td>{!! $article->content !!}</td>
                            </tr>
                            <tr>
                                <td>Creator</td>
                                <td>:</td>
                                <td>{{ $article->user->name }}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>:</td>
                                <td>
                                    <a href="{{ $article->image->url }}" target="_blank">
                                        <img src="{{ $article->image->url }}" loading="lazy" class="w-50" />
                                    </a>
                                </td>
                            </tr>
                        </table>
                        <div class="mt-1">
                            <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('article.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
