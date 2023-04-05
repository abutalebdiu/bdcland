@extends('layouts.app')
@section('title','Edit Social Media')
@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Edit Social Media</h6>
        </div>
        <div class="ms-auto">
            <a href="{{ route('admin.socialmedia.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                    class="bi bi-arrow-counterclockwise"></i> Back To Social Media List</a>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.socialmedia.update',$socialmedia->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label >Name *</label>
                            <input type="text" name="name" value="{{ $socialmedia->name }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label >Name (Bangla)</label>
                            <input type="text" name="name_bn" value="{{ $socialmedia->name_bn }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label >Icon</label>
                            <input type="text" name="icon" value="{{ $socialmedia->icon }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('icon') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 py-2">
                        <div class="form-group">
                            <label >Link</label>
                            <input type="text" name="link" value="{{ $socialmedia->link }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('link') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label >Status</label>
                            <select name="" id="" class="form-control">
                                <option value="1" {{$socialmedia->status == '1' ? 'selected' : ''}}>Active</option>
                                <option value="2" {{$socialmedia->status == '2' ? 'selected' : ''}}>Deactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12  mt-3 text-center">
                        <a href="{{ route('admin.socialmedia.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
