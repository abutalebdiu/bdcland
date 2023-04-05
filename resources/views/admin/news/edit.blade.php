@extends('layouts.app')
@section('title','Update news')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Update news</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.news.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To news List
                </a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text" name="title" value="{{ $news->title }}" class="form-control">
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="Title">Title (Bangla)</label>
                                    <input type="text" name="title_bn" value="{{  $news->title_bn }}" class="form-control">
                                    <span class="text-danger">{{ $errors->first('title_bn') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="Image">Image</label>
                                    <br>
                                    <img src="{{ $news->urlOf('image') }}" alt="" class="my-2 w-25">
                                    <input type="file" name="image" class="form-control">
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="summernote" rows="6" class="form-control">{{ $news->description }}</textarea>
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="description_ar">Description</label>
                                    <textarea name="description_ar" class="summernote" rows="6" class="form-control">{{ $news->description_ar }}</textarea>
                                    <span class="text-danger">{{ $errors->first('description_ar') }}</span>
                                </div>
                            </div>

                            <div class="col-sm-12  mt-3">
                                <a href="{{ route('admin.news.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
