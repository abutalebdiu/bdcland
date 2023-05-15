@extends('layouts.app', ['title' => 'Create New Project'])

@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Create New Project</h6>
        </div>
        <div class="ms-auto">
            <a href="{{ route('admin.project.index') }}" type="button" class="btn btn-primary btn-sm"> <i
                    class="bi bi-arrow-counterclockwise"></i> Back To Project List</a>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label for="Title">Project Type</label>
                            <select name="project_type_id" class="form-control">
                                @foreach ($projecttypes as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == old('project_type_id') ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('project_type_id') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label for="Title">Tax Year</label>
                            <select name="tax_year_id" class="form-control">
                                @foreach ($taxyears as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == old('tax_year_id') ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach

                            </select>
                            <span class="text-danger">{{ $errors->first('project_type_id') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group" class="form-control">
                            <label for="Title">Description</label>
                            <input type="text" name="description" value="{{ old('description') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label for="Title">Image</label>
                            <input type="file" name="image" class="form-control">
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label for="Image">Budget</label>
                            <input type="text" name="budget" value="{{ old('budget') }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('budget') }}</span>
                        </div>
                    </div>


                    <div class="col-12  mt-3 text-center">
                        <a href="{{ route('admin.project.index') }}" class="btn btn-warning btn-sm px-3">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-sm px-3">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
