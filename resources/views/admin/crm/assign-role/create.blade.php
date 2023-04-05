@extends('layouts.app',['title' => 'Create Role'])

@section('content')
<div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Role</h6>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.role.index')}}" type="button" class="btn btn-primary btn-sm">   <i class="bi bi-arrow-counterclockwise"></i> Back To Role List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <form action="{{route('admin.role.store')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Role Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                <span class="text-danger">{{$errors->first('name')}}</span>
                            </div>
                        </div>
                      
                      
                        <div class="row">
                            <div class="col-sm-9 text-center mt-3">
                                <a href="{{route('admin.role.index')}}" class="btn btn-warning btn-sm px-3">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-sm px-3">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection

