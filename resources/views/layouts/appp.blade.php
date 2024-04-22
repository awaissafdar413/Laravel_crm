<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>MA Tech Solution BPO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- Css -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
    @stack('style')
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/%40iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{ asset('assets/css/style-dark.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <div class="page-wrapper toggled">
        <!-- sidebar-wrapper -->
        @auth
        <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
            <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                <div class="sidebar-brand">
                    <a href="{{ route('dashboard') }}">
                        {{-- <img src="assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                        <img src="assets/images/logo-light.png" height="24" class="logo-dark-mode" alt=""> --}}
                        <span class="sidebar-colored">
                            <img src="assets/images/logo-light.png" alt="">
                        </span>
                    </a>
                </div>

                <ul class="sidebar-menu">
                    <li class="sidebar">
                        <a href="{{ route('dashboard') }}"><i class="ti ti-home me-2"></i>Dashboard</a>

                    </li>
                    <li class="sidebar">
                        <a href="{{ route('alltemplate') }}"><i class="ti ti-browser me-2"></i>Email Layouts</a>

                    </li>
                    <li class="sidebar">
                        <a href="{{ route('structure') }}"><i class="ti ti-brand-gravatar me-2"></i>Set Template</a>
                    </li>
                    <li class="sidebar">
                        <a href="{{ route('allemailaddress') }}"><i class="ti ti-apps me-2"></i>Email Address</a>

                    </li>
                    <li class="sidebar">
                        <a href="{{ route('profile.show') }}"><i class="ti ti-user me-2"></i>User Profile</a>

                    </li>
                    <li class="sidebar">
                        <a href="{{ route('insertemail') }}"><i class="ti ti-shopping-cart me-2"></i>Set email
                            address</a>

                    </li>
                    {{-- <li class="sidebar">
                        <a href="javascript:void(0)"><i class="ti ti-camera me-2"></i>Gallery</a>

                    </li>
                    <li class="sidebar">
                        <a href="javascript:void(0)"><i class="ti ti-file-info me-2"></i>Pages</a>

                    </li>
                    <li class="sidebar">
                        <a href="javascript:void(0)"><i class="ti ti-file-info me-2"></i>UI Components</a>

                    </li>
                    <li class="sidebar">
                        <a href="javascript:void(0)"><i class="ti ti-mail-opened me-2"></i>Email Template</a>

                    </li>
                    <li class="sidebar">
                        <a href="javascript:void(0)"><i class="ti ti-file-invoice me-2"></i>Invoice</a>

                    </li>
                    <li class="sidebar">
                        <a href="javascript:void(0)"><i class="ti ti-login me-2"></i>Authentication</a>

                    </li>
                    <li class="sidebar">
                        <a href="javascript:void(0)"><i class="ti ti-license me-2"></i>Miscellaneous</a>

                    </li> --}}
                </ul>
                <!-- sidebar-menu  -->
            </div>

            <!-- Sidebar Footer -->
        </nav>
        @endauth

        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content">
            <!-- Top Header -->
           @auth
           <div class="top-header">
            <div class="header-bar d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <a href="{{ route('dashboard') }}" class="logo-icon me-3">
                        <img src="assets/images/logo-icon.png" height="30" class="small" alt="">
                        <span class="big">
                            <img src="assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                        </span>
                    </a>
                    <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                    <div class="search-bar p-0 d-none d-md-block ms-2">
                        <div id="search" class="menu-search mb-0">
                            <form role="search" method="get" id="searchform" class="searchform">
                                <div>
                                    <input type="text" id="searchbar" class="searchbar form-control border rounded" name="s" id="s"
                                        placeholder="Search Keywords...">
                                    <input type="submit" id="searchsubmit" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="list-unstyled mb-0">
                    <li class="list-inline-item mb-0">
                        <a href="{{ route('profile.show') }}">
                            <div class="btn btn-icon btn-soft-light"><i class="ti ti-settings"></i></div>
                        </a>
                    </li>
                    @auth
                    <li class="list-inline-item mb-0 ms-1 ">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-soft-light dropdown-toggle  p-2"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{
                                Auth::user()->name }}</button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3"
                                style="min-width: 200px;">
                                <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="/">

                                    <div class="flex-1 ms-2">
                                        <span class="d-block">{{ Auth::user()->name }}</span>
                                        <small class="text-white">Email Marketing CRM</small>
                                    </div>
                                </a>
                                <div class="dropdown-divider border-top"></div>
                                <a class="dropdown-item text-dark" href="/"><span
                                        class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span>
                                    Dashboard</a>
                                <a class="dropdown-item text-dark" href="{{ route('profile.show') }}"><span
                                        class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span>
                                    Profile</a>
                                {{-- <a class="dropdown-item text-dark" href="email.html"><span
                                        class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span> Email</a>
                                --}}
                                <div class="dropdown-divider border-top"></div>

                                <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span
                                        class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
           @endauth
            @yield('content')
            <!-- Footer Start -->
            <footer class="shadow py-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-sm-start text-center mx-md-2 text-white">
                                <p class="mb-0">© <script>
                                        document.write(new Date().getFullYear())
                                    </script>Design with <i class="mdi mdi-heart text-danger"></i> by <a
                                        href="https://matechsolutionsbpo.com/" target="_blank"
                                        class="text-reset"><strong>MA Tech Solutions BPO</strong></a>.</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </footer>
            <!--end footer-->
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->


    <!-- javascript -->
    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <!-- Main Js -->
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    @stack('script')
</body>
</html>
