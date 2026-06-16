
<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid"  data-preloader="disable">
<?php 
    $admin = Auth::guard('admin')->user();
    $name = $admin->name;
?>

<head>

    <meta charset="utf-8" />
    <title>{{ !empty($pageTitle) ? $pageTitle : 'Admin Dashboard | ' . env('APP_NAME') }}</title>    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ env('APP_NAME') }} Dashboard" name="description" />
    <meta content="Oladipo Damilare(KoderiaNG)" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">

    <!-- Layout config Js -->
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        .cke_notifications_area{
            display: none;
        }
        .loading-overlay {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(255,255,255,0.8);
            z-index: 9999;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: 2em;
            color: #333;
            display: flex;
        }

    </style>
    @stack('styles')
</head>

<body>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.all.min.js"])
    <!-- Begin page -->
        <div id="loading-overlay" class="loading-overlay">
            <i class="fa fa-spinner fa-spin"></i>
            <div style="margin-top: 10px;">Loading, please wait...</div>
        </div>
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="{{ env('WEBSITE_URL') }}" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->logo) : null }}" alt="" width="50">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->logo) : null }}" alt="" width="200">
                                    </span>
                                </a>

                                <a href="{{ env('WEBSITE_URL') }}" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->logo) : null }}" alt="" width="50">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->logo) : null }}" alt="" width="200">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>

                        </div>

                        <div class="d-flex align-items-center">

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-toggle="fullscreen">
                                    <i class='bx bx-fullscreen fs-22'></i>
                                </button>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                                    <i class='bx bx-moon fs-22'></i>
                                </button>
                            </div>

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/user-dummy-img.jpg')}}" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ $admin->name }}</span>
                                            <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{ $admin->role }}</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Welcome {{ $admin->name }}!</h6>
                                    <a class="dropdown-item" href="{{ url('/admin/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">@csrf</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="{{url('admin/home')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->favicon) : null }}" alt="" width="50">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->logo) : null }}" alt="" width="150">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="{{ url('admin/home') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->favicon) : null }}" alt="" width="50">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ !empty($pageGlobalData->setting) ? asset($pageGlobalData->setting->logo) : null }}" alt="" width="150">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages"></span></li>

                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                                <a class="nav-link menu-link" href="{{ url('/admin/home') }}">
                                    <i class="mdi mdi-view-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                        

                            <li class="menu-title"><span data-key="t-menu">System Configuration</span></li>
                                <a class="nav-link menu-link" href="{{ url('/admin/siteSettings') }}">
                                    <i class="mdi mdi-cog-outline"></i> <span>Site Settings</span>
                                </a>
                            </li>

                            <li class="menu-title"><span data-key="t-menu">Page Features    </span></li>
                                <a class="nav-link menu-link" href="{{ url('/admin/heroSection') }}">
                                    <i class="mdi mdi-view-carousel"></i> <span>Hero Section</span>
                                </a>
                            </li>
                            

                            


                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages"></span></li>
                            <li class="nav-item mb-3">
                                <a class="nav-link menu-link" href="{{ url('admin/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-power"></i> <span data-key="t-logout">Logout</span>
                                </a>
                            </li> <!-- end Logout Menu -->
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                    @yield('content')

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © {{ env('APP_NAME') }}.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Designed and Developedby Best Tech
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>


    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    {{-- <script src="{{asset('assets/js/plugins.js')}}"></script> --}}
    <!-- form wizard init -->
    <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.2.0/js/dataTables.fixedHeader.min.js"></script>


    <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
        window.addEventListener('load', function() {
            document.getElementById('loading-overlay').style.display = 'none';
        });
    </script>
    <script>
        document.getElementById('copyButton').addEventListener('click', function() {
            // Select the link text
            var link = document.getElementById('myLink');
            var range = document.createRange();
            range.selectNode(link);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
    
            // Copy the selected text to the clipboard
            try {
                document.execCommand('copy');
                alert('Link copied to clipboard');
            } catch (err) {
                console.error('Unable to copy link: ', err);
            }
    
            // Deselect the text
            window.getSelection().removeAllRanges();
        });
    </script> 
    <script>
        // Get the current time
        var currentTime = new Date();
        var currentHour = currentTime.getHours();

        // Define the greeting messages
        var morningGreeting = "Good morning";
        var afternoonGreeting = "Good afternoon";
        var eveningGreeting = "Good evening";

        // Get the DOM element to display the greeting
        var greetingElement = document.getElementById("greeting");

        // Determine the appropriate greeting based on the time of day
        var greeting;
        if (currentHour >= 0 && currentHour < 12) {
            greeting = morningGreeting;
        } else if (currentHour >= 12 && currentHour < 18) {
            greeting = afternoonGreeting;
        } else {
            greeting = eveningGreeting;
        }

        // Display the greeting
        greetingElement.innerHTML = greeting;
    </script>
    <script>
        $(document).ready(function() {
            $('.selectWithSearch').select2();
        });
        $(document).ready(function() {
            $('#selectWithSearch').select2();
        });
        $(document).ready(function() {
            $('.selectRoom').select2();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#buttons-result').DataTable({
                dom: 'Bfrtip',
                pageLength: 20, 
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ], 
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
            });

            $('#buttons-datatables1').DataTable({
                dom: 'Bfrtip',
                pageLength: 20, 
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#buttons-datatables2').DataTable({
                dom: 'Bfrtip',
                pageLength: 20,
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#buttons-datatables3').DataTable({
                dom: 'Bfrtip',
                pageLength: 20,  
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#buttons-datatables4').DataTable({
                dom: 'Bfrtip',
                pageLength: 20,  
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#buttons-datatables5').DataTable({
                dom: 'Bfrtip',
                pageLength: 20, 
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ], 
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#buttons-datatables6').DataTable({
                dom: 'Bfrtip',
                pageLength: 20, 
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ], 
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#buttons-datatables7').DataTable({
                dom: 'Bfrtip',
                pageLength: 20,  
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#buttons-datatables8').DataTable({
                dom: 'Bfrtip',
                pageLength: 20,  
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#buttons-datatables9').DataTable({
                dom: 'Bfrtip',
                pageLength: 20,  
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#buttons-datatables-A').DataTable({
                dom: 'Bfrtip',
                pageLength: 20,  
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#buttons-datatables-B').DataTable({
                dom: 'Bfrtip',
                pageLength: 20,  
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });


            $('#buttons-datatables-C').DataTable({
                dom: 'Bfrtip',
                pageLength: 20,  
                lengthMenu: [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('.exportable-table').each(function() {
                $(this).DataTable({
                    dom: 'Bfrtip',
                    pageLength: 30,
                    lengthMenu: [ [10, 20, 30, 50, -1], [10, 20, 30, 50, "All"] ],
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        });
    </script>
@yield('scripts')
@stack('scripts')
</body>

</html>