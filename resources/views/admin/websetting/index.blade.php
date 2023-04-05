@extends('layouts.app', ['title' => 'Web Setting'])
@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Web Setting</h6>
        </div>

    </div>
    <form action="{{ route('admin.websetting.update', 1) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Setting</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Site Name</label>
                                    <input type="text" name="site_name" value="{{ $websetting->site_name }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Site Name (Bangla)</label>
                                    <input type="text" name="site_name_bn" value="{{ $websetting->site_name_bn }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Web URL</label>
                                    <input type="text" name="web_url" value="{{ $websetting->web_url }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 py-2">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" rows="5" class="form-control">{{ $websetting->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 py-2">
                                <div class="form-group">
                                    <label for="">Description (Bangla)</label>
                                    <textarea name="description_ar" rows="5" class="form-control">{{ $websetting->description_ar }}</textarea>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Web Logo</h5>
                    </div>
                    <div class="card-body">
                        <img src="{{ $websetting->urlOf('logo') }}" alt="" width="100">
                        <div class="form-group">
                            <input type="file" name="logo" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Mobile Logo</h5>
                    </div>
                    <div class="card-body">
                        <img src="{{ $websetting->urlOf('mobile_logo') }}" alt="" width="100">
                        <div class="form-group">
                            <input type="file" name="mobile_logo" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Favicon</h5>
                    </div>
                    <div class="card-body">
                        <img src="{{ $websetting->urlOf('favicon') }}" alt="" width="100">
                        <div class="form-group">
                            <input type="file" name="favicon" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Footer Logo</h5>
                    </div>
                    <div class="card-body">
                        <img src="{{ $websetting->urlOf('footer_logo') }}" alt="" width="100">
                        <div class="form-group">
                            <input type="file" name="footer_logo" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Contact & Address Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" value="{{ $websetting->email }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Alternative email</label>
                                    <input type="text" name="altemail" value="{{ $websetting->altemail }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" value="{{ $websetting->phone }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Alternative phone</label>
                                    <input type="text" name="altphone" value="{{ $websetting->altphone }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 py-2">
                                <div class="form-group">
                                    <label for="">Location (MAP CODE)</label>
                                    <textarea name="location" rows="5" class="form-control">{{ $websetting->location }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 py-2">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <textarea name="address" rows="5" class="form-control">{{ $websetting->address }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 py-2">
                                <div class="form-group">
                                    <label for="">Address (Bangla)</label>
                                    <textarea name="address_ar" rows="5" class="form-control">{{ $websetting->address_ar }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6 py-2">
                                <div class="form-group">
                                    <label for="">Copyright</label>
                                    <input type="text" name="copyright" id="copyright"
                                        value="{{ $websetting->copyright }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 py-2">
                                <div class="form-group">
                                    <label for="">Copyright (Bangla)</label>
                                    <input type="text" name="copyright_ar" id="copyright_ar"
                                        value="{{ $websetting->copyright_ar }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 py-2">
                                <div class="form-group">
                                    <label for="">Developed By</label>
                                    <input type="text" name="developed_by" id="developed_by"
                                        value="{{ $websetting->developed_by }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 py-2">
                                <div class="form-group">
                                    <label for="">Developed By (Bangla)</label>
                                    <input type="text" name="developed_by_ar" id="developed_by_ar"
                                        value="{{ $websetting->developed_by_ar }}" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>
    </form>
@endsection
