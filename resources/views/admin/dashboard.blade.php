@extends('layouts.app')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Admin Dashbaord</li>
                </ol>
            </nav>
        </div>

    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
        <div class="col">
            <div class="card radius-10 bg-primary">
                <div class="card-body">
                    <a href="{{ route('admin.user.index') }}">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1 text-white">Admin User</p>
                                <h4 class="mb-0 text-white">{{ $adminusers }}</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-white-1 text-white">
                                <i class="bi bi-bag-check-fill"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 bg-success">
                <div class="card-body">
                    <a href="{{ route('admin.vendors.users') }}">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1 text-white">Vendor User</p>
                                <h4 class="mb-0 text-white">{{ $vendorusers }}</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-white-1 text-white">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card radius-10 bg-success">
                <div class="card-body">
                    <a href="{{ route('admin.general.users') }}">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1 text-white">General User</p>
                                <h4 class="mb-0 text-white">{{ $generalusers }}</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-white-1 text-white">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card radius-10 bg-orange">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1 text-white">Total Order</p>
                            <h4 class="mb-0 text-white">0 </h4>
                        </div>
                        <div class="ms-auto widget-icon bg-white-1 text-white">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
