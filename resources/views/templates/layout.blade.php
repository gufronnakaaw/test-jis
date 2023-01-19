<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    @include('templates.style')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-text mx-3">Home</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            @if(auth()->user()->role == 'administrator')
            <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item {{ (request()->is('laporan')) ? 'active' : '' }}">
                <a class="nav-link" href="/laporan">
                    <span>Laporan</span></a>
            </li>
            <li class="nav-item {{ (request()->is('pengajuan-jaminan')) ? 'active' : '' }}">
                <a class="nav-link" href="/pengajuan-jaminan">
                    <span>Pengajuan Jaminan</span></a>
            </li>
            <li class="nav-item {{ (request()->is('approval')) ? 'active' : '' }}">
                <a class="nav-link" href="/approval">
                    <span>Approval</span></a>
            </li>
            <li class="nav-item {{ (request()->is('data-jaminan')) ? 'active' : '' }}">
                <a class="nav-link" href="/data-jaminan">
                    <span>Data Jaminan</span></a>
            </li>
            <li class="nav-item {{ (request()->is('data-surety-bond')) ? 'active' : '' }}">
                <a class="nav-link" href="/data-surety-bond">
                    <span>Data Surety Bond</span></a>
            </li>
            <li class="nav-item {{ (request()->is('manajemen-user')) ? 'active' : '' }}">
                <a class="nav-link" href="/manajemen-user">
                    <span>Manajemen User</span></a>
            </li>
            <li class="nav-item {{ (request()->is('setting')) ? 'active' : '' }}">
                <a class="nav-link" href="/setting">
                    <span>Setting</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/logout" onclick="return confirm('are you sure?')">
                    <span>Logout</span></a>
            </li>
            @endif

            @if(auth()->user()->role == 'user_hq')
            <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item {{ (request()->is('laporan')) ? 'active' : '' }}">
                <a class="nav-link" href="/laporan">
                    <span>Laporan</span></a>
            </li>
            <li class="nav-item {{ (request()->is('approval')) ? 'active' : '' }}">
                <a class="nav-link" href="/approval">
                    <span>Approval</span></a>
            </li>
            <li class="nav-item {{ (request()->is('data-jaminan')) ? 'active' : '' }}">
                <a class="nav-link" href="/data-jaminan">
                    <span>Data Jaminan</span></a>
            </li>
            <li class="nav-item {{ (request()->is('data-surety-bond')) ? 'active' : '' }}">
                <a class="nav-link" href="/data-surety-bond">
                    <span>Data Surety Bond</span></a>
            </li>
            <li class="nav-item {{ (request()->is('setting')) ? 'active' : '' }}">
                <a class="nav-link" href="/setting">
                    <span>Setting</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/logout" onclick="return confirm('are you sure?')">
                    <span>Logout</span></a>
            </li>
            @endif

            @if(auth()->user()->role == 'branch_user')
            <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item {{ (request()->is('pengajuan-jaminan')) ? 'active' : '' }}">
                <a class="nav-link" href="/pengajuan-jaminan">
                    <span>Pengajuan Jaminan</span></a>
            </li>

            <li class="nav-item {{ (request()->is('data-jaminan')) ? 'active' : '' }}">
                <a class="nav-link" href="/data-jaminan">
                    <span>Data Jaminan</span></a>
            </li>

            <li class="nav-item {{ (request()->is('setting')) ? 'active' : '' }}">
                <a class="nav-link" href="/setting">
                    <span>Setting</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/logout" onclick="return confirm('are you sure?')">
                    <span>Logout</span></a>
            </li>
            @endif


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{
                                    strtoupper(auth()->user()->name)
                                    }}</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Test JIS</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>

</html>