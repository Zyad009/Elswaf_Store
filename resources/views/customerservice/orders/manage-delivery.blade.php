@extends('layouts.app')
@section('admin-title', 'Delivery Order Management')
@section('customerservice-content')
@push("admin-cdn")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

<div class="d-flex justify-content-between align-items-center">
  <h1 class="fw-bold ">Delivery Orders</h1>
</div>
<x-error></x-error>

  <livewire:order-management.delivery-order.delivery-order-component />
  <livewire:order-management.delivery-order.show-details-order />
  <livewire:order-management.pickup-order.show-order-details>


    @push("admin-js")
    <script>
window.addEventListener("errorFound", () => {
    Swal.fire({
    icon: "error",
    title: "Error!",
    text: "this details already found",
    showConfirmButton: false,
    timer: 2500
    });
    });

window.addEventListener("cancelleSuccess", () => {
    Swal.fire({
    icon: "success",
    title: "Success!",
    text: "Cancelled Has Been Successfully",
    showConfirmButton: false,
    timer: 1500
    });
    });

window.addEventListener("addressUpdated", () => {
    Swal.fire({
    icon: "success",
    title: "Success!",
    text: "Address Updated Successfully",
    showConfirmButton: false,
    timer: 1500
    });
    });

window.addEventListener("paymentSuccess", () => {
    Swal.fire({
    icon: "success",
    title: "Success!",
    text: "Payment Has Been Successfully",
    showConfirmButton: false,
    timer: 1500
    });
    });

window.addEventListener("deletedItem", () => {
    Swal.fire({
    icon: "success",
    title: "Success!",
    text: "deleted successfully",
    showConfirmButton: false,
    timer: 1500
    });
    });

window.addEventListener("editItem", () => {
    Swal.fire({
    icon: "success",
    title: "Success!",
    text: "updated successfully",
    showConfirmButton: false,
    timer: 1500
    });
    });


    window.addEventListener("showModelToggleXl" , event =>{
                $("#showModelXl").modal("toggle");
                })

    window.addEventListener("showModelToggle" , event =>{
                $("#showModel").modal("toggle");
                })


    </script>

    @endpush

    @endsection