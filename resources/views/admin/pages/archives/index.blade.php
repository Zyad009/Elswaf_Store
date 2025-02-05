@extends("admin.layouts.app")

@section("admin-content")
<div class="container mt-4">
    <h2 class="mb-4 text-center">Archived Records</h2>
    <div class="list-group">
        <a href="{{ route('admin-dashboard.category.archive') }}" class="list-group-item list-group-item-action">
            <i class="bi bi-grid"></i> Categories
        </a>
        <a href="{{ route('admin-dashboard.subcategory.archive') }}" class="list-group-item list-group-item-action">
            <i class="bi bi-grid"></i> Sub-Categories
        </a>
        <br>
        <a href="{{ route('admin-dashboard.product.archive') }}" class="list-group-item list-group-item-action">
          <i class="bi bi-box"></i> Products
        </a>
        <br>
        <a href="{{ route('admin-dashboard.editors.archive') }}" class="list-group-item list-group-item-action">
          <i class="bi bi-person"></i> Admins
        </a>
        <a href="{{ route('admin-dashboard.branches.archive') }}" class="list-group-item list-group-item-action">
          <i class="bi bi-building"></i> Branches
        </a>
        <a href="{{ route('admin-dashboard.customer_s.archive') }}" class="list-group-item list-group-item-action">
          <i class="bi bi-headset"></i> Customer Service
        </a>
        <br>
        <a href="{{ route('admin-dashboard.city.archive') }}" class="list-group-item list-group-item-action">
          <i class="bi bi-map-fill"></i> City
        </a>
        <a href="{{ route('admin-dashboard.area.index') }}" class="list-group-item list-group-item-action">
          <i class="bi bi-geo-alt"></i> Area
        </a>
    </div>
</div>
@endsection
