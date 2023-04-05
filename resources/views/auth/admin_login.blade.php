<!doctype html>
<html lang="en" class="light-theme">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ $setting->urlOf('favicon') }}" type="image/png" />
    <link href="{{ asset('loginfile') }}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('loginfile') }}/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{ asset('loginfile') }}/css/style.css" rel="stylesheet" />
    <link href="{{ asset('loginfile') }}/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('loginfile') }}/css/pace.min.css" rel="stylesheet" />
    <title>Admin Login - {{ $setting->site_name }}</title>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">

        <!--start content-->
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                                <img src="{{ asset('loginfile') }}/images/error/login-img.jpg" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <div class="d-flex  justify-content-center">
                                        <a href="{{ route('website') }}" class="text-center"><img src="{{ $setting->urlOf('logo') }}" class="img-fluid w-50" alt="Logo"></a>
                                    </div>
                                    <h5 class="card-title text-center mt-3">Admin Login</h5>

                                    <form class="form-body" method="post" action="{{ route('login') }}">
                                        @csrf

                                        <div class="login-separater text-center mb-4">
                                            <hr>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <input type="email" name="email" value="{{ old('email') }}"
                                                        class="form-control radius-30 ps-5" id="inputEmailAddress"
                                                        placeholder="Email Address">
                                                    <div class="text-danger">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter
                                                    Password</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="password" name="password"
                                                        value="{{ old('password') }}"
                                                        class="form-control radius-30 ps-5" id="inputChoosePassword"
                                                        placeholder="Enter Password">
                                                    <div class="text-danger">
                                                        {{ $errors->first('password') }}
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary radius-30">Sign
                                                        In</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!--end page main-->

    </div>
    <!--end wrapper-->


    <!--plugins-->
    <script src="{{ asset('login') }}/js/jquery.min.js"></script>
    <script src="{{ asset('login') }}/js/pace.min.js"></script>
</body>

</html>
