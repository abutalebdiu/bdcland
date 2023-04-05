@extends('layouts.app', ['title' => 'Create New News'])
@section('title','Add News')
@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Add News</h6>
        </div>
        <div class="ms-auto">
            <a href="{{ route('admin.news.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                    class="bi bi-arrow-counterclockwise"></i> Back To News List</a>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="Title">Title (Bangla)</label>
                            <input type="text" name="title_bn" value="{{ old('title_bn') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('title_bn') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="Image">Image</label>
                            <input type="file" name="image" value="{{ old('image') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="link">Description</label>
                            <textarea name="description" class="summernote"></textarea>
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="link">Description(Bangla)</label>
                            <textarea name="description_ar" class="summernote"></textarea>
                            <span class="text-danger">{{ $errors->first('description_ar') }}</span>
                        </div>
                    </div>

                    <div class="col-sm-12  mt-3">
                        <a href="{{ route('admin.news.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-sm px-3">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
