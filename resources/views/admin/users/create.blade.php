@extends('layouts.app')
@section('title','Create New User')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Create New User</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.user.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To User List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <h5 class="mb-0">User Registration</h5>
                    </div>
                    <hr>
                    <form action="{{ route('admin.user.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Enter  Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                    id="" placeholder="Enter Name">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Enter  Name(Bangla)</label>
                            <div class="col-sm-9">
                                <input type="text" name="name_bn" value="{{ old('name_bn') }}" class="form-control"
                                    id="" placeholder="Enter Name (Bangla)">
                                <span class="text-danger">{{ $errors->first('name_bn') }}</span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Email Address</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                    id="" placeholder="Email Address">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Mobile No</label>
                            <div class="col-sm-9">
                                <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control"
                                    id="" placeholder="Mobile No">
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Choose Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id=""
                                    placeholder="Choose Password">
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="" placeholder="Confirm Password">
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <select name="usertype" id="usertype" class="form-control">
                                    <option value="">Select Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="marketer">Marketer</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary px-5">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
