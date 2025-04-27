<li class="menu-header small text-uppercase">
  <span class="menu-header-text">Delivery Order Management</span>
</li>
<li class="menu-item {{request()->is('admin-dashboard/category/*') ? " active" : "" }}">
  <a href="{{ route('admin-dashboard.category.all') }}" class="menu-link">
    <i class="menu-icon tf-icons bx bx-send"></i>
    <div>Delivery Orders</div>
  </a>
</li>

