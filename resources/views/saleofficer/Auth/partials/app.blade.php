<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
  data-assets-path="{{asset('admin/assets')}}/" data-template="vertical-menu-template-free">

  @include('saleofficer.auth.partials.header')
  
  <body>
    <!-- Content -->
    
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          @include('sweetalert::alert')
          @yield("login-sale_officer")
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->
@include('saleofficer.auth.partials.scripts')
</body>

</html>