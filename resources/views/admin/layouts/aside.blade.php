  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <!-- End Dashboard Nav -->

          <li class="nav-heading">Pages</li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route("admin-dashboard.category.admin") }}">
                  <i class="bi bi-grid"></i>
                  <span>Categories</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.product.admin') }}">
                  <i class="bi bi-box"></i>
                  <span>Products</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.message.admin') }}">
                  <i class="bi bi-envelope"></i>
                  <span>Messages</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.user.admin') }}">
                  <i class="bi bi-people"></i>
                  <span>Users</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.editors.admin') }}">
                  <i class="bi bi-person"></i>
                  <span>Admins</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.branches.admin') }}">
                  <i class="bi bi-building"></i>
                  <span>Branches</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.customer_s.admin') }}">
                  <i class="bi bi-headset"></i>
                  <span>Customer Service</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.shepping.admin') }}">
                  <i class="bi bi-truck"></i>
                  <span>Shepping</span>
              </a>
          </li>

      </ul>

  </aside><!-- End Sidebar-->

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
<hr>

