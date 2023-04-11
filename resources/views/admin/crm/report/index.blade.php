@extends('layouts.app')
@section('title','Report List')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
                    <div>
                        <h6 class="m-0">Report List</h6>
                    </div>
                    <div class="ms-auto">
                        <a href="{{ route('admin.report.create') }}" type="button" class="btn btn-primary btn-sm"> <i
                                class="bi bi-plus-circle"></i> Create Report</a>
                    </div>
                </div>
                <!--breadcrumb-->
                <div class="card">
                    <div class="card-header">
                        <form action="">
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <select name="user_id" id="" class="form-control">
                                        <option value="">Select Markter</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-2">
                                    <select name="customer_id" id="customer_id" class="form-control">
                                        <option value="">Select Customer</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-2">
                                    <select name="status_id" id="" class="form-control">
                                        <option value="">Select Status</option>
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-2">
                                    <input type="date" name="from_date" @if(isset($from_date)) value="{{ $from_date }}" @endif class="form-control">
                                </div>
                                <div class="col-12 col-md-2">
                                    <input type="date" name="date_to" @if(isset($date_to)) value="{{ $date_to }}" @endif class="form-control">
                                </div>
                                <div class="col-12 col-md-2">
                                    <button type="submit" class="btn btn-primary btn-sm">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Job Title</th>
                                        <th>Mobile</th>
                                        <th>Marketer</th>
                                        <th>Desired Plot</th>
                                        <th>Visit Status</th>
                                        <th>Visit Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reports as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->customer ? $item->customer->name : '' }}</td>
                                            <td>{{ $item->customer ? $item->customer->designation : '' }}</td>
                                            <td>{{ $item->customer ? $item->customer->phone : '' }}</td>
                                            <td>{{ $item->user ? $item->user->name : '' }}</td>
                                            <td>{{ $item->plot ? $item->plot->name : '' }}</td>
                                            <td>
                                                <span
                                                    class="btn btn-info btn-sm text-white">{{ $item->status ? $item->status->name : '' }}</span>
                                            </td>
                                            <td>{{ Carbon\Carbon::parse($item->visit_date)->format('d M Y') }}</td>

                                            <td>
                                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                    <a href="{{ route('admin.report.show', $item->id) }}"
                                                        class="text-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Views"><i
                                                            class="bi bi-eye-fill"></i></a>
                                                    <a href="{{ route('admin.report.edit', $item->id) }}"
                                                        class="text-warning" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Edit"><i
                                                            class="bi bi-pencil-fill"></i></a>
                                                    <a href="javascript:;" class="text-danger"
                                                        onclick="deleteItem({{ $item->id }})" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="Delete"><i
                                                            class="bi bi-trash-fill"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('delete')
    <form method="POST" id="deleteForm">
        @csrf
        @method('delete')
    </form>
@endpush
