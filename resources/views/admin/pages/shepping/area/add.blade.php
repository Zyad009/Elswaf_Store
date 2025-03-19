@extends('admin.layouts.app')
@section("admin-title" , "Create Area")
@section('admin-content')

<x-form.create title="Add New Area">

    <form method="post" action="{{route("admin-dashboard.area.store")}}" novalidate class="">
        <x-error></x-error>
        <x-success></x-success>
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="">City</label>
                <select name="city_id" id="city_id" class="form-control">
                    @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="row mb-3">

            <div class="col-md-6">
                <label for="">Price Regular</label>
                <input type="number" step="0.01" min="0" name="delivery_price_regular" id="" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="">Price Super</label>
                <input type="number" step="0.01" min="0" name="delivery_price_super" id="" class="form-control">
            </div>
        </div>
        <x-button.submit.create></x-button.submit.create>
    </form>
</x-form.create>

@endsection