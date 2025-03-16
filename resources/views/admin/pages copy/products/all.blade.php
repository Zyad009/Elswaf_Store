@extends('admin.layouts.app')
@section('admin-content')

@push("cdn")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

<div class="card-body">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">All Products</h1>
            <a href="{{ route('admin-dashboard.product.new') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Create
            </a>
            <x-error></x-error>
            <livewire:admin.product.table-product />
            <livewire:admin.product.show-product />
        </div>

        @push("js")
        <script>
                window.addEventListener("showModelToggle" , event =>{
                    $("#showModel").modal("toggle");
                    })

                        window.addEventListener('detailsProduct', event => {
                            var myModal = new bootstrap.Modal(document.getElementById('showProductModal'), {});
                            myModal.show();
                        });

        </script>
        @endpush
        @endsection