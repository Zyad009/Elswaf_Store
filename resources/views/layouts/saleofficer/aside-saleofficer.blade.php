<li class="menu-header small text-uppercase">
  <span class="menu-header-text">Pick-up Order Management</span>
</li>

<li class="menu-item {{request()->routeIs('pickup_orders.index') ? " active" : "" }}">
  <a href="{{ route('pickup_orders.index') }}" class="menu-link">
    <i class="menu-icon tf-icons bx bx-package"></i>
    <div>Pick-up Orders</div>
  </a>
</li>