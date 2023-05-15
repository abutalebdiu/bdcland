@extends('layouts.app')
@section('title','Add New Customer')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Add New Customer</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.customer.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Customer List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <form action="{{ route('admin.customer.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6 py-2">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="companyname" value="{{ old('companyname') }}"
                                    class="form-control">
                                <span class="text-danger">{{ $errors->first('companyname') }}</span>
                            </div>


                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Phone</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Alternet Phone</label>
                                <input type="text" name="alternative_phone" value="{{ old('alternative_phone') }}"
                                    class="form-control">
                            </div>

                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Alternet Email</label>
                                <input type="text" name="alternative_email" value="{{ old('alternative_email') }}"
                                    class="form-control">
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="form-label">Designation</label>
                                <input type="text" name="designation" value="{{ old('designation') }}"
                                    class="form-control">
                                <span class="text-danger">{{ $errors->first('designation') }}</span>
                            </div>

                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <input type="text" name="campain_id" value="{{ old('campain_id') }}"
                                    class="form-control">
                                <span class="text-danger">{{ $errors->first('campain_id') }}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Campain ID</label>
                                <input type="text" name="address" value="{{ old('address') }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>

                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                            <div class="col-12 pt-4 text-center">
                                <a href="{{ route('admin.customer.index') }}"
                                    class="btn btn-warning btn-sm px-3">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-sm px-3">Create</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
