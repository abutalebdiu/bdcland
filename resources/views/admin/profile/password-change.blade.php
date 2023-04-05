@extends('layouts.app')
@section('title', 'Password Change')
@section('content')

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-3">
                        <h5 class="mb-0">My Account</h5>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="{{ route('admin.profile') }}" type="button" class="btn btn-info"> <i
                                    class="bi bi-arrow-counterclockwise"></i> Back to Profile</a>
                        </div>
                    </div>
                    <div class="card shadow-none border">
                        <div class="card-header">
                            <h6 class="mb-0">Password Change</h6>
                        </div>
                        <div class="card-body">
                            <form class="row g-3" action="{{ route('admin.password.change') }}" method="post">
                                @csrf
                                <div class="col-7">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-control" name="current_password"
                                        value="{{ old('current_password') }}">
                                </div>
                                <div class="col-7">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        value="{{ old('password') }}">
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                                <div class="col-7">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="new_confirm_password"
                                        id="new_confirm_password" value="{{ old('new_confirm_password') }}">
                                    <span class="text-danger">{{ $errors->first('new_confirm_password') }}</span>
                                </div>
                                <div class="col-7">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <input type="checkbox" id="showpassword">
                                            <label for="check">Show Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="text-start">

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
@section('js')
    <script>
        $(document).ready(function() {
            $('#showpassword').click(function() {
                if ($('#password').attr('type') == 'text')
                {
                    $('#password').attr('type', 'password');
                    $('#new_confirm_password').attr('type', 'password');

                } else {
                    $('#password').attr('type', 'text');
                    $('#new_confirm_password').attr('type', 'text');

                }
            });
        });
    </script>
@endsection
@endsection
