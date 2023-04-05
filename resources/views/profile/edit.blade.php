@extends('layouts.app')
@section('content')



    <div class="row">
      <div class="col-12 col-lg-12">
        <div class="card shadow-sm border-0">
          <div class="card-body">
              <h5 class="mb-0">My Account</h5>
              <hr>
              <div class="card shadow-none border">
                <div class="card-header">
                  <h6 class="mb-0">USER INFORMATION</h6>
                </div>
                <div class="card-body">
                  <form class="row g-3" enctype="multipart/form-data" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PATCH')
                     <div class="col-6">
                        <label class="form-label">Name (English)</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                     </div>
                     <div class="col-6">
                      <label class="form-label">Name (Bangla)</label>
                      <input type="text" name="name_bn" class="form-control" value="{{ $user->name_bn }}">
                    </div>
                      <div class="col-6">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" name="mobile" class="form-control" value="{{ $user->mobile }}">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Avatar</label>
                        <div class="profile-avatar text-center">
                            <img src="{{ $user->urlOf('avatar') }}" class="rounded-circle shadow" width="120" height="120" alt="">
                            <input type="file" name="avatar">
                        </div>
                    </div>
                    <div class="text-start">
                        <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                      </div>
                  </form>
                </div>
              </div>


          </div>
        </div>
      </div>
    </div><!--end row-->


  @endsection
