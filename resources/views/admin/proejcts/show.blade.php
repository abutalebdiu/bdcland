@extends('layouts.app', ['title' => 'Show Blog Post'])
@section('title','Show Blog Post')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Show Blog Post</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.blog.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To blog  Post List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th>Blog Post Title</th>
                            <td>{{ $blog->title }}</td>
                        </tr>
                        <tr>
                            <th>Blog Post Title (Bangla)</th>
                            <td>{{ $blog->title_bn }}</td>
                        </tr>
                        <tr>
                            <th>Author</th>
                            <td>{{ $blog->user?$blog->user->name:'' }}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{ $blog->category?$blog->category->name:'' }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="{{ $blog->urlOf('image') }}" width="100"></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{!! $blog->description !!}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{!! $blog->description_ar !!}</td>
                        </tr>
                        <tr>
                            <th>Publish Date</th>
                            <td>{{ $blog->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
