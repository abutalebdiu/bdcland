@extends('layouts.app')
@section('title','Add New Photo')
@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Add New Photo</h6>
        </div>
        <div class="ms-auto">
            <a href="{{ route('admin.gallery.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                    class="bi bi-arrow-counterclockwise"></i> Back To Gallery List</a>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="name_bn">Title (Bangla)</label>
                            <input type="text" name="name_bn" value="{{ old('name_bn') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="Image">Image</label>
                            <input type="file" name="image" value="{{ old('image') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12  mt-3">
                        <a href="{{ route('admin.gallery.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-sm px-3">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
