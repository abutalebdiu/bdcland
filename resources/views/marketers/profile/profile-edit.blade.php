@extends('layouts.app')
@section('title','Profile Edit')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-3">
                        <h5 class="mb-0">Profile Edit</h5>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="{{ route('admin.profile') }}" type="button" class="btn btn-info"> <i
                                    class="bi bi-arrow-counterclockwise"></i> Back to Profile</a>
                        </div>
                    </div>
                    <div class="card shadow-none border">
                        <div class="card-header">
                            <h6 class="mb-0">USER INFORMATION</h6>

                        </div>
                        <div class="card-body">
                            <form class="row g-3" method="post" action="{{ route('admin.profile.edit') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $profile->name }}">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Name (Bangla)</label>
                                    <input type="text" class="form-control" name="name_bn" value="{{ $profile->name_bn }}">
                                    <div class="text-danger">{{ $errors->first('name_bn') }}</div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Email address</label>
                                    <input type="text" class="form-control" name="email" value="{{ $profile->email }}">
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile" value="{{ $profile->mobile }}">
                                    <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Avatar</label>
                                    <input type="file" class="form-control" name="avatar">
                                    <div class="text-danger">{{ $errors->first('avatar') }}</div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card shadow-sm border-0 overflow-hidden">
                <div class="card-body">
                    <div class="profile-avatar text-center">
                        <img src="{{ $profile->urlOf('avatar') }}" class="rounded-circle shadow mb-2" width="120"
                            height="120" alt=""> <br>
                        <h5>Name : {{ $profile->name }}</h5>
                    </div>
                    <hr>
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
    </div>
@endsection
