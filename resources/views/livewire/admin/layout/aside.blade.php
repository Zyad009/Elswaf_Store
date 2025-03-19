
 <ul class="menu-inner py-1" wire:scroll>
  <!-- Dashboard -->
  <li class="menu-item @yield('dashboard-active')">
    <a href="{{ route('admin-home') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-home"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li>

  <!-- Website -->
  <li class="menu-item">
    <a href="{{ route('home') }}" class="menu-link">
      <i class="menu-icon tf-icons bx bx-globe"></i>
      <div data-i18n="Analytics">Website</div>
    </a>
  </li>

  <!-- Account -->
  <li class="menu-item @yield('account-active')">
    <a href="{{ route('admin-dashboard.account') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-user"></i>
      <div data-i18n="Analytics">Account</div>
    </a>
  </li>

  <!-- Settings -->
  <li class="menu-item @yield('settings-active')">
    <a href="{{ route('admin-home') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-cog"></i>
      <div data-i18n="Analytics">Settings</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Categories & Products</span>
  </li>

  <!-- Main Categories -->
  <li class="menu-item @yield('main-categories-active')">
    <a href="{{ route('admin-dashboard.category.all') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-category"></i>
      <div>Main Categories</div>
    </a>
  </li>

  <!-- Subcategories -->
  <li class="menu-item @yield('sub-categories-active')">
    <a href="{{ route('admin-dashboard.subcategory.all') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-list-ul"></i>
      <div>Sub-Categories</div>
    </a>
  </li>

  <!-- Products -->
  <li class="menu-item @yield('products-active')">
    <a href="{{ route('admin-dashboard.product.all') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-box"></i>
      <div>Products</div>
    </a>
  </li>

  <!-- Products -->
  <li class="menu-item @yield('products-active')">
    <a href="{{ route('admin-dashboard.product.all') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-box"></i>
      <div>Products</div>
    </a>
  </li>

  <!-- Products -->
  <li class="menu-item @yield('products-active')">
    <a href="{{ route('admin-dashboard.product.all') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-box"></i>
      <div>Products</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase"><span class="menu-header-text">Management</span></li>

  <!-- Admins -->
  <li class="menu-item @yield('admin-active')">
    <a href="{{ route('admin-dashboard.editors.all') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-shield"></i>
      <div>Admins</div>
    </a>
  </li>

  <!-- Branches -->
  <li class="menu-item @yield('branches-active')">
    <a href="{{ route('admin-dashboard.branches.all') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-building"></i>
      <div>Branches</div>
    </a>
  </li>

  <!-- Customer Services -->
  <li class="menu-item @yield('customer-services-active')">
    <a href="{{ route('admin-dashboard.customer_s.all') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-support"></i>
      <div>Customer Services</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase"><span class="menu-header-text">Users & Messages</span></li>

  <!-- Users -->
  <li class="menu-item @yield('users-active')">
    <a href="{{ route('admin-dashboard.user.admin') }}" class="menu-link" wire:navigate >
      <i class="bi bi-people"></i>
      <div>Users</div>
    </a>
  </li>

  <!-- Messages -->
  <li class="menu-item @yield('messages-active')">
    <a href="{{ route('admin-dashboard.message.admin') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-envelope"></i>
      <div>Messages</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase"><span class="menu-header-text">Shipping</span></li>

  <!-- Cities -->
  <li class="menu-item @yield('cities-active')">
    <a href="{{ route('admin-dashboard.city.all') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-map"></i>
      <div>Cities</div>
    </a>
  </li>

  <!-- Areas -->
  <li class="menu-item @yield('areas-active')">
    <a href="{{ route('admin-dashboard.area.admin') }}" class="menu-link" wire:navigate >
      <i class="menu-icon tf-icons bx bx-map-pin"></i>
      <div>Areas</div>
    </a>
  </li>
</ul> 

{{-- <script>
  document.addEventListener('livewire:navigated', () => {
const aside = document.getElementById('layout-menu');
const scrollPosition = localStorage.getItem('asideScrollPosition');
if (scrollPosition) {
aside.scrollTop = scrollPosition;
}
});

document.addEventListener('livewire:navigating', () => {
const aside = document.getElementById('layout-menu');
localStorage.setItem('asideScrollPosition', aside.scrollTop);
});

document.querySelector('.layout-menu-toggle').addEventListener('click', () => {
const aside = document.getElementById('layout-menu');
aside.classList.toggle('open');
});

window.addEventListener('resize', () => {
const aside = document.getElementById('layout-menu');
aside.classList.remove('open');
});



</script>