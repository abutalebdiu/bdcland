@extends('layouts.app')
@section('title','Add New Report')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Create Report</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.report.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Report List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <form action="{{ route('admin.report.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6 py-2">
                                <label class="form-label">Customer</label>
                                <select name="customer_id" class="form-control">
                                    <option value="">Select Customers</option>
                                    @foreach ($customers as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('customer_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('customer_id') }}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="form-label">Plot</label>
                                <select name="plot_id" class="form-control">
                                    <option value="">Select Select Plot</option>
                                    @foreach ($plots as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('plot_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('plot_id') }}</span>
                            </div>

                            <div class="col-12 col-md-6 py-2">
                                <label class="col-form-label">Visit Date</label>
                                <input type="date" name="visit_date" value="{{ old('visit_date') }}"
                                    class="form-control">
                                <span class="text-danger">{{ $errors->first('visit_date') }}</span>
                            </div>
                            <div class="col-12 col-md-6 py-2">
                                <label class="form-label">Status</label>
                                <select name="status_id" class="form-control">
                                    <option value="">Select Status</option>
                                    @foreach ($statues as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('status_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('status_id') }}</span>
                            </div>

                            <div class="col-12 py-2">
                                <label class="form-label">whatsapp Number</label>
                                <textarea name="whatsapp" value="" class="form-control">{{ old('whatsapp') }}</textarea>
                                <span class="text-danger">{{ $errors->first('whatsapp') }}</span>
                            </div>

                            <div class="col-12 py-2">
                                <label class="form-label">Remarks</label>
                                <textarea name="remarks" id="" cols="10" rows="5" class="form-control">{{ old('remarks') }}</textarea>
                            </div>

                            <div class="col-12 pt-4 text-center">
                                <a href="{{ route('admin.report.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-sm px-3">Create</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
