@extends('layouts.app')
@section('title','Edit State/District')
@section('content')
    <div class="container">
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h4>Edit State/District</h4>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.district.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To State/District</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.district.update',$district->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ $district->name }}" class="form-control">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                         <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="name">Name Bangla</label>
                                <input type="text" name="name_bn" value="{{ $district->name_bn }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-7 py-2">
                            <div class="form-group">
                                <label for="name">Country</label>
                                <select name="country_id" id="" class="form-control">
                                    <option value="">Select</option>
                                    @foreach ($countries as $item)
                                        <option value="{{$item->id}}" {{ $district->country_id == $item->id  ? 'selected' : ''}}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-sm-12  mt-3">
                            <a href="{{ route('admin.district.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
