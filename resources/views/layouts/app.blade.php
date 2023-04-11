<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> @yield('title') - {{ $setting->site_name }} </title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset($setting->logo) }}" type="image/png" />

<!--plugins-->
<link href="{{ asset('adminfile') }}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
<link href="{{ asset('adminfile') }}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
<link href="{{ asset('adminfile') }}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
<link href="{{ asset('adminfile') }}/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('adminfile') }}/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" />

<!-- Bootstrap CSS -->
<link href="{{ asset('adminfile') }}/css/bootstrap.min.css" rel="stylesheet" />
<link href="{{ asset('adminfile') }}/css/bootstrap-extended.css" rel="stylesheet" />
<link href="{{ asset('adminfile') }}/css/style.css" rel="stylesheet" />
<link href="{{ asset('adminfile') }}/css/icons.css" rel="stylesheet">
<link href="{{ asset('adminfile') }}/css/custom.css" rel="stylesheet" />

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.css" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- loader-->
<link href="{{ asset('adminfile') }}/css/pace.min.css" rel="stylesheet" />
<!--Theme Styles-->
<link href="{{ asset('adminfile') }}/css/dark-theme.css" rel="stylesheet" />
<link href="{{ asset('adminfile') }}/css/light-theme.css" rel="stylesheet" />
<link href="{{ asset('adminfile') }}/css/semi-dark.css" rel="stylesheet" />
<link href="{{ asset('adminfile') }}/css/header-colors.css" rel="stylesheet" />



@stack('css')

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-icon fs-3">
                    <i class="bi bi-list"></i>
                </div>
                <form class="searchbar">
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i
                            class="bi bi-search"></i></div>
                    <input class="form-control" type="text" placeholder="Type here to search">
                    <div class="position-absolute top-50 translate-middle-y search-close-icon"><i
                            class="bi bi-x-lg"></i></div>
                </form>
                <div class="top-navbar-right ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item search-toggle-icon">
                            <a class="nav-link" href="#">
                                <div class="">
                                    <i class="bi bi-search"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('website') }}" class="nav-link bg-info text-white" target="_blank">
                                <i class="bi bi-globe"></i> Visit Website
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="notifications">
                                    <i class="bi bi-person"></i>
                                    {{ Auth::user()->name }}
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="p-2">
                                    <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset($setting->logo) }}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <a href="{{ route('admin.dashboard') }}">
                        <h4 class="logo-text">Admin Panel</h4>
                    </a>
                </div>
                <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <div class="parent-icon"><i class="bi bi-house-fill"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>

                {{-- @can('User Management') --}}
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-people-fill"></i>
                        </div>
                        <div class="menu-title">User Managements</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('admin.user.create') }}"><i class="bi bi-circle"></i>Add new
                                User</a>
                        </li>
                        <li> <a href="{{ route('admin.user.index') }}"><i class="bi bi-circle"></i>Admin User
                                List</a>
                        </li>

                        <li> <a href="{{ route('admin.marketers.users') }}"><i class="bi bi-circle"></i>Markters
                                List</a>
                        </li>

                    </ul>
                </li>
                {{-- @endcan --}}

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-people-fill"></i>
                        </div>
                        <div class="menu-title">CRM Managements</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.status.index') }}"><i class="bi bi-circle"></i>Status</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.plot.index') }}"><i class="bi bi-circle"></i>Plot List</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.customer.index') }}"><i class="bi bi-circle"></i>Customer List</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.report.index') }}"><i class="bi bi-circle"></i>Reports List</a>
                        </li>
                    </ul>
                </li>



                {{-- @can('Permissions') --}}
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <div class="menu-title">Permissions</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.role.index') }}"><i class="bi bi-circle"></i>Role
                                List</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.permission.index') }}"><i class="bi bi-circle"></i>Permission
                                List</a>
                        </li>
                    </ul>
                </li>
                {{-- @endcan --}}
                {{-- @can('Setting') --}}
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-gear"></i>
                        </div>
                        <div class="menu-title">Setting</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.emailsetting.index') }}"> <i class="bi bi-circle"></i> Email
                                Configration</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.currency.index') }}"> <i class="bi bi-circle"></i> Currency</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.language.index') }}"> <i class="bi bi-circle"></i> Language</a>
                        </li>
                    </ul>
                </li>
                {{-- @endcan --}}
                {{-- @can('Location') --}}
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-map"></i>
                        </div>
                        <div class="menu-title">Location</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.country.index') }}"> <i class="bi bi-circle"></i>Country</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.district.index') }}"> <i
                                    class="bi bi-circle"></i>State/District</a>
                        </li>
                    </ul>
                </li>
                {{-- @endcan
                @can('Website') --}}
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-globe"></i>
                        </div>
                        <div class="menu-title">Website</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('admin.websetting.index') }}">
                                <i class="bi bi-circle"></i>
                                Web Config
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.slider.index') }}">
                                <i class="bi bi-circle"></i>
                                Slider List
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.gallery.index') }}">
                                <i class="bi bi-circle"></i>
                                Gallery List
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.news.index') }}">
                                <i class="bi bi-circle"></i>
                                News List
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.contact.index') }}">
                                <i class="bi bi-circle"></i>
                                Contact
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.projecttype.index') }}">
                                <i class="bi bi-circle"></i>
                                Project type
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.blogcategory.index') }}">
                                <i class="bi bi-circle"></i>
                                Blog Category
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.blog.index') }}">
                                <i class="bi bi-circle"></i>
                                Blogs
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.socialmedia.index') }}">
                                <i class="bi bi-circle"></i>
                                Social Media
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.subscribers.index') }}">
                                <i class="bi bi-circle"></i>
                                Subscribers list
                            </a>
                        </li>


                    </ul>
                </li>
                {{-- @endcan --}}
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                        class="has-arrow">
                        <div class="parent-icon">
                            <i class="bi bi-patch-exclamation-fill"></i>
                        </div>Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">


            @yield('content')

            @stack('delete')


        </main>
        <!--end page main-->



    </div>
    <!--end wrapper-->

    <!--plugins-->
    <script src="{{ asset('adminfile') }}/js/jquery.min.js"></script>
    <!-- Bootstrap bundle JS -->
    <script src="{{ asset('adminfile') }}/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('adminfile') }}/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('adminfile') }}/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('adminfile') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('adminfile') }}/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('adminfile') }}/js/table-datatable.js"></script>
    <script src="{{ asset('adminfile') }}/plugins/select2/js/select2.min.js"></script>
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js"
        integrity="sha512-6rE6Bx6fCBpRXG/FWpQmvguMWDLWMQjPycXMr35Zx/HRD9nwySZswkkLksgyQcvrpYMx0FELLJVBvWFtubZhDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--app-->
    <script src="{{ asset('adminfile') }}/js/app.js"></script>


    <script type="text/javascript">
        $(document).ready(function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });


        $(function() {
            "use strict";

            $('.single-select').select2();
        });
    </script>


    <script>
        function deleteItem(id) {
            let deleteRoute = `{!! request()->url() !!}/${id}`;
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be Delete this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ms-1'
                },
                buttonsStyling: false
            }).then(function(result) {
                console.log(result);
                if (result.value) {
                    $('#deleteForm').attr('action', deleteRoute).submit();
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>

    @yield('js')
    @stack('js')

    {!! Notify::message() !!}



</body>

</html>
