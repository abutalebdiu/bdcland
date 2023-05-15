@extends('layouts.marketerapp')
@section('title','Show Customer')
@section('content')
<div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Show Customer</h6>
            </div>
            <div class="ms-auto">
                <a href="{{route('marketer.customer.index')}}" type="button" class="btn btn-primary btn-sm">   <i class="bi bi-arrow-counterclockwise"></i> Back To Customer List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <table class="table mb-0 table-hover">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{$customer->customer->name}}</td>
                        </tr>
                        <tr>
                            <th>Company Name</th>
                            <td>{{$customer->customer->companyname}}</td>
                        </tr>
                        <tr>
                            <th>Designation</th>
                            <td>{{$customer->customer->designation}}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{$customer->customer->phone}}</td>
                        </tr>
                        <tr>
                            <th>Alternet Phone</th>
                            <td>{{$customer->customer->alternative_phone}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$customer->customer->email}}</td>
                        </tr>
                         <tr>
                            <th>Alternet Email</th>
                            <td>{{$customer->customer->alternative_email}}</td>
                        </tr>
                         <tr>
                            <th>Address</th>
                            <td>{{$customer->customer->address}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if ($customer->customer->status == 'active')
                                    <button class="btn btn-sm btn-primary">Active</button>
                                @elseif($customer->customer->status == 'inactive')
                                <button class="btn btn-sm btn-danger">Inactive</button>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection

