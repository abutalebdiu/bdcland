@extends('layouts.app', ['title' => 'Contact List'])

@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Contact List</h6>
            </div>
            <div class="ms-auto">

            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            <a href="{{ route('admin.contact.show', $item->id) }}" class="text-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i
                                                    class="bi bi-eye-fill"></i></a>
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
@endsection

@push('delete')
    <form method="POST" id="deleteForm">
        @csrf
        @method('delete')
    </form>
@endpush
