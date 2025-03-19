@extends('admin.layouts.app')
@section('admin-title', 'Add Size')
@section('admin-content')

<x-form.create title="Add New Size">

    <form method="post" action="{{ route('admin-dashboard.size.store') }}" class="">
        <x-error></x-error>
        <x-success></x-success>
        @csrf

        <div class="mb-3">
            <label for="type_size">Type Size:</label>
            <select name="type_size" id="type_size" class="form-control" >
                <option value="" class="text-center">Selet A Type Size</option>
                <option value="letter">Alphabetic</option>
                <option value="number">Numeric</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control">
        </div>

        <x-button.submit.create></x-button.submit.create>
    </form>
</x-form.create>
@endsection
