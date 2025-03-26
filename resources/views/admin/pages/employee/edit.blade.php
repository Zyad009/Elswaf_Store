@extends('admin.layouts.app')
@section("admin-title", "Edit Employee")
@section('admin-content')


<x-form.edit title="Edit Employee" :name="$employee->name">

    <form method="post" action="{{route('admin-dashboard.employee.update' , $employee)}}" novalidate class="" enctype="multipart/form-data">
        <x-error></x-error>
        @csrf
        @method('PUT')

<div class="row mb-3">
            <div class="col-md-6">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{$employee->name}}"class="form-control">
            </div>
        
            <div class="col-md-6">
                <label for="">Email <span class="text-danger">*</span></label>
                <input type="email" name="email" value="{{$employee->email}}"class="form-control">
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Phone <span class="text-danger">*</span></label>
                <input type="tel" name="phone" value="{{$employee->phone}}"class="form-control">
            </div>
        
            <div class="col-md-6">
                <label for="">Whatsapp <span class="text-danger">*</span></label>
                <input type="tel" name="whatsapp" value="{{$employee->whatsapp}}"class="form-control" pattern="^\+?[0-9-]+$">
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="">Gender <span class="text-danger">*</span></label>
                <select name="gender" class="form-control mb-3">

                    <option value="{{$employee->gender}}">{{ucfirst($employee->gender)}}</option>
                    @if ($employee->gender == "male")
                    <option value="female">Female</option>
                    @else
                    <option value="male">Male</option>
                    @endif
                </select>
            </div>
        
            <div class="col-md-4">
                <label for="">Branch <span class="text-danger">*</span></label>
                <select name="branch_id" class="form-control mb-3">
                    @if (isset($employee->branch))
                    <option value="{{$employee->branch->id}}">{{$employee->branch->name}}</option>
                    @else
                    <option value="">Select Branch</option>
                    @endif
                    @foreach ($branches as $branch )
                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                    @endforeach
                </select>
            </div>
        
            <div class="col-md-4">
                <label for="">Salary <span class="text-danger">*</span></label>
                <input type="number" min="1000" name="salary" value="{{$employee->salary}}" class="form-control">
            </div>
        
        </div>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Address <span class="text-danger">*</span></label>
                <textarea name="address" class="form-control"> {{$employee->address}}</textarea>
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
                <label for="">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" name="password_confirmation" id="" class="form-control">
            </div>
        </div>
        <x-button.submit.edit></x-button.submit.edit>
    </form>

</x-form.edit>

@endsection