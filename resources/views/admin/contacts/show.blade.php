@extends('layouts.app', ['title' => 'Show Contact'])

@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Show Contact</h6>
            </div>
            <div class="ms-auto">
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{ $contact->name }}</td>
                                <th>Email</th>
                                <td>{{ $contact->email }}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{ $contact->mobile }}</td>
                                <th>Date</th>
                                <td>{{ $contact->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td colspan="3">{{ $contact->subject }}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td colspan="3">{{ $contact->message }}</td>
                            </tr>

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
