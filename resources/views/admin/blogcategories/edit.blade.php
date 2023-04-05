@extends('layouts.app', ['title' => ''])
@section('title','Edit Blog Category')
@section('content')
    <div class="container">
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h4>Edit Blog Category</h4>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.blogcategory.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Blog Category List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.blogcategory.update',$blogcategory->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $blogcategory->name }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="name">Name (Bangla)</label>
                                <input type="text" name="name_bn" value="{{ $blogcategory->name_bn }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{  $blogcategory->status == "Publish" ? "selected" : "" }} value="Publish"> Publish</option>
                                    <option {{  $blogcategory->status == "Daft" ? "selected" : "" }} value="Daft"> Daft</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                        </div>

                        <div class="col-sm-12  mt-3">
                            <a href="{{ route('admin.blogcategory.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
