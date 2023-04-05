@extends('layouts.app')
@section('title','Show Report')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
                    <div>
                        <h6 class="m-0">Show Report</h6>
                    </div>
                    <div class="ms-auto">
                        <a href="{{ route('admin.report.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                                class="bi bi-arrow-counterclockwise"></i> Back To Report</a>
                    </div>
                </div>
                <!--breadcrumb-->
                <div class="card">
                    <div class="card-body">
                        <table class="table mb-0 table-hover">
                            <tbody>
                                <tr>
                                    <th style="width: 15%">Customer Name</th>
                                    <td>{{ $report->customer ? $report->customer->name : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Company Name</th>
                                    <td>{{ $report->customer ? $report->customer->companyname : '' }}</td>
                                </tr>

                                <tr>
                                    <th>Job Title</th>
                                    <td>{{ $report->customer ? $report->customer->designation : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Plot</th>
                                    <td>{{ $report->plot ? $report->plot->name : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Visit Date</th>
                                    <td>{{ Carbon\Carbon::parse($report->visit_date)->format('d M Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Whatsapp Message</th>
                                    <td>{{ $report->whatsapp }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $report->status ? $report->status->name : '' }}</td>
                                </tr>
                                <tr>
                                    <th>Remarks</th>
                                    <td>{{ $report->remarks }}</td>
                                </tr>
                                <tr>
                                    <th>Creator</th>
                                    <td>{{ $report->user ? $report->user->name : '' }}</td>
                                </tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
