@extends('layouts.app', ['title' => 'Show news'])

@section('content')
    <div class="container">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
            <div>
                <h6 class="m-0">Show news</h6>
            </div>
            <div class="ms-auto">
                <a href="{{ route('admin.news.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                        class="bi bi-arrow-counterclockwise"></i> Back To news List</a>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="card">
            <div class="card-body">
                <table class="table mb-0 table-hover">
                    <tbody>
                        <tr>
                            <th>Title</th>
                            <td>{{ $news->title }}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="{{ $news->urlOf('image') }}" width="100"></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{!! $news->description !!}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{ $news->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
