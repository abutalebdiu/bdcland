@extends('layouts.app')
@section('title','Customer List')
@section('content')

    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Customer List</h6>
        </div>
        <div class="ms-auto">

            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#customer">
                <i class="bi bi-plus-circle"></i>
                Upload Customer</button>

            <div class="modal fade" id="customer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
                style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('admin.customer.upload.csv.file') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Upload Customer Information <a
                                        href="{{ asset('files/cusotmer.csv') }}" download="">Simple CSV File</a></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Select CSV File</label>
                                    <input class="form-control" type="file" name="customercsv" id="formFile"
                                        accept=".csv">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <a href="{{ route('admin.customer.create') }}" type="button" class="btn btn-primary btn-sm"> <i
                    class="bi bi-plus-circle"></i> Create Customer List</a>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Assign</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>
                                            @if ($item->status == 'active')
                                                <button class="btn btn-sm btn-primary">Active</button>
                                            @elseif($item->status == 'inactive')
                                                <button class="btn btn-sm btn-danger">Inactive</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->assigncustomer)
                                                {{ $item->assigncustomer->user->name }}
                                                <br>
                                            @endif

                                            <a href="#" class="assign btn btn-primary btn-sm"
                                                data-id="{{ $item->id }}">Assign</a>
                                        </td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="{{ route('admin.customer.show', $item->id) }}" class="text-primary"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="{{ route('admin.customer.edit', $item->id) }}"
                                                    class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Edit"><i class="bi bi-pencil-fill"></i></a>
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
                    <div class="col-md-12">
                        {{ $customers->links()  }}
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="ajaxModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="ShowResult"></div>
            </div>
        </div>
    </div>

@section('js')
    <script>
        $('body').on('click', '.assign', function(e) {
            e.preventDefault();
            var customer_id = $(this).data("id");
            $.ajax({
                type: "get",
                url: "{{ route('admin.customer.modal.show') }}",
                data: {
                    customer_id: customer_id
                },
                success: function(data) {
                    $('#ajaxModel').modal('show');
                    $('#ShowResult').html(data);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
    </script>
@endsection
@endsection

@push('delete')
<form method="POST" id="deleteForm">
    @csrf
    @method('delete')
</form>
@endpush
