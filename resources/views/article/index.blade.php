@extends('layout.master', ['title' => 'Article List'])

@section('content')
    <main class="main-wrapper">
        <div class="ps-lg-0">
            <h2 class="text-4xl fw-bold color-palette-1 mb-30">
                Articles List
            </h2>
            <div class="latest-transaction">
                <div class="main-content main-content-table">
                    <div class="mb-3 d-block">
                        <a href="{{ route('article.create') }}" class="btn btn-primary">+ Create Article</a>
                    </div>
                    <div class="d-block table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Creator</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $index => $article)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->user->name }}</td>
                                        <td>
                                            @include('layout.action', [
                                                'view_url' => route('article.show', $article->id),
                                                'edit_url' => route('article.edit', $article->id),
                                                'delete_url' => route('article.destroy', $article->id),
                                            ])
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
