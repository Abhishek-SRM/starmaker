<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/extensions/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/tether.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/extensions/shepherd-theme-default.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/file-uploaders/dropzone.css')}}">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<style>
    body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu {
        width: 272px;
    }

    .main-menu.menu-light .navigation>li.active>a {
        background: linear-gradient(118deg,#009FFF, #EC2F4B );
    }
   

</style>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                        Doe</span><span class="user-status">Available</span></div><span><img
                                        class="round" src="app-assets/images/portrait/small/avatar-s-11.jpg"
                                        alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                    href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a
                                    class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My
                                    Inbox</a><a class="dropdown-item" href="app-todo.html"><i
                                        class="feather icon-check-square"></i> Task</a><a class="dropdown-item"
                                    href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="auth-login.html"><i
                                        class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand"
                        href="html/ltr/vertical-menu-template/index.html">
                        {{-- <div class="brand-logo"></div> --}}
                        <h2 class="brand-text mb-0">Starmaker</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item mb-2 mt-2 {{ (request()->is('dashboard')) ? 'active' : '' }}"><a href="{{url('dashboard/')}}"><i class="feather icon-home"></i><span
                            class="menu-title">Dashboard</a>
                </li>
                <li class=" nav-item mb-2 {{ (request()->is('manageuser')) ? 'active' : '' }}"><a href="{{url('manageuser/')}}"><i class="feather icon-user"></i><span class="menu-title"
                            data-i18n="Email">Manage Users</span></a>
                </li>
                <li class=" nav-item mb-2 {{ (request()->is('subscription')) ? 'active' : '' }}"><a href="{{url('subscription/')}}"><i class="feather icon-user-plus"></i><span
                            class="menu-title" data-i18n="Chat">Manage Subscriptions</span></a>
                </li>
                <li class="nav-item has-sub mb-2"><a href="#"><i class="feather icon-check-circle"></i><span class="menu-title" data-i18n="Menu Levels">Coin Pack</span></a>
                    <ul class="menu-content" style="">
                        <li class="is-shown open {{ (request()->is('viewtopup')) ? 'active' : '' }}"><a href="{{url('/viewtopup')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Second Level">View Coin Pack</span></a>
                        </li>
                        <li class="{{ (request()->is('addtopup')) ? 'active' : '' }}"><a href="{{url('/addtopup')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Second Level">Add Coin Pack</span></a>                           
                        </li>
                    </ul>
                </li>
                <li class=" nav-item mb-2"><a href="{{url('updateemp/')}}"><i class="feather icon-music"></i><span
                            class="menu-title" data-i18n="Chat">Manage Songs</span></a>
                </li>
                <li class=" nav-item mb-2"><a href="{{url('updateemp/')}}"><i class="feather icon-credit-card"></i><span
                            class="menu-title" data-i18n="Chat">Manage Payments</span></a>
                </li>
                <li class=" nav-item mb-2"><a href="{{url('updateemp/')}}"><i class="feather icon-bar-chart-2"></i><span
                            class="menu-title" data-i18n="Chat">Analytics</span></a>
                </li>
                <li class=" nav-item mb-2"><a href="{{url('updateemp/')}}"><i class="feather icon-file-text"></i><span
                            class="menu-title" data-i18n="Chat">Reports / Notification</span></a>
                </li>
               

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    @yield('content')

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>



    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/tether.min.js') }}"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/extensions/dropzone.js')}}"></script>
    <!-- END: Page JS-->
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>

</body>
<!-- END: Body-->

</html>
