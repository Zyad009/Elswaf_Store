@extends('admin.layouts.app')
@section('admin-title', 'Edit Color')
@section('admin-content')

<x-form.edit title="Edit Color" :name="$color->name">
    <form method="post" action="{{route("admin-dashboard.color.update" , $color)}}" class="">
        <x-error></x-error>
        <x-success></x-success>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" value="{{$color->name}}" class="form-control">
        </div>
        <x-button.submit.edit></x-button.submit.edit>
    </form>
</x-form.edit>

@endsection