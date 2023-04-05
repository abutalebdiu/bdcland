@extends('layouts.app')
@section('title','Edit Currency')
@section('content')
    <div class="container">
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h4>Edit Currency</h4>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.currency.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Currencies list</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.currency.update',$currency->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $currency->name }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="Code">Code</label>
                                <input type="text" name="code" value="{{ $currency->code }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('code') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="symbol">Symbol</label>
                                <input type="text" name="symbol" value="{{ $currency->symbol }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('symbol') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="Rate">Exchange Rate</label>
                                <input type="text" name="rate" value="{{ $currency->rate }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('rate') }}</span>
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{  $currency->status == "default" ? "selected" : "" }} value="default"> Default</option>
                                    <option {{  $currency->status == "regular" ? "selected" : "" }} value="regular"> Regular</option>
                                    <option {{  $currency->status == "daft" ? "selected" : "" }} value="daft"> Daft</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                        </div>

                        <div class="col-sm-12  mt-3">
                            <a href="{{ route('admin.currency.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
