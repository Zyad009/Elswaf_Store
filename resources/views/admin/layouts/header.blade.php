<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('admin/img')}}/favicon.png" rel="icon">
  <link href="{{asset('admin/img')}}/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin/vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('admin/vendor')}}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('admin/vendor')}}/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('admin/vendor')}}/quill/quill.snow.css" rel="stylesheet">
  <link href="{{asset('admin/vendor')}}/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{asset('admin/vendor')}}/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('admin/vendor')}}/simple-datatables/style.css" rel="stylesheet">
</style>
  
  <!-- Template Main CSS File -->
  <link href="{{asset('admin/css')}}/style.css" rel="stylesheet">

  @stack("cdn")

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" >

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route("admin-home")}}" class="logo d-flex align-items-center">
        <img src="{{asset('admin/img')}}/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
