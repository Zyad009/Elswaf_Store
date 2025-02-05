
@include("admin.layouts.header")


@include("admin.layouts.nav")

@include("admin.layouts.aside")
@include('sweetalert::alert')

@if ($errors->any())
    <script>
        Swal.fire('Error!', 'There was a validation error', 'error');
    </script>
@endif
  {{-- <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div> --}}
    <!-- End Page Title -->

      <!-- Content Wrapper. Contains page content -->
        <section> @yield("admin-content") </section>
  <!-- /.content-wrapper -->

  </main>
  <!-- End #main -->
<body>
  
</body>
@include("admin.layouts.footer")