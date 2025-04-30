<!DOCTYPE html>

<html lang="en" class="light-style" dir="ltr" data-theme="theme-default" data-assets-path="{{asset('admin/assets')}}/"
  data-template="vertical-menu-template-free">

@include('errors.partials.header')
<body>
  <!-- Content -->

  <!-- Error -->
@yield('error-content')
  <!-- /Error -->

@include('errors.partials.scripts')
</body>

</html>