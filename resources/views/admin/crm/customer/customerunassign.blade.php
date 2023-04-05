@extends('layouts.app')
@section('title','Customer List')
@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Customer List</h6>
            </div>
            <div class="ms-auto">

                <a href="{{ route('admin.customer.create') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-plus-circle"></i> Create Customer List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('customerassign.store') }}" method="post">
                    @csrf
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" name="allbox" class="check_all_class" id="check_all_class">
                                    </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $item)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="customer_id[]" value="{{ $item->id }}"
                                                class="customer_id">
                                        </td>
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Marketer list</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="">Select Marketer</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
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
        $(document).on('click', '.check_all_class', function() {
            if (this.checked == false) {
                $('.customer_id').prop('checked', false).change();
                $(".customer_id").each(function() {
                    var id = $(this).attr('id');
                    $(this).val('').change();
                });
            } else {
                $('.customer_id').prop("checked", true).change();
                $(".customer_id").each(function() {
                    var id = $(this).attr('id');
                    $(this).val(id).change();
                });
            }
        });
        //=======================
    </script>
@endsection
@endsection

@push('delete')
<form method="POST" id="deleteForm">
    @csrf
    @method('delete')
</form>
@endpush
