@extends('layouts.marketerapp')
@section('title', 'Marketer Dashboard')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Marketer Dashbaord {{ Auth::user()->usertype }}</li>
                </ol>
            </nav>
        </div>

    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
        <div class="col">
            <div class="card radius-10 bg-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1 text-white">Total Customers</p>
                            <h4 class="mb-0 text-white">  0 </h4>
                        </div>
                        <div class="ms-auto widget-icon bg-white-1 text-white">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 bg-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1 text-white">Total Reports</p>
                            <h4 class="mb-0 text-white">  0 </h4>
                        </div>
                        <div class="ms-auto widget-icon bg-white-1 text-white">
                            <i class="bi bi-file"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
