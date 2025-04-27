@extends('layouts.app')
@section("admin-title" , "Edit Size")
@section('admin-content')

<x-form.edit title="Edit Size" :name="$size->name">
    <form method="post" action="{{route(" admin-dashboard.size.update" , $size)}}" class="">
        <x-error></x-error>
        <x-success></x-success>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" value="{{$size->name}}" class="form-control">
        </div>
        <x-button.submit.edit></x-button.submit.edit>
    </form>
</x-form.edit>
@endsection