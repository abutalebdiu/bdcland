@extends('layouts.marketerapp')
@section('title','Customer List')
@section('content')

    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Customer List</h6>
        </div>
        <div class="ms-auto">
        </div>
    </div>
    <!--breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <input type="date" name="from_date" @if(isset($from_date)) value="{{ $from_date }}" @endif class="form-control">
                            </div>
                            <div class="col-12 col-md-3">
                                <input type="date" name="date_to" @if(isset($date_to)) value="{{ $date_to }}" @endif class="form-control">
                            </div>
                            <div class="col-12 col-md-2">
                                <button type="submit" class="btn btn-primary btn-sm"> <i class="bi bi-search"></i> Search</button>
                            </div>
                        </div>
                    </form>
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
                                    <th>Address</th>
                                    <th>Assign Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ optional($item->customer)->name }}</td>
                                        <td>{{ optional($item->customer)->email }}</td>
                                        <td>{{ optional($item->customer)->phone }}</td>
                                        <td>{{ optional($item->customer)->address }}</td>
                                        <td>{{ optional($item->customer)->created_at->format('d-m-Y') }} </td>
                                        <td>
                                            @if(optional($item->customer)->status == 'active')
                                                <button class="btn btn-primary btn-sm">Active</button>
                                            @elseif(optional($item->customer)->status == 'inactive')
                                                <button class="btn btn-danger btn-sm">Inactive</button>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="{{ route('marketer.customer.show', optional($item->customer)->id) }}" class="text-primary"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $customers->links()  }}
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
