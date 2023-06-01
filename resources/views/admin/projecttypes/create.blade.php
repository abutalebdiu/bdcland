@extends('layouts.app')
@section('title','Create New Project Type')
@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Create New Project Type</h6>
        </div>
        <div class="ms-auto">
            <a href="{{ route('admin.projecttype.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                    class="bi bi-arrow-counterclockwise"></i> Back To Project Type List</a>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.projecttype.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label >Name *</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label >Name Bangla *</label>
                            <input type="text" name="name_bn" value="{{ old('name_bn') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label >Parent Type</label>
                            <select name="p_id" id="p_id" class="form-control">
                                <option value="">Select Type</option>
                                @foreach ($projecttypes as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                        </div>
                    </div>



                    <div class="col-12  mt-3 text-center">
                        <a href="{{ route('admin.projecttype.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-sm px-3">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
