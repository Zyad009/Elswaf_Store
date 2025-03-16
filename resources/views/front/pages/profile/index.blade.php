{{-- @extends("front.layouts.app")
@section("content.front") --}}
    
<!-- Vendor Styles -->

<!-- Page Styles -->

<!-- Vendor Scripts -->

<!-- Page Scripts -->


<!DOCTYPE html>

<html lang="en" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed     " dir="ltr" data-theme="theme-default" data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/" data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" data-framework="laravel" data-template="vertical-menu-theme-default-light" data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>User Profile - Profile |
    sneat -
    Bootstrap Dashboard PRO
  </title>
  <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="hHSuMnWQhYdUoZvzSOodCR0iVQg0cR6736HIofp1">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />


  <!-- Include Styles -->
  <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/boxicons-DtPkwNNx.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/fontawesome-Bbl7TKTs.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/flag-icons-DD6KTbGa.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/boxicons-DtPkwNNx.css" class="" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/fontawesome-Bbl7TKTs.css" class="" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/flag-icons-DD6KTbGa.css" class="" /><!-- Core CSS -->
<link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/core-CJ3e866c.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/theme-default-BDdRDG98.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/demo-1L0brNjh.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/core-CJ3e866c.css" class="template-customizer-core-css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/theme-default-BDdRDG98.css" class="template-customizer-theme-css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/demo-1L0brNjh.css" class="" />

<!-- Vendor Styles -->
<link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-DV9C03Ep.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/typeahead-B97Oe7at.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-DV9C03Ep.css" class="" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/typeahead-B97Oe7at.css" class="" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-3iq49qik.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/responsive-nt6KEQp3.css" /><link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-ByyroHBC.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-3iq49qik.css" class="" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/responsive-nt6KEQp3.css" class="" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-ByyroHBC.css" class="" />
<!-- Page Styles -->
<link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/page-profile-DGJUU4eb.css" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/page-profile-DGJUU4eb.css" class="" />
  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
  <!-- laravel style -->
<link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/helpers-vQTkHFGf.js" /><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/helpers-vQTkHFGf.js"></script><!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <link rel="preload" as="style" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/template-customizer-DZJDgwzD.css" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/template-customizer-FFhF0JVE.js" /><link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/template-customizer-DZJDgwzD.css" /><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/template-customizer-FFhF0JVE.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/config-CAKiYqcg.js" /><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/config-CAKiYqcg.js"></script>
<script type="module">
  window.templateCustomizer = new TemplateCustomizer({
    cssPath: '',
    themesPath: '',
    defaultStyle: "light",
    defaultShowDropdownOnHover: "1", // true/false (for horizontal layout only)
    displayCustomizer: "1",
    lang: 'en',
    pathResolver: function(path) {
      var resolvedPaths = {
        // Core stylesheets
                  'core.scss': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/core-CJ3e866c.css',
          'core-dark.scss': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/core-dark-ChaG_aud.css',
        
        // Themes
                  'theme-default.scss': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/theme-default-BDdRDG98.css',
          'theme-default-dark.scss': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/theme-default-dark-D2iqss1w.css',
                  'theme-bordered.scss': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/theme-bordered-BrWDfhG2.css',
          'theme-bordered-dark.scss': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/theme-bordered-dark-DOu2D5aG.css',
                  'theme-semi-dark.scss': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/theme-semi-dark-DhJ0hdki.css',
          'theme-semi-dark-dark.scss': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/theme-semi-dark-dark-DHDVl4RN.css',
              }
      return resolvedPaths[path] || path;
    },
    'controls': ["rtl","style","headerType","contentLayout","layoutCollapsed","layoutNavbarOptions","themes"],
  });
</script>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5DDHKGP'); </script>
</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>

  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
      <div class="app-brand demo">
      <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="app-brand-link">
        <span class="app-brand-logo demo"><svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
    <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
    <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
    <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
  </defs>
  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
      <g id="Icon" transform="translate(27.000000, 15.000000)">
        <g id="Mask" transform="translate(0.000000, 8.000000)">
          <mask id="mask-2" fill="white">
            <use xlink:href="#path-1"></use>
          </mask>
          <use fill="var(--bs-primary)" xlink:href="#path-1"></use>
          <g id="Path-3" mask="url(#mask-2)">
            <use fill="var(--bs-primary)" xlink:href="#path-3"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
          </g>
          <g id="Path-4" mask="url(#mask-2)">
            <use fill="var(--bs-primary)" xlink:href="#path-4"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
          </g>
        </g>
        <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
          <use fill="var(--bs-primary)" xlink:href="#path-5"></use>
          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
        </g>
      </g>
    </g>
  </g>
</svg>
</span>
        <span class="app-brand-text demo menu-text fw-bold ms-2">sneat</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
      </a>
    </div>
  
  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-home-smile"></i>
                    <div>Dashboards</div>
                      <div class="badge bg-danger rounded-pill ms-auto">5</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="menu-link" >
                    <div>Analytics</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/dashboard/crm" class="menu-link" >
                    <div>CRM</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/dashboard" class="menu-link" >
                    <div>eCommerce</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/logistics/dashboard" class="menu-link" >
                    <div>Logistics</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/academy/dashboard" class="menu-link" >
                    <div>Academy</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-layout"></i>
                    <div>Layouts</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/collapsed-menu" class="menu-link" >
                    <div>Collapsed menu</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/content-navbar" class="menu-link" >
                    <div>Content navbar</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/content-nav-sidebar" class="menu-link" >
                    <div>Content nav + Sidebar</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/horizontal" class="menu-link"  target="_blank" >
                    <div>Horizontal</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/without-menu" class="menu-link" >
                    <div>Without menu</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/without-navbar" class="menu-link" >
                    <div>Without navbar</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/fluid" class="menu-link" >
                    <div>Fluid</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/container" class="menu-link" >
                    <div>Container</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/blank" class="menu-link"  target="_blank" >
                    <div>Blank</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-store"></i>
                    <div>Front Pages</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/front-pages/landing" class="menu-link"  target="_blank" >
                    <div>Landing</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/front-pages/pricing" class="menu-link"  target="_blank" >
                    <div>Pricing</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/front-pages/payment" class="menu-link"  target="_blank" >
                    <div>Payment</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/front-pages/checkout" class="menu-link"  target="_blank" >
                    <div>Checkout</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/front-pages/help-center" class="menu-link"  target="_blank" >
                    <div>Help Center</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bxl-php"></i>
                    <div>Laravel Example</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/laravel/user-management" class="menu-link" >
                    <div>User Management</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
              <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Pages</span>
        </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/email" class="menu-link" >
                      <i class="menu-icon tf-icons bx bx-envelope"></i>
                    <div>Email</div>
                  </a>

        
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/chat" class="menu-link" >
                      <i class="menu-icon tf-icons bx bx-chat"></i>
                    <div>Chat</div>
                  </a>

        
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/calendar" class="menu-link" >
                      <i class="menu-icon tf-icons bx bx-calendar"></i>
                    <div>Calendar</div>
                  </a>

        
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/kanban" class="menu-link" >
                      <i class="menu-icon tf-icons bx bx-grid"></i>
                    <div>Kanban</div>
                  </a>

        
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-cart-alt"></i>
                    <div>eCommerce</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/dashboard" class="menu-link" >
                    <div>Dashboard</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Products</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/product/list" class="menu-link" >
                    <div>Product List</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/product/add" class="menu-link" >
                    <div>Add Product</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/product/category" class="menu-link" >
                    <div>Category List</div>
                  </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Order</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/order/list" class="menu-link" >
                    <div>Order List</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/order/details" class="menu-link" >
                    <div>Order Details</div>
                  </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Customer</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/all" class="menu-link" >
                    <div>All Customers</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Customer Details</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview" class="menu-link" >
                    <div>Overview</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/security" class="menu-link" >
                    <div>Security</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/billing" class="menu-link" >
                    <div>Address &amp; Billing</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/notifications" class="menu-link" >
                    <div>Notifications</div>
                  </a>

        
              </li>
      </ul>
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/manage/reviews" class="menu-link" >
                    <div>Manage Reviews</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/referrals" class="menu-link" >
                    <div>Referrals</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Settings</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/settings/details" class="menu-link" >
                    <div>Store details</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/settings/payments" class="menu-link" >
                    <div>Payments</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/settings/checkout" class="menu-link" >
                    <div>Checkout</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/settings/shipping" class="menu-link" >
                    <div>Shipping &amp; Delivery</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/settings/locations" class="menu-link" >
                    <div>Locations</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/settings/notifications" class="menu-link" >
                    <div>Notifications</div>
                  </a>

        
              </li>
      </ul>
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-book-open"></i>
                    <div>Academy</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/academy/dashboard" class="menu-link" >
                    <div>Dashboard</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/academy/course" class="menu-link" >
                    <div>My Course</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/academy/course-details" class="menu-link" >
                    <div>Course Details</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-car"></i>
                    <div>Logistics</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/logistics/dashboard" class="menu-link" >
                    <div>Dashboard</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/logistics/fleet" class="menu-link" >
                    <div>Fleet</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-food-menu"></i>
                    <div>Invoice</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/list" class="menu-link" >
                    <div>List</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/preview" class="menu-link" >
                    <div>Preview</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/edit" class="menu-link" >
                    <div>Edit</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/add" class="menu-link" >
                    <div>Add</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-user"></i>
                    <div>Users</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/list" class="menu-link" >
                    <div>List</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>View</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account" class="menu-link" >
                    <div>Account</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/security" class="menu-link" >
                    <div>Security</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/billing" class="menu-link" >
                    <div>Billing &amp; Plans</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/notifications" class="menu-link" >
                    <div>Notifications</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/connections" class="menu-link" >
                    <div>Connections</div>
                  </a>

        
              </li>
      </ul>
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-check-shield"></i>
                    <div>Roles &amp; Permissions</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/access-roles" class="menu-link" >
                    <div>Roles</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/access-permission" class="menu-link" >
                    <div>Permission</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item active open">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div>Pages</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item active open">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>User Profile</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item active">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-user" class="menu-link" >
                    <div>Profile</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-teams" class="menu-link" >
                    <div>Teams</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-projects" class="menu-link" >
                    <div>Projects</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-connections" class="menu-link" >
                    <div>Connections</div>
                  </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Account Settings</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-account" class="menu-link" >
                    <div>Account</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-security" class="menu-link" >
                    <div>Security</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-billing" class="menu-link" >
                    <div>Billing &amp; Plans</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-notifications" class="menu-link" >
                    <div>Notifications</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-connections" class="menu-link" >
                    <div>Connections</div>
                  </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/faq" class="menu-link" >
                    <div>FAQ</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/pricing" class="menu-link" >
                    <div>Pricing</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Misc</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/misc-error" class="menu-link"  target="_blank" >
                    <div>Error</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/misc-under-maintenance" class="menu-link"  target="_blank" >
                    <div>Under Maintenance</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/misc-comingsoon" class="menu-link"  target="_blank" >
                    <div>Coming Soon</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/misc-not-authorized" class="menu-link"  target="_blank" >
                    <div>Not Authorized</div>
                  </a>

        
              </li>
      </ul>
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                    <div>Authentications</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Login</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/login-basic" class="menu-link"  target="_blank" >
                    <div>Basic</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/login-cover" class="menu-link"  target="_blank" >
                    <div>Cover</div>
                  </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Register</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/register-basic" class="menu-link"  target="_blank" >
                    <div>Basic</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/register-cover" class="menu-link"  target="_blank" >
                    <div>Cover</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/register-multisteps" class="menu-link"  target="_blank" >
                    <div>Multi-steps</div>
                  </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Verify Email</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/verify-email-basic" class="menu-link"  target="_blank" >
                    <div>Basic</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/verify-email-cover" class="menu-link"  target="_blank" >
                    <div>Cover</div>
                  </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Reset Password</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/reset-password-basic" class="menu-link"  target="_blank" >
                    <div>Basic</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/reset-password-cover" class="menu-link"  target="_blank" >
                    <div>Cover</div>
                  </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Forgot Password</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/forgot-password-basic" class="menu-link"  target="_blank" >
                    <div>Basic</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/forgot-password-cover" class="menu-link"  target="_blank" >
                    <div>Cover</div>
                  </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Two Steps</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/two-steps-basic" class="menu-link"  target="_blank" >
                    <div>Basic</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/two-steps-cover" class="menu-link"  target="_blank" >
                    <div>Cover</div>
                  </a>

        
              </li>
      </ul>
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                    <div>Wizard Examples</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/wizard/ex-checkout" class="menu-link" >
                    <div>Checkout</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/wizard/ex-property-listing" class="menu-link" >
                    <div>Property Listing</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/wizard/ex-create-deal" class="menu-link" >
                    <div>Create Deal</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/modal-examples" class="menu-link" >
                      <i class="menu-icon tf-icons bx bx-window-open"></i>
                    <div>Modal Examples</div>
                  </a>

        
              </li>
          
      

      
              <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Components</span>
        </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-collection"></i>
                    <div>Cards</div>
                      <div class="badge bg-primary rounded-pill ms-auto">6</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/basic" class="menu-link" >
                    <div>Basic</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/advance" class="menu-link" >
                    <div>Advance</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/statistics" class="menu-link" >
                    <div>Statistics</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/analytics" class="menu-link" >
                    <div>Analytics</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/gamifications" class="menu-link" >
                    <div>Gamifications</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/cards/actions" class="menu-link" >
                    <div>Actions</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-box"></i>
                    <div>User interface</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/accordion" class="menu-link" >
                    <div>Accordion</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/alerts" class="menu-link" >
                    <div>Alerts</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/badges" class="menu-link" >
                    <div>Badges</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/buttons" class="menu-link" >
                    <div>Buttons</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/carousel" class="menu-link" >
                    <div>Carousel</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/collapse" class="menu-link" >
                    <div>Collapse</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/dropdowns" class="menu-link" >
                    <div>Dropdowns</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/footer" class="menu-link" >
                    <div>Footer</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/list-groups" class="menu-link" >
                    <div>List Groups</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/modals" class="menu-link" >
                    <div>Modals</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/navbar" class="menu-link" >
                    <div>Navbar</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/offcanvas" class="menu-link" >
                    <div>Offcanvas</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/pagination-breadcrumbs" class="menu-link" >
                    <div>Pagination &amp; Breadcrumbs</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/progress" class="menu-link" >
                    <div>Progress</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/spinners" class="menu-link" >
                    <div>Spinners</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/tabs-pills" class="menu-link" >
                    <div>Tabs &amp; Pills</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/toasts" class="menu-link" >
                    <div>Toasts</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/tooltips-popovers" class="menu-link" >
                    <div>Tooltips &amp; Popovers</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ui/typography" class="menu-link" >
                    <div>Typography</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-copy"></i>
                    <div>Extended UI</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-avatar" class="menu-link" >
                    <div>Avatar</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-blockui" class="menu-link" >
                    <div>BlockUI</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-drag-and-drop" class="menu-link" >
                    <div>Drag &amp; Drop</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-media-player" class="menu-link" >
                    <div>Media Player</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-perfect-scrollbar" class="menu-link" >
                    <div>Perfect Scrollbar</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-star-ratings" class="menu-link" >
                    <div>Star Ratings</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-sweetalert2" class="menu-link" >
                    <div>SweetAlert2</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-text-divider" class="menu-link" >
                    <div>Text Divider</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Timeline</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-timeline-basic" class="menu-link" >
                    <div>Basic</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-timeline-fullscreen" class="menu-link" >
                    <div>Fullscreen</div>
                  </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-tour" class="menu-link" >
                    <div>Tour</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-treeview" class="menu-link" >
                    <div>Treeview</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/extended/ui-misc" class="menu-link" >
                    <div>Miscellaneous</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-crown"></i>
                    <div>Icons</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/icons/boxicons" class="menu-link" >
                    <div>Boxicons</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/icons/font-awesome" class="menu-link" >
                    <div>Fontawesome</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
              <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Forms &amp; Tables</span>
        </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div>Form Elements</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/basic-inputs" class="menu-link" >
                    <div>Basic Inputs</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/input-groups" class="menu-link" >
                    <div>Input groups</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/custom-options" class="menu-link" >
                    <div>Custom Options</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/editors" class="menu-link" >
                    <div>Editors</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/file-upload" class="menu-link" >
                    <div>File Upload</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/pickers" class="menu-link" >
                    <div>Pickers</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/selects" class="menu-link" >
                    <div>Select &amp; Tags</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/sliders" class="menu-link" >
                    <div>Sliders</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/switches" class="menu-link" >
                    <div>Switches</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/extras" class="menu-link" >
                    <div>Extras</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-detail"></i>
                    <div>Form Layouts</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/layouts-vertical" class="menu-link" >
                    <div>Vertical Form</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/layouts-horizontal" class="menu-link" >
                    <div>Horizontal Form</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/layouts-sticky" class="menu-link" >
                    <div>Sticky Actions</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-carousel"></i>
                    <div>Form Wizard</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/wizard-numbered" class="menu-link" >
                    <div>Numbered</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/wizard-icons" class="menu-link" >
                    <div>Icons</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/form/validation" class="menu-link" >
                      <i class="menu-icon tf-icons bx bx-list-check"></i>
                    <div>Form Validation</div>
                  </a>

        
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/tables/basic" class="menu-link" >
                      <i class="menu-icon tf-icons bx bx-table"></i>
                    <div>Tables</div>
                  </a>

        
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-grid"></i>
                    <div>Datatables</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/tables/datatables-basic" class="menu-link" >
                    <div>Basic</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/tables/datatables-advanced" class="menu-link" >
                    <div>Advanced</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/tables/datatables-extensions" class="menu-link" >
                    <div>Extensions</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
              <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Charts &amp; Maps</span>
        </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="javascript:void(0);" class="menu-link menu-toggle" >
                      <i class="menu-icon tf-icons bx bx-chart"></i>
                    <div>Charts</div>
                  </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/charts/apex" class="menu-link" >
                    <div>Apex Charts</div>
                  </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/charts/chartjs" class="menu-link" >
                    <div>ChartJS</div>
                  </a>

        
              </li>
      </ul>
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/maps/leaflet" class="menu-link" >
                      <i class="menu-icon tf-icons bx bx-map-alt"></i>
                    <div>Leaflet Maps</div>
                  </a>

        
              </li>
          
      

      
              <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Misc</span>
        </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="https://themeselection.com/support/" class="menu-link"  target="_blank" >
                      <i class="menu-icon tf-icons bx bx-support"></i>
                    <div>Support</div>
                  </a>

        
              </li>
          
      

      
      
      
      
      
      <li class="menu-item ">
        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html" class="menu-link"  target="_blank" >
                      <i class="menu-icon tf-icons bx bx-file"></i>
                    <div>Documentation</div>
                  </a>

        
              </li>
            </ul>

</aside>
    

    <!-- Layout page -->
    <div class="layout-page">

      
      

      <!-- BEGIN: Navbar-->
            <!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

      <!--  Brand demo (display only for navbar-full and hide on below xl) -->
      
      <!-- ! Not required for layout-without-menu -->
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0  d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
          <i class="bx bx-menu bx-md"></i>
        </a>
      </div>
      
      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
              <i class="bx bx-search bx-md"></i>
              <span class="d-none d-md-inline-block text-muted fw-normal ms-4">Search (Ctrl+/)</span>
            </a>
          </div>
        </div>
        <!-- /Search -->
        
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        
        <!-- Language -->
        <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class='bx bx-globe bx-md'></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item active" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/lang/en" data-language="en" data-text-direction="ltr">
                <span>English</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item " href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/lang/fr" data-language="fr" data-text-direction="ltr">
                <span>French</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item " href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/lang/ar" data-language="ar" data-text-direction="rtl">
                <span>Arabic</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item " href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/lang/de" data-language="de" data-text-direction="ltr">
                <span>German</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Language -->

                <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='bx bx-md'></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span><i class='bx bx-sun bx-md me-3'></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span><i class="bx bx-moon bx-md me-3"></i>Dark</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                  <span><i class="bx bx-desktop bx-md me-3"></i>System</span>
                </a>
              </li>
            </ul>
          </li>
        <!--/ Style Switcher -->
        
        <!-- Quick links  -->
        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class='bx bx-grid-alt bx-md'></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end p-0">
            <div class="dropdown-menu-header border-bottom">
              <div class="dropdown-header d-flex align-items-center py-3">
                <h6 class="mb-0 me-auto">Shortcuts</h6>
                <a href="javascript:void(0)" class="dropdown-shortcuts-add py-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="bx bx-plus-circle text-heading"></i></a>
              </div>
            </div>
            <div class="dropdown-shortcuts-list scrollable-container">
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                    <i class="bx bx-calendar bx-26px text-heading"></i>
                  </span>
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/calendar" class="stretched-link">Calendar</a>
                  <small>Appointments</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                    <i class="bx bx-food-menu bx-26px text-heading"></i>
                  </span>
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/invoice/list" class="stretched-link">Invoice App</a>
                  <small>Manage Accounts</small>
                </div>
              </div>
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                    <i class="bx bx-user bx-26px text-heading"></i>
                  </span>
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/list" class="stretched-link">User App</a>
                  <small>Manage Users</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                    <i class="bx bx-check-shield bx-26px text-heading"></i>
                  </span>
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/access-roles" class="stretched-link">Role Management</a>
                  <small>Permission</small>
                </div>
              </div>
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                    <i class="bx bx-pie-chart-alt-2 bx-26px text-heading"></i>
                  </span>
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="stretched-link">Dashboard</a>
                  <small>User Dashboard</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                    <i class="bx bx-cog bx-26px text-heading"></i>
                  </span>
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-account" class="stretched-link">Setting</a>
                  <small>Account Settings</small>
                </div>
              </div>
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                    <i class="bx bx-help-circle bx-26px text-heading"></i>
                  </span>
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/faq" class="stretched-link">FAQs</a>
                  <small>FAQs & Articles</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                    <i class="bx bx-window-open bx-26px text-heading"></i>
                  </span>
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/modal-examples" class="stretched-link">Modals</a>
                  <small>Useful Popups</small>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- Quick links -->

        <!-- Notification -->
        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <span class="position-relative">
              <i class="bx bx-bell bx-md"></i>
              <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end p-0">
            <li class="dropdown-menu-header border-bottom">
              <div class="dropdown-header d-flex align-items-center py-3">
                <h6 class="mb-0 me-auto">Notification</h6>
                <div class="d-flex align-items-center h6 mb-0">
                  <span class="badge bg-label-primary me-2">8 New</span>
                  <a href="javascript:void(0)" class="dropdown-notifications-all p-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx bx-envelope-open text-heading"></i></a>
                </div>
              </div>
            </li>
            <li class="dropdown-notifications-list scrollable-container">
              <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt class="rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="small mb-0">Congratulation Lettie 🎉</h6>
                      <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="small mb-0">Charles Franklin</h6>
                      <small class="mb-1 d-block text-body">Accepted your connection</small>
                      <small class="text-muted">12hr ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt class="rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="small mb-0">New Message ✉️</h6>
                      <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="small mb-0">Whoo! You have new order 🛒 </h6>
                      <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                      <small class="text-muted">1 day ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png" alt class="rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="small mb-0">Application has been approved 🚀 </h6>
                      <small class="mb-1 d-block text-body">Your ABC project application has been approved.</small>
                      <small class="text-muted">2 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="small mb-0">Monthly report is generated</h6>
                      <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt class="rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="small mb-0">Send connection request</h6>
                      <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                      <small class="text-muted">4 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt class="rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="small mb-0">New message from Jane</h6>
                      <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                      <small class="text-muted">5 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="small mb-0">CPU is running high</h6>
                      <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                      <small class="text-muted">5 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="border-top">
              <div class="d-grid p-4">
                <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                  <small class="align-middle">View all notifications</small>
                </a>
              </div>
            </li>
          </ul>
        </li>
        <!--/ Notification -->

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-user">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="mb-0">
                                            John Doe
                                          </h6>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider my-1"></div>
            </li>
            <li>
              <a class="dropdown-item" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-user">
                <i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
              </a>
            </li>
                        <li>
              <a class="dropdown-item" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/account-settings-billing">
                <span class="d-flex align-items-center align-middle">
                  <i class="flex-shrink-0 bx bx-credit-card bx-md me-3"></i><span class="flex-grow-1 align-middle">Billing Plan</span>
                  <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                </span>
              </a>
            </li>
                        <li>
              <div class="dropdown-divider my-1"></div>
            </li>
                        <li>
              <a class="dropdown-item" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/login-basic">
                <i class='bx bx-log-in bx-md me-3'></i><span>Login</span>
              </a>
            </li>
                      </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper  d-none">
      <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
      <i class="bx bx-x bx-md search-toggler cursor-pointer"></i>
    </div>
    </nav>
<!-- / Navbar -->
            <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-6">
      <div class="user-profile-header-banner">
        <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top">
      </div>
      <div class="user-profile-header d-flex flex-column flex-lg-row text-sm-start text-center mb-8">
        <div class="flex-shrink-0 mt-1 mx-sm-0 mx-auto">
          <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-6 rounded-3 user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-lg-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4 class="mb-2 mt-lg-7">John Doe</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4 mt-4">
                <li class="list-inline-item">
                  <i class='bx bx-palette me-2 align-top'></i><span class="fw-medium">UX Designer</span>
                </li>
                <li class="list-inline-item">
                  <i class='bx bx-map me-2 align-top'></i><span class="fw-medium">Vatican City</span>
                </li>
                <li class="list-inline-item">
                  <i class='bx bx-calendar me-2 align-top'></i><span class="fw-medium"> Joined April 2021</span>
                </li>
              </ul>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary mb-1">
              <i class='bx bx-user-check bx-sm me-2'></i>Connected
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<div class="row">
  <div class="col-md-12">
    <div class="nav-align-top">
      <ul class="nav nav-pills flex-column flex-sm-row mb-6">
        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class='bx bx-user bx-sm me-1_5'></i> Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-teams"><i class='bx bx-group bx-sm me-1_5'></i> Teams</a></li>
        <li class="nav-item"><a class="nav-link" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-projects"><i class='bx bx-grid-alt bx-sm me-1_5'></i> Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/pages/profile-connections"><i class='bx bx-link bx-sm me-1_5'></i> Connections</a></li>
      </ul>
    </div>
  </div>
</div>
<!--/ Navbar pills -->

<!-- User Profile Content -->
<div class="row">
  <div class="col-xl-4 col-lg-5 col-md-5">
    <!-- About User -->
    <div class="card mb-6">
      <div class="card-body">
        <small class="card-text text-uppercase text-muted small">About</small>
        <ul class="list-unstyled my-3 py-1">
          <li class="d-flex align-items-center mb-4"><i class="bx bx-user"></i><span class="fw-medium mx-2">Full Name:</span> <span>John Doe</span></li>
          <li class="d-flex align-items-center mb-4"><i class="bx bx-check"></i><span class="fw-medium mx-2">Status:</span> <span>Active</span></li>
          <li class="d-flex align-items-center mb-4"><i class="bx bx-crown"></i><span class="fw-medium mx-2">Role:</span> <span>Developer</span></li>
          <li class="d-flex align-items-center mb-4"><i class="bx bx-flag"></i><span class="fw-medium mx-2">Country:</span> <span>USA</span></li>
          <li class="d-flex align-items-center mb-2"><i class="bx bx-detail"></i><span class="fw-medium mx-2">Languages:</span> <span>English</span></li>
        </ul>
        <small class="card-text text-uppercase text-muted small">Contacts</small>
        <ul class="list-unstyled my-3 py-1">
          <li class="d-flex align-items-center mb-4"><i class="bx bx-phone"></i><span class="fw-medium mx-2">Contact:</span> <span>(123) 456-7890</span></li>
          <li class="d-flex align-items-center mb-4"><i class="bx bx-chat"></i><span class="fw-medium mx-2">Skype:</span> <span>john.doe</span></li>
          <li class="d-flex align-items-center mb-4"><i class="bx bx-envelope"></i><span class="fw-medium mx-2">Email:</span> <span>john.doe@example.com</span></li>
        </ul>
        <small class="card-text text-uppercase text-muted small">Teams</small>
        <ul class="list-unstyled mb-0 mt-3 pt-1">
          <li class="d-flex flex-wrap mb-4"><span class="fw-medium me-2">Backend Developer</span><span>(126 Members)</span></li>
          <li class="d-flex flex-wrap">
            <span class="fw-medium me-2">React Developer</span><span>(98 Members)</span>
          </li>
        </ul>
      </div>
    </div>
    <!--/ About User -->
    <!-- Profile Overview -->
    <div class="card mb-6">
      <div class="card-body">
        <small class="card-text text-uppercase text-muted small">Overview</small>
        <ul class="list-unstyled mb-0 mt-3 pt-1">
          <li class="d-flex align-items-center mb-4"><i class="bx bx-check"></i><span class="fw-medium mx-2">Task Compiled:</span> <span>13.5k</span></li>
          <li class="d-flex align-items-center mb-4"><i class="bx bx-star"></i><span class="fw-medium mx-2">Projects Compiled:</span> <span>146</span></li>
          <li class="d-flex align-items-center"><i class="bx bx-user"></i><span class="fw-medium mx-2">Connections:</span> <span>897</span></li>
        </ul>
      </div>
    </div>
    <!--/ Profile Overview -->
  </div>
  <div class="col-xl-8 col-lg-7 col-md-7">
    <!-- Activity Timeline -->
    <div class="card card-action mb-6">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0"><i class='bx bx-bar-chart-alt-2 bx-lg text-body me-4'></i>Activity Timeline</h5>
      </div>
      <div class="card-body pt-3">
        <ul class="timeline mb-0">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">12 Invoices have been paid</h6>
                <small class="text-muted">12 min ago</small>
              </div>
              <p class="mb-2">
                Invoices have been paid to the company
              </p>
              <div class="d-flex align-items-center mb-2">
                <div class="badge bg-lighter rounded d-flex align-items-center">
                  <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/misc/pdf.png" alt="img" width="15" class="me-2">
                  <span class="h6 mb-0 text-body">invoices.pdf</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-success"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">Client Meeting</h6>
                <small class="text-muted">45 min ago</small>
              </div>
              <p class="mb-2">
                Project meeting with john @10:15am
              </p>
              <div class="d-flex justify-content-between flex-wrap gap-2 mb-2">
                <div class="d-flex flex-wrap align-items-center mb-50">
                  <div class="avatar avatar-sm me-3">
                    <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                  </div>
                  <div>
                    <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                    <small>CEO of ThemeSelection</small>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-info"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-3">
                <h6 class="mb-0">Create a new project for client</h6>
                <small class="text-muted">2 Day Ago</small>
              </div>
              <p class="mb-2">
                6 team members in a project
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="rounded-circle" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar pull-up">
                        <img class="rounded-circle" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/4.png" alt="Avatar" />
                      </li>
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar pull-up">
                        <img class="rounded-circle" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt="Avatar" />
                      </li>
                      <li class="avatar">
                        <span class="avatar-initial rounded-circle pull-up text-heading" data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!--/ Activity Timeline -->
    <div class="row">
      <!-- Connections -->
      <div class="col-lg-12 col-xl-6">
        <div class="card card-action mb-6">
          <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Connections</h5>
            <div class="card-action-element">
              <div class="dropdown">
                <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow p-0 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded bx-md text-muted"></i></button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">Share connections</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-0">Cecilia Payne</h6>
                      <small>45 Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-label-primary btn-icon"><i class="bx bx-user-check bx-md"></i></button>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-0">Curtis Fletcher</h6>
                      <small>1.32k Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-primary btn-icon"><i class="bx bx-user-x bx-md"></i></button>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-0">Alice Stone</h6>
                      <small>125 Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-primary btn-icon"><i class="bx bx-user-x bx-md"></i></button>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-0">Darrell Barnes</h6>
                      <small>456 Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-label-primary btn-icon"><i class="bx bx-user-check bx-md"></i></button>
                  </div>
                </div>
              <li class="mb-6">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-0">Eugenia Moore</h6>
                      <small>1.2k Connections</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <button class="btn btn-label-primary btn-icon"><i class="bx bx-user-check bx-md"></i></button>
                  </div>
                </div>
              </li>
              <li class="text-center">
                <a href="javascript:;">View all connections</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Connections -->
      <!-- Teams -->
      <div class="col-lg-12 col-xl-6">
        <div class="card card-action mb-6">
          <div class="card-header align-items-center">
            <h5 class="card-action-title mb-0">Teams</h5>
            <div class="card-action-element">
              <div class="dropdown">
                <button type="button" class="btn btn-icon btn-text-secondary dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded bx-md text-muted"></i></button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="javascript:void(0);">Share teams</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/react-label.png" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-0">React Developers</h6>
                      <small>72 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/support-label.png" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-0">Support Team</h6>
                      <small>122 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-primary">Support</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/figma-label.png" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-0">UI Designers</h6>
                      <small>7 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-info">Designer</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-4">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/vue-label.png" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-2">
                      <h6 class="mb-0">Vue.js Developers</h6>
                      <small>289 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
                  </div>
                </div>
              </li>
              <li class="mb-6">
                <div class="d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/icons/brands/twitter-label.png" alt="Avatar" class="rounded-circle" />
                    </div>
                    <div class="me-w">
                      <h6 class="mb-0">Digital Marketing</h6>
                      <small>24 Members</small>
                    </div>
                  </div>
                  <div class="ms-auto">
                    <a href="javascript:;"><span class="badge bg-label-secondary">Marketing</span></a>
                  </div>
                </div>
              </li>
              <li class="text-center">
                <a href="javascript:;">View all teams</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ Teams -->
    </div>
    <!-- Projects table -->
    <div class="card mb-6">
      <h5 class="card-header pb-0 text-sm-start text-center">Projects List</h5>
      <div class="table-responsive mb-4">
        <table class="table datatable-project">
          <thead class="border-top">
            <tr>
              <th></th>
              <th></th>
              <th>Project</th>
              <th>Leader</th>
              <th>Team</th>
              <th class="w-px-200">Progress</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!--/ Projects table -->
  </div>
</div>
<!--/ User Profile Content -->

          </div>
          <!-- / Content -->

          <!-- Footer -->
                    <!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
      <div class="text-body">
        © <script>document.write(new Date().getFullYear())</script>, made with ❤️ by <a href="https://themeselection.com" target="_blank" class="footer-link">ThemeSelection</a>
      </div>
      <div class="d-none d-lg-inline-block">
        <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
        <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html" target="_blank" class="footer-link me-4">Documentation</a>
        <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
      </div>
    </div>
  </div>
</footer>
<!--/ Footer-->
                    <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

        <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
    <!--/ Layout Content -->

  
  <div class="buy-now">
    <a href="https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>
  

  <!-- Include Scripts -->
  <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->

<link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CbdDuLi-.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CED9k22g.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/_commonjsHelpers-BosuxZz1.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-Czc5UB_B.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/popper-DNZnuk_L.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap-B-W6M1Y3.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-CLUWhEAQ.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/hammer-DbFOON0O.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/typeahead-BKwBoP4T.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/menu-DAPneovL.js" /><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CbdDuLi-.js"></script><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/popper-DNZnuk_L.js"></script><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap-B-W6M1Y3.js"></script><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-CLUWhEAQ.js"></script><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/hammer-DbFOON0O.js"></script><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/typeahead-BKwBoP4T.js"></script><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/menu-DAPneovL.js"></script>
<link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-bootstrap5-APQrx3vs.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/_commonjsHelpers-BosuxZz1.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/_commonjs-dynamic-modules-TDtrdbi3.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CED9k22g.js" /><link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-Czc5UB_B.js" /><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-bootstrap5-APQrx3vs.js"></script><!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/main-Cg7dUg9J.js" /><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/main-Cg7dUg9J.js"></script>
<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<link rel="modulepreload" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/app-user-view-account-D4yU9rtY.js" /><script type="module" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/app-user-view-account-D4yU9rtY.js"></script><!-- END: Page JS-->

</body>

</html>

{{-- @endsection --}}