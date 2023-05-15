@extends('layouts.app', ['title' => 'Show Project'])

@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Show Project</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.project.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To Project List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <table class="table mb-0 table-hover">
                    <tbody>
                        <tr>
                            <th>Title</th>
                            <td>{{ $project->title }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="{{ $project->urlOf('image') }}" width="100"></td>
                        </tr>
                        <tr>
                            <th>Text Year</th>
                            <td>{{ $project->year ? $project->year->name : '' }}</td>
                        </tr>
                        <tr>
                            <th>Project type</th>
                            <td>{{ $project->project_type ? $project->project_type->name : '' }}</td>
                        </tr>
                        <tr>
                            <th>Budget</th>
                            <td>{{ $project->budget }}</td>
                        </tr>
                        <tr>
                            <th>Budget</th>
                            <td>{{ $project->budget }}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{ $project->created_at->format('D-M-y') }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                @if($project->status == 'active')
                                    <span class="badge bg-success">{{ $project->status }}</span> 
                                @elseif($project->status == 'daft')
                                    <span class="badge bg-danger">{{ $project->status }}</span> 
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
