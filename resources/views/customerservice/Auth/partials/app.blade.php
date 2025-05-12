<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
  data-assets-path="{{asset('admin/assets')}}/" data-template="vertical-menu-template-free">

  @include('customerservice.auth.partials.header')
  
  <body>
    <!-- Content -->
    
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          @include('sweetalert::alert')
          @yield("login-customer_sevice")
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->
@include('customerservice.auth.partials.scripts')
</body>

</html>