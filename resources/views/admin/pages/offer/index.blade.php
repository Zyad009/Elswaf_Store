@extends('admin.layouts.app')
@section("admin-title" , "Management Offers")
@section("admin-content")

<section class="section dashboard">
  <div class="row g-4">
<div class="col-lg-4 col-md-6 col-12">
  <div class="card info-card sales-card shadow-sm standalone-product">
    <div class="card-body text-center">
      <h5 class="card-title">All Products</h5>
      <h4 class="fw-bold">Without the condition of the category</h4>
      <p class="text-muted small">Edit & Delete & View All & Create</p>
      {{-- <a href="{{ route('shop') }}" class="btn btn-outline-success"> --}}
        <i class="bx bx-list-ul fs-4"></i>
      </a>
    </div>
  </div>
</div>
    
    @forelse ($categories as $category)
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card info-card sales-card shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title">Products for {{ $category->name }}</h5>
          <h4 class="fw-bold">All Products In {{ $category->name }}</h4>
          <p class="text-muted small">Edit & Delete & View All & Create</p>
          {{-- <a href="{{ route('admin-dashboard.offer.product.all.category-products', $category) }}" class="btn btn-primary "> --}}
            <i class="bx bx-list-ul fs-4"></i>
          </a>
        </div>
      </div>
    </div>
    @empty
    <div class="col-12">
      <div class="alert alert-danger text-center" role="alert">
        No Category Found
      </div>
    </div>
    @endforelse
  </div>
</section>
@endsection