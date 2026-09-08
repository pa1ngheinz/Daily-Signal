@extends('layouts.editor')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h3 class="mb-0">Articles</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Articles</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View all</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-body py-3">
                    <div class="row g-3 align-items-center justify-content-between">
                        <div class="col-12 col-md-auto">
                            <a href="{{ route('articles.create') }}"
                                class="btn btn-primary d-inline-flex align-items-center gap-2">
                                <i class="bi bi-plus-lg"></i>
                                <span>Create Article</span>
                            </a>
                        </div>

                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search articles..."
                                    aria-label="Search articles">
                                <button class="btn btn-outline-secondary" type="button" aria-label="Search">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle mb-0">
                            <thead class="table">
                                <tr>
                                    <th scope="col" style="width: 60px;">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col" style="width: 25%;">Content</th>
                                    <th scope="col" style="width: 100px;">Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                    <th scope="col" class="text-center" style="width: 130px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $count = 1 @endphp
                                @foreach ($articles as $article)
                                    <tr>
                                        <td class="fw-semibold text-muted">{{ $count++ }}</td>
                                        <td>
                                            <div class="fw-bold">{{ $article->title }}</div>
                                        </td>
                                        <td>
                                            <span class="text-truncate d-inline-block text-muted" style="max-width: 200px;">
                                                {{ $article->content }}
                                            </span>
                                        </td>
                                        <td>
                                            <img src="https://picsum.photos/seed/tech1/80/60" alt="Fake Image 1"
                                                class="img-thumbnail rounded"
                                                style="width: 60px; height: 45px; object-fit: cover;">
                                        </td>
                                        <td>
                                            <span class="badge text-bg-primary">{{ $article->category->name }}</span>
                                        </td>
                                        <td class="text-secondary small">{{ $article->created_at }}</td>
                                        <td class="text-secondary small">{{ $article->updated_at }}</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="#" class="btn btn-outline-primary" title="Edit">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger" title="Delete">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer bg-body py-3">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 text-center text-md-start mb-2 mb-md-0">
                            <span class="text-muted small">Showing {{ $articles->firstItem() }} to
                                {{ $articles->lastItem() }} of {{ $articles->total() }} entries</span>
                        </div>

                        <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                            <nav aria-label="Table navigation">
                                {{ $articles->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
