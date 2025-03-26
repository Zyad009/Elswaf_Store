@extends('admin.layouts.app')
@section("admin-title", "Edit Customer Service")
@section('admin-content')


<x-form.edit title="Edit" :name="$customerService->name">

    <form method="post" action="{{route("admin-dashboard.customer_s.update" , $customerService)}}" novalidate class=""
        enctype="multipart/form-data">
        <x-error></x-error>
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{$customerService->name}}" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="">Email <span class="text-danger">*</span></label>
                <input type="email" name="email" value="{{$customerService->email}}" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Phone <span class="text-danger">*</span></label>
                <input type="tel" name="phone" value="{{$customerService->phone}}" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="">Whatsapp <span class="text-danger">*</span></label>
                <input type="tel" name="whatsapp" value="{{$customerService->whatsapp}}" class="form-control"
                    pattern="^\+?[0-9-]+$">
            </div>

        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Salary <span class="text-danger">*</span></label>
                <input type="number" min="1000" name="salary" value="{{$customerService->salary}}" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="">Gender <span class="text-danger">*</span></label>
                <select name="gender" class="form-control mb-3">
                    <option value="{{$customerService->gender}}">{{ucfirst($customerService->gender)}}</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">

            <div class="col-md-6">
                <label for="">Address <span class="text-danger">*</span></label>
                <textarea name="address" class="form-control"> {{$customerService->address}}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Main Image</label>
                <input type="file" name="main_image" id="main_image" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Password<span class="text-danger">*</span></label>
                <input type="password" name="password" id="" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="">Confirm Password<span class="text-danger">*</span></label>
                <input type="password" name="password_confirmation" id="" class="form-control">
            </div>
        </div>
        <x-button.submit.edit></x-button.submit.edit>
    </form>

</x-form.edit>

@endsection