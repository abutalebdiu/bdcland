@extends('layouts.app')
@section('title','Update Slider')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Update Slider</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.slider.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Slider List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text" name="name" value="{{ $slider->name }}" class="form-control">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="Title">Title (Bangla)</label>
                                    <input type="text" name="name_bn" value="{{ $slider->name_bn }}" class="form-control">
                                    <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="Image">Image (Size: W-1120px; Height: 300px)</label>
                                    <img src="{{ $slider->urlOf('image') }}" alt="" class="my-2">
                                    <input type="file" name="image" value="{{ $slider->image }}" class="form-control">
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <textarea name="link" rows="6" class="form-control">{{ $slider->link }}</textarea>
                                    <span class="text-danger">{{ $errors->first('link') }}</span>
                                </div>
                            </div>

                            <div class="col-sm-12  mt-3">
                                <a href="{{ route('admin.slider.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
