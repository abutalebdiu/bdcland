@extends('layouts.app')
@section('title','Add New Subscriber')
@section('content')
    <div class="container">
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h4>Add New Subscriber</h4>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.subscribers.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Subscribers list</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.subscribers.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{  old('status') == "subscribe" ? "selected" : "" }} value="subscribe"> Subscribe</option>
                                    <option {{  old('status') == "unsubscribe" ? "selected" : "" }} value="unsubscribe"> Unsubscribe</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                        </div>

                        <div class="col-sm-12  mt-3">
                            <a href="{{ route('admin.subscribers.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm px-3">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
