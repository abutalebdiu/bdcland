@extends('layouts.app')
@section('title','Email Configration')
@section('content')
    <div class="page-breadcrumb d-flex align-items-center mb-2 border-bottom pb-2">
        <div>
            <h6 class="m-0">Email Configration</h6>
        </div>

    </div>
    <form action="{{ route('admin.emailsetting.update', 1) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Setting</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group py-2">
                                    <label for="">SMTP Host</label>
                                    <input type="text" name="smtp_host" value="{{ $emailsetting->smtp_host }}"
                                        class="form-control">
                                    <div class="text-danger">{{ $errors->first('') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group py-2">
                                    <label for="">SMTP Port</label>
                                    <input type="text" name="smtp_port" value="{{ $emailsetting->smtp_port }}"
                                        class="form-control">
                                    <div class="text-danger">{{ $errors->first('') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group py-2">
                                    <label for="">SMTP Username</label>
                                    <input type="text" name="smtp_username" value="{{ $emailsetting->smtp_username }}"
                                        class="form-control">
                                    <div class="text-danger">{{ $errors->first('') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group py-2">
                                    <label for="">SMTP Password</label>
                                    <input type="text" name="smtp_password" value="{{ $emailsetting->smtp_password }}"
                                        class="form-control">
                                    <div class="text-danger">{{ $errors->first('') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group py-2">
                                    <label for="">From Email</label>
                                    <input type="text" name="from_email" value="{{ $emailsetting->from_email }}"
                                        class="form-control">
                                    <div class="text-danger">{{ $errors->first('') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group py-2">
                                    <label for="">From Name</label>
                                    <input type="text" name="from_name" value="{{ $emailsetting->from_name }}"
                                        class="form-control">
                                    <div class="text-danger">{{ $errors->first('') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <input type="submit" class="btn btn-primary mt-3" value="Submit">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </form>
@endsection
