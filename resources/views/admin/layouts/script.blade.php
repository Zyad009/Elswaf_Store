  {{-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"></script>
  <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script> --}}
  <!-- Vendor JS Files -->
  <script src="{{ asset('admin/vendor') }}/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('admin/vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('admin/vendor') }}/chart.js/chart.umd.js"></script>
  <script src="{{ asset('admin/vendor') }}/echarts/echarts.min.js"></script>
  <script src="{{ asset('admin/vendor') }}/quill/quill.min.js"></script>
  <script src="{{ asset('admin/vendor') }}/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('admin/vendor') }}/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('admin/vendor') }}/php-email-form/validate.js"></script>
  <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
  <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

  @stack('js')
  <!-- Template Main JS File -->
  <script src="{{ asset('admin/js') }}/main.js"></script>
