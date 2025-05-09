<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard | 
    @yield("admin-title")
    @yield('saleofficer-title')
    @yield('customerservice-title')
  </title>

  <meta name="description" content="" />
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{asset("admin/assets/img")}}/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{asset("admin/assets/vendor")}}/fonts/boxicons.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <!-- RTL -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{asset("admin/assets/vendor")}}/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{asset("admin/assets/vendor")}}/css/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{asset("admin/assets/css")}}/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{asset("admin/assets/vendor")}}/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="{{asset(path: "admin/assets/vendor")}}/libs/apex-charts/apex-charts.css" />


  <!-- Page CSS -->
@stack("admin-cdn")
  <!-- Helpers -->
  <script src="{{asset("admin/assets/vendor")}}/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{asset("admin/assets/js")}}/config.js"></script>
</head>