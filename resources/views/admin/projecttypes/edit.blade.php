@extends('layouts.app')
@section('title','Edit Project Type')
@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Edit Project Type</h6>
        </div>
        <div class="ms-auto">
            <a href="{{ route('admin.projecttype.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                    class="bi bi-arrow-counterclockwise"></i> Back To Project Type List</a>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.projecttype.update',$projecttype->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label >Name *</label>
                            <input type="text" name="name" value="{{ $projecttype->name }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label >Name Bangla *</label>
                            <input type="text" name="name_bn" value="{{ $projecttype->name_bn }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label >Status</label>
                            <select name="" id="" class="form-control">

                                <option value="active" {{$projecttype->status == 'active' ? 'selected' : ''}}>Active</option>
                                <option value="deactive" {{$projecttype->status == 'deactive' ? 'selected' : ''}}>Deactive</option>
                            </select>
                        </div>
                    </div>



                    <div class="col-12  mt-3 text-center">
                        <a href="{{ route('admin.importantlink.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
