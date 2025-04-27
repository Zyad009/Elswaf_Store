@extends('layouts.app')
@section('admin-title', 'Pick-up Order Management')
@section('admin-content')
@push("admin-cdn")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

<div class="d-flex justify-content-between align-items-center">
  <h1 class="fw-bold ">Pick-up Orders</h1>
</div>
<x-error></x-error>

{{-- <livewire:admin.offer.product.all-product> --}}
  <livewire:admin.order-management.pickup-order-component />

  {{-- <livewire:admin.offer.product.add-special-offer> --}}

    @push("admin-js")
    <script>
      //             window.addEventListener("errorOffer", () => {
//     Swal.fire({
//     icon: "error",
//     title: "Error!",
//     text: "you must be selected offer",
//     showConfirmButton: false,
//     timer: 2000
//     });
//     });

// window.addEventListener("errorOfferPrice", () => {
//     Swal.fire({
//     icon: "error",
//     title: "Error!",
//     text: "The offer price must be less than the product price",
//     showConfirmButton: false,
//     timer: 5000
//     });
//     });

// window.addEventListener("successOffer", () => {
//     Swal.fire({
//     icon: "success",
//     title: "Success!",
//     text: "offer add successfully",
//     showConfirmButton: false,
//     timer: 1500
//     });
//     });

// window.addEventListener("deletedOffer", () => {
//     Swal.fire({
//     icon: "success",
//     title: "Success!",
//     text: "deleted successfully",
//     showConfirmButton: false,
//     timer: 1500
//     });
//     });


    window.addEventListener("showModelToggle" , event =>{
                $("#showModel").modal("toggle");
                })



    </script>

    @endpush

    @endsection