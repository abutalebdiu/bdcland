@extends('layouts.app')
@section('title','Show sliders')
@section('content')
<div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Show sliders</h6>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.sliders.index')}}" type="button" class="btn btn-primary btn-sm">   <i class="bi bi-arrow-counterclockwise"></i> Back To sliders List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <table class="table mb-0 table-hover">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{$sliders->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$sliders->email}}</td>
                        </tr>
                        <tr>
                            <th>Mobile Number</th>
                            <td>{{$sliders->mobile}}</td>
                        </tr>
                        <tr>
                            <th>Role Permission</th>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$sliders->name}}</td>
                        </tr>
                        <tr>
                            <th>Join Date</th>
                            <td>{{$sliders->created_at}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection

