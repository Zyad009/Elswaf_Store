
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <!-- End Dashboard Nav -->

          <li class="nav-heading">Pages</li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route("admin-dashboard.category.admin") }}" wire:navigate.hover>
                  <i class="bi bi-grid"></i>
                  <span>Categories</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.product.admin') }}" wire:navigate.hover>
                  <i class="bi bi-box"></i>
                  <span>Products</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.message.admin') }}" wire:navigate.hover>
                  <i class="bi bi-envelope"></i>
                  <span>Messages</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.user.admin') }}" wire:navigate.hover>
                  <i class="bi bi-people"></i>
                  <span>Users</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.editors.admin') }}" wire:navigate.hover>
                  <i class="bi bi-person"></i>
                  <span>Admins</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.branches.admin') }}" wire:navigate.hover>
                  <i class="bi bi-building"></i>
                  <span>Branches</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.customer_s.admin') }}" wire:navigate.hover>
                  <i class="bi bi-headset"></i>
                  <span>Customer Service</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('admin-dashboard.shepping.admin') }}" wire:navigate.hover>
                  <i class="bi bi-truck"></i>
                  <span>Shepping</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route("admin-dashboard.account")}}" wire:navigate.hover>
                  <i class="bi bi-truck"></i>
                  <span>My Account</span>
              </a>
          </li>

      </ul>

  </aside><!-- End Sidebar-->

