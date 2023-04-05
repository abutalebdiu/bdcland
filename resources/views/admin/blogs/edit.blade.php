@extends('layouts.app')
@section('title','Edit Blog Post')
@section('content')
<div class="container">
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Edit Blog Post</h6>
        </div>
        <div class="ms-auto">
            <a href="{{ route('admin.blog.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                    class="bi bi-arrow-counterclockwise"></i> Back To Blog List</a>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="Title">Title (Bangla)</label>
                            <input type="text" name="title_bn" value="{{ $blog->title_bn }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('title_bn') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="user_id">Author</label>
                            <select name="user_id" id="user_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach ($users as $user)
                                    <option {{ $blog->user_id == $user->id ? "selected" : "" }} value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('user_id') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="blog_category_id">Category</label>
                            <select name="blog_category_id" id="blog_category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach ($blogcategories as $item)
                                    <option {{ $blog->blog_category_id == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('blog_category_id') }}</span>
                        </div>
                    </div>

                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="Image">Image</label>
                            @if ($blog->image)
                                <br>
                                    <img src="{{ $blog->urlOf('image') }}" width="100">
                                <br>
                            @endif
                            <input type="file" name="image" value="{{ old('image') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="link">Description</label>
                            <textarea name="description" class="summernote form-control">{{ $blog->description }}</textarea>
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option {{ $blog->status == "Pending" ? "selected" : "" }} value="Pending"> Pending</option>
                                <option {{ $blog->status == "Review" ? "selected" : "" }} value="Review"> Review</option>
                                <option {{ $blog->status == "Publish" ? "selected" : "" }} value="Publish"> Publish</option>
                                <option {{ $blog->status == "Daft" ? "selected" : "" }} value="Daft"> Daft</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12  mt-3">
                        <a href="{{ route('admin.importantlink.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
