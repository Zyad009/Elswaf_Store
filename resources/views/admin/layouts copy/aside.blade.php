  <!-- ======= Sidebar ======= -->
<livewire:admin.layout.aside>
  <!-- End Sidebar-->

  <main id="main" class="main">

<div class="pagetitle d-flex justify-content-between align-items-center">
    <h1>
        <a href="{{ route('admin-home') }}">Dashboard</a>
        <i class="bi bi-gear"></i> ||
        <a href="{{ route('home') }}">My Website</a>
        <i class="bi bi-house"></i>
    </h1>
    <a href="{{ route("admin-dashboard.archives") }}" class="text-dark">
        <i class="bi bi-archive fs-4"></i>
    </a>
</div>


