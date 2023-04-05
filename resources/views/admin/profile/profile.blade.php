@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="profile-head-box text-center">
                <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-3">
                    <h4>My Profile</h4>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{ route('admin.profile.edit') }}" type="button" class="btn btn-info"> <i
                                class="bi bi-pencil-square"></i> Edit Profile</a>
                        <a href="{{ route('admin.password.change') }}" type="button" class="btn btn-primary"><i
                                class="bi bi-pencil"></i> Change Password </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="profile-avatar text-center mb-2">
                    <img src="{{ $profile->urlOf('avatar') }}" alt="" class="rounded-circle shadow" width="120"
                        height="120">
                </div>
                <h4 class="text-center"> Name : {{ $profile->name }}</h4>
            </div>
            <div class="table-responsive mt-4">
                <table id="" class="table table-striped table-bordered" style="width:100%">
                    <tbody>
                        <tr>
                            <th>Name (Bangla)</th>
                            <td>{{ $profile->name_bn }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $profile->email }}</td>
                        </tr>
                        <tr>
                            <th>Mobile Number</th>
                            <td>{{ $profile->mobile }}</td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td>{{ $profile->role->name }}</td>
                        </tr>
                        <tr>
                            <th>Join Date</th>
                            <td>{{ $profile->created_at->format('d M Y') }}</td>
                        </tr>
                        <tr>
                            <th>Profile Status</th>
                            <td>
                                @if ($profile->status == 'Active')
                                    <p class="btn btn-success btn-sm"> Active</p>
                                @else
                                    <p class="btn btn-danger btn-sm"> Deactive</p>
                                @endif
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
