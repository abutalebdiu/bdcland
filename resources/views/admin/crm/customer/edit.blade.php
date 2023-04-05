@extends('layouts.app')
@section('title','Update Customer')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Update Customer</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.plot.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Status List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <form action="{{ route('admin.customer.update', $customer->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-12 col-md-6 py-2">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{ $customer->name }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="companyname" value="{{ $customer->companyname }}"
                                    class="form-control">
                                <span class="text-danger">{{ $errors->first('companyname') }}</span>
                            </div>


                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Phone</label>
                                <input type="text" name="phone" value="{{ $customer->phone }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Alternet Phone</label>
                                <input type="text" name="alternative_phone" value="{{ $customer->alternative_phone }}"
                                    class="form-control">
                            </div>

                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <input type="text" name="email" value="{{ $customer->email }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Alternet Email</label>
                                <input type="text" name="alternative_email" value="{{ $customer->alternative_email }}"
                                    class="form-control">
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="form-label">Designation</label>
                                <input type="text" name="designation" value="{{ $customer->designation }}"
                                    class="form-control">
                                <span class="text-danger">{{ $errors->first('designation') }}</span>
                            </div>

                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <input type="text" name="address" value="{{ $customer->address }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Campain ID</label>
                                <input type="text" name="campain_id" value="{{ $customer->campain_id }}"
                                    class="form-control">
                                <span class="text-danger">{{ $errors->first('campain_id') }}</span>
                            </div>

                            <div class="col-12 col-md-6 py-2">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="active" {{ $customer->status == 'active' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="inactive" {{ $customer->status == 'inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                            <div class="col-12 pt-4 text-center">
                                <a href="{{ route('admin.customer.index') }}"
                                    class="btn btn-warning btn-sm px-3">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
