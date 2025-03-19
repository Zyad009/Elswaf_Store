@extends('admin.layouts.app')
@section("admin-title", "Edit Customer Service")
@section('admin-content')


<x-form.edit title="Edit" :name="$customerService->name">

    <form method="post" action="{{route("admin-dashboard.customer_s.update" , $customerService)}}" novalidate class="" enctype="multipart/form-data">
        <x-error></x-error>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" value="{{$customerService->name}}" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" value="{{$customerService->email}}" name="email" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Confirm Password</label>
            <input type="password" name="password_confirmation" id="" class="form-control">
        </div>

        <x-button.submit.edit></x-button.submit.edit>
    </form>

</x-form.edit>

@endsection