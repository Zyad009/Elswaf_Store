@include('front.layouts.header')

<body>
  <div class="page-wrapper">
    <header class="header header-6">
      @include('front.layouts.head')
      @include('front.layouts.nav')
      @include('sweetalert::alert')

    </header><!-- End .header -->
    
    @yield('content.front')
  </div>
  @include('front.layouts.footer')
  
</body>

</html>