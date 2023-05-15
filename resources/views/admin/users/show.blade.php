@extends('layouts.app',['title' => 'Show User'])
@section('title','Show User')
@section('content')
<div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Show User</h6>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.user.index')}}" type="button" class="btn btn-primary btn-sm">   <i class="bi bi-arrow-counterclockwise"></i> Back To User List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Name (Bangla)</th>
                                    <td>{{$user->name_bn}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$user->email}}</td>
                                </tr>
                                <tr>
                                    <th>Mobile Number</th>
                                    <td>{{$user->mobile}}</td>
                                </tr>
                                <tr>
                                    <th>Role Permission</th>
                                    <td>{{ optional($user->role)->name }}</td>
                                </tr>

                                <tr>
                                    <th>Join Date</th>
                                    <td>{{$user->created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>Assign Customer List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Insert Date</th>
                                <th>Assgin Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customerbyusers as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ optional($item->customer)->name }}</td>
                                    <td>{{ optional($item->customer)->email }}</td>
                                    <td>{{ optional($item->customer)->phone }}</td>
                                    <td>{{ optional($item->customer)->created_at->format('d-m-Y') }} </td>
                                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        @if (optional($item->customer)->status == 'active')
                                            <button class="btn btn-primary btn-sm">Active</button>
                                        @elseif(optional($item->customer)->status == 'inactive')
                                            <button class="btn btn-danger btn-sm">Inactive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.customer.assign.destroy',$item->id) }}" class="btn  btn-danger btn-sm"> <i class="bi bi-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h4>Marketer Reports List</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row mb-3 border-bottom pb-2">
                        <div class="col-12 col-md-2">
                            <input type="date" name="from_date" @if(isset($from_date)) value="{{ $from_date }}" @endif class="form-control">
                        </div>
                        <div class="col-12 col-md-2">
                            <input type="date" name="date_to" @if(isset($date_to)) value="{{ $date_to }}" @endif class="form-control">
                        </div>

                        <div class="col-12 col-md-2">
                            <select name="status_id" id="" class="form-control">
                                <option value="">Select Status</option>
                                @foreach ($statuses as $status)
                                    <option @if(isset($status_id)) {{ $status->id == $status_id ? "selected" : '' }}  @endif value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <button type="submit" name="search" class="btn btn-primary btn-sm"> <i class="bi bi-search"></i> Search</button>
                            <button type="submit" name="pdf" class="btn btn-primary btn-sm"><i class="bi bi-download"></i> PDF</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer Name</th>
                                <th>Job Title</th>
                                <th>Mobile</th>
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

@endsection

