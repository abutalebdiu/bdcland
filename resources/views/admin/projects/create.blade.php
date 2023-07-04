@extends('layouts.app', ['title' => 'Add New Project'])
@section('title','Add New Project')
@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Add New Project</h6>
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
                                @foreach ($projecttypess as $item)
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
                            <label for="images">Image</label>
                            <input type="file" name="images[]" class="form-control" accept=".jpg,.jpeg,.png,.PNG,.gif" multiple>
                            <span class="text-danger">{{ $errors->first('images') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label for="layout">Layout</label>
                            <input type="file" name="layout" class="form-control" accept=".jpg,.jpeg,.png,.PNG,.gif">
                            <span class="text-danger">{{ $errors->first('layout') }}</span>
                        </div>
                    </div>

                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="short_description">Short Description</label>
                            <textarea name="short_description" rows="6" class="form-control summernote"></textarea>
                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-group">
                            <label for="long_description">Long Description</label>
                            <textarea name="long_description" rows="6" class="form-control summernote"></textarea>
                            <span class="text-danger">{{ $errors->first('long_description') }}</span>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label for="Youtube">Youtube</label>
                            <input type="text" name="youtube" class="form-control">
                            <span class="text-danger">{{ $errors->first('youtube') }}</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-2">
                        <div class="form-group">
                            <label for="mapcode">Map Code</label>
                            <input type="text" name="mapcode" class="form-control">
                            <span class="text-danger">{{ $errors->first('mapcode') }}</span>
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
