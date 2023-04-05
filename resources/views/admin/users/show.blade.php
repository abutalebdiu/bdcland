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
@endsection

