@extends('layouts.editor')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h3 class="mb-0">Create Article</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end mb-0">
                        <li class="breadcrumb-item"><a href="/articles">Articles</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-body py-3">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-pencil-square me-2"></i>New Article
                    </h5>
                </div>

                <div class="card-body">
                    <form enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="articleTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="articleTitle"
                                placeholder="Enter article title">
                        </div>

                        <div class="mb-3">
                            <label for="articleContent" class="form-label">Content</label>
                            <textarea class="form-control" id="articleContent" rows="6"
                                placeholder="Write your article content here..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="articleImage" class="form-label">Image</label>
                            <input type="file" class="form-control" id="articleImage" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="articleCategory" class="form-label">Category</label>
                            <select class="form-select" id="articleCategory">
                                <option selected disabled>Select a category</option>
                                <option>Technology</option>
                                <option>Business</option>
                                <option>Sports</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary d-inline-flex align-items-center gap-2">
                                <i class="bi bi-check-lg"></i>
                                <span>Publish Article</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
