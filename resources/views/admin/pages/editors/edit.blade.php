@extends('admin.layouts.app')
@section("admin-title" , "Edit Editor")
@section('admin-content')

<x-form.edit title="Edit Editor" :name="$editor->name">

<form method="post" action="{{route("admin-dashboard.editors.update", $editor)}}" class="" enctype="multipart/form-data">
    <x-error></x-error>
    @csrf
    @method('PUT')

      <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" value="{{$editor->name}}" id="" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" value="{{$editor->email}}" name="email" id="" class="form-control">
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
        <label for="">Branch</label>
        <select name="branch_id" id="branch_id" class="form-control">
            @foreach($branches as $branch)
                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
            @endforeach
        </select>
    </div>
    <x-button.submit.edit></x-button.submit.edit>
</form>
</x-form.edit>


@endsection