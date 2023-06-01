@extends('layouts.app')
@section('title','Add New Certificate')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Add New Certificate</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.slider.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Certificate List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <form action="{{ route('admin.certificate.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>

                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="Image">Image (Size: W-250px; Height: 300px)</label>
                                    <input type="file" name="image" value="{{ old('image') }}" class="form-control">
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="short_description">Short Description</label>
                                    <textarea name="short_description" rows="6" class="form-control"></textarea>
                                    <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-12 py-2">
                                <div class="form-group">
                                    <label for="long_description">Long Description</label>
                                    <textarea name="long_description" rows="6" class="form-control"></textarea>
                                    <span class="text-danger">{{ $errors->first('long_description') }}</span>
                                </div>
                            </div>

                            <div class="col-sm-12  mt-3">
                                <a href="{{ route('admin.slider.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-sm px-3">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
