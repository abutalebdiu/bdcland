@extends('layouts.app', ['title' => 'Edit Country'])
@section('title','Edit Country')
@section('content')
    <div class="container">
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h4>Edit Country</h4>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.country.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Countries</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.country.update',$country->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $country->name }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                         <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="name">Name Bangla</label>
                                <input type="text" name="name_bn" value="{{ $country->name_bn }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{   $country->status == "active" ? "selected" : "" }} value="active"> Active</option>
                                    <option {{   $country->status == "deactive" ? "selected" : "" }} value="deactive"> Deactive</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                        </div>

                        <div class="col-sm-12  mt-3">
                            <a href="{{ route('admin.country.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
