<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get A Glance">
    <meta name="author" content="Get A Glance">

    {{-- Meta --}}
    @stack('prepend-head')
    @stack('addon-head')
    
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/vendor/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/vendor/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/vendor/plugins/jqvmap/jqvmap.min.css">
    
    <!-- DataTables -->
    <link rel="stylesheet" href="/vendor/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/vendor/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/vendor/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="/vendor/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/vendor/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/vendor/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/vendor/plugins/summernote/summernote-bs4.min.css">

    {{-- Style --}}
    @stack('prepend-style')
    @stack('addon-style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('includes.admin.navbar')

    @include('includes.admin.sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('includes.admin.footer')
</div>
    
    @stack('prepend-script')
    @include('includes.admin.script')
    @stack('addon-script')
    
</body>
</html>