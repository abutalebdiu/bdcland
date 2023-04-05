@extends('layouts.app')
@section('title','Social Media List')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Social Media List</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.socialmedia.create') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-plus-circle"></i> Add New Social Media</a>
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
                                <th>Name(Bangla)</th>
                                <th>Icon</th>
                                <th>Link</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($socialmedias as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->name_bn }}</td>
                                    <td>{{ $item->icon }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>
                                        @if($item->status == 'Active')
                                        <span class="badge bg-success">Active</span>
                                       @elseif($item->status == 'Deactive')
                                            <span class="badge bg-danger">{{ $item->status }}</span>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            <a href="{{ route('admin.socialmedia.edit', $item->id) }}" class="text-warning"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i
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
@endsection

@push('delete')
    <form method="POST" id="deleteForm">
        @csrf
        @method('delete')
    </form>
@endpush
