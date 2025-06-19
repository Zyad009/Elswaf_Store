@extends('layouts.app')
@section('admin-title', 'All Users')
@section('customerservice-content')
@push("admin-cdn")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

<div class="d-flex justify-content-between align-items-center">
  <h1 class="fw-bold ">All Users</h1>
</div>
<x-error></x-error>

<livewire:user.search-user>
<livewire:user.show-details-user >

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