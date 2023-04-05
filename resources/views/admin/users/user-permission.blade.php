@extends('layouts.app', ['title' => 'User Permission'])

@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">User Permission</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.user.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Admin User List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <form action="{{ route('user.permission.update', $user->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Permission</label>
                            <div class="col-sm-10">
                                <div class="d-flex">
                                    <div class="row">
                                        @foreach ($permissions as $permission)
                                            <div class="col-md-3">
                                                <input type="checkbox" id="{{ $permission->id }}"
                                                    value="{{ $permission->name }}" name="permissions[]"
                                                    {{ $user_permissions->find($permission->id) ? 'checked' : '' }}>
                                                <label for="{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <span class="text-danger">{{ $errors->first('permission') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9 text-center mt-3">
                                <a href="{{ route('admin.user.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-sm px-3">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
