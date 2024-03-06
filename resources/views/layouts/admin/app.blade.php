<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - {{ env('APP_NAME') }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('app-theme-resources/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('app-theme-resources/assets/vendor/fonts/boxicons.css') }}" />
    <script src="{{ asset('app-theme-resources/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('app-theme-resources/assets/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('app-theme-resources/assets/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('app-theme-resources/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('app-theme-resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('app-theme-resources/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('app-theme-resources/assets/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('app-theme-resources/assets/js/config.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('styles')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <x-admin.sidebar></x-admin.sidebar>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="nav-item d-flex align-items-center"
                            style="gap: 15px;font-size: 25px;font-weight: 700;">
                            <i class="bx bxs-book-content" style="font-size: 25px;"></i>
                            <p style="margin: 0;">@yield('page_heading')</p>
                        </div>

                        <ul class="navbar-nav flex-row align-items-center ms-auto">


                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('app-theme-resources/assets/img/avatars/1.png') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('app-theme-resources/assets/img/avatars/1.png') }}"
                                                            alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                                    <small
                                                        class="text-muted">{{ auth()->user()->name }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.edit', auth()->user()->id) }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>

                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="dropdown-item" type="submit">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('content')

                </div>
                {{--  Content Wrapper --}}


                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
            </div>
            <!-- / Layout wrapper -->


            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->

            <script src="{{ asset('app-theme-resources/assets/vendor/libs/popper/popper.js') }}"></script>
            <script src="{{ asset('app-theme-resources/assets/vendor/js/bootstrap.js') }}"></script>
            <script src="{{ asset('app-theme-resources/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

            <script src="{{ asset('app-theme-resources/assets/vendor/js/menu.js') }}"></script>
            <!-- endbuild -->

            <!-- Vendors JS -->
            <script src="{{ asset('app-theme-resources/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

            <!-- Main JS -->
            <script src="{{ asset('app-theme-resources/assets/js/main.js') }}"></script>

            <!-- Page JS -->
            <script src="{{ asset('app-theme-resources/assets/js/dashboards-analytics.js') }}"></script>

            <!-- Place this tag in your head or just before your close body tag. -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>

            <script>
                $(document).ready(function() {
                    $("#become-distributor-selectbox").on("change", function() {
                        $("#become-distributor-form").submit();
                    })
                });
            </script>

            {{-- Custom Scripts --}}
            @yield('scripts')
</body>

</html>
