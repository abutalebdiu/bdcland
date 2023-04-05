@extends('layouts.app')
@section('title','Add New Language')
@section('content')
    <div class="container">
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h4>Add New Language</h4>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.language.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Languages list</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.language.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="Code">Code</label>
                                <input type="text" name="code" value="{{ old('code') }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('code') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="Direction">Direction</label>
                                <input type="text" name="direction" value="{{ old('direction') }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('direction') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{  old('status') == "default" ? "selected" : "" }} value="default"> Default</option>
                                    <option {{  old('status') == "regular" ? "selected" : "" }} value="regular"> Regular</option>
                                    <option {{  old('status') == "daft" ? "selected" : "" }} value="daft"> Daft</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                        </div>

                        <div class="col-sm-12  mt-3">
                            <a href="{{ route('admin.currency.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm px-3">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
