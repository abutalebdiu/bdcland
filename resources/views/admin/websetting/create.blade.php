@extends('layouts.app', ['title' => 'Create Role'])

@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Role</h6>
        </div>
        <div class="ms-auto">
            <a href="{{ route('admin.role.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                    class="bi bi-arrow-counterclockwise"></i> Back To Role List</a>
        </div>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header">
                <h4>Web Logo</h4>
            </div>
            <div class="card-body">
                <img src="{{ $websetting->logo }}" alt="" width="100">
                <div class="form-group">
                    <input type="file" name="logo">
                </div>
            </div>
        </div>
    </form>
@endsection
