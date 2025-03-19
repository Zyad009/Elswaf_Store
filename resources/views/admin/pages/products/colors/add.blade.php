@extends('admin.layouts.app')
@section("admin-title" , "Create Color")
@section('admin-content')

<x-form.create title="Add New Color">
    <form method="post" action="{{route("admin-dashboard.color.store")}}" class="">
        <x-error></x-error>
        <x-success></x-success>
        @csrf

        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <x-button.submit.create></x-button.submit.create>
    </form>
</x-form.create>


@endsection