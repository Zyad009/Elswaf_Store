@extends('admin.layouts.app')
@section('admin-title', 'Add New Customer Service')
@section('admin-content')

<x-form.create title="Add New Customer Service Representative">
    
    <form method="post" action="{{route("admin-dashboard.customer_s.store")}}" novalidate class="" enctype="multipart/form-data">
        <x-error></x-error>
        @csrf

        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Confirm Password</label>
            <input type="password" name="password_confirmation" id="" class="form-control">
        </div>

        <div class="mb-3">
            <input type="submit" value="Save" class="form-control btn btn-primary">
        </div>
    </form>
</x-form.create>
    
@endsection