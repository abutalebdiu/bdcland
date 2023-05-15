@extends('layouts.app')
@section('title','Update Plot')
@section('content')
<div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Update Plot</h6>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.plot.index')}}" type="button" class="btn btn-primary btn-sm">   <i class="bi bi-arrow-counterclockwise"></i> Back To Status List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <form action="{{route('admin.plot.update',$plot->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-12 col-md-6 py-2">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{$plot->name}}" class="form-control">
                                <span class="text-danger">{{$errors->first('name')}}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <input type="text" name="address" value="{{$plot->address}}" class="form-control">
                                <span class="text-danger">{{$errors->first('address')}}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Contact</label>
                                <input type="text" name="contact" value="{{$plot->contact}}" class="form-control">
                                <span class="text-danger">{{$errors->first('contact')}}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="active" {{$plot->status == 'active' ? 'selected' : ''}}>Active</option>
                                    <option value="inactive" {{$plot->status == 'inactive' ? 'selected' : ''}}>Inactive</option>
                                </select>
                                <span class="text-danger">{{$errors->first('status')}}</span>
                            </div>
                            <div class="col-12 pt-4 text-center">
                                <a href="{{route('admin.status.index')}}" class="btn btn-warning btn-sm px-3">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
</div>
@endsection

