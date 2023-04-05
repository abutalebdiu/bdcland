@extends('layouts.app')
@section('title','Edit Photo')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Update Photo</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.gallery.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To gallery List
                </a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="name">Title</label>
                                    <input type="text" name="name" value="{{ $gallery->name }}" class="form-control">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="name">Title (Bangla)</label>
                                    <input type="text" name="name" value="{{ $gallery->name_bn }}" class="form-control">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="Image">Image</label> <br>
                                    <img src="{{ asset($gallery->image) }}" alt="" width="400" class="my-2">
                                    <input type="file" name="image" value="" class="form-control">
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12  mt-3">
                                <a href="{{ route('admin.gallery.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
