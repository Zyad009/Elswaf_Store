@extends('admin.layouts.app')
@section("title" , "Create Branch")
@section('admin-content')


<x-form.create title="Add New Branch">
    <form method="post" action="{{ route('admin-dashboard.branches.store') }}" novalidate>
        <x-error></x-error>
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea type="text" name="address" class="form-control"></textarea> 
        </div>

        <div class="mb-3 text-center">
            <input type="submit" value="Create" class="btn btn-primary w-50 text-white">
        </div>

    </form>
</x-form.create>

@endsection