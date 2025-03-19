@extends('admin.layouts.app')
@section("admin-title" , "Add New Editor" )
@section('admin-content')

<x-form.create title="Add New Editor">
    <form method="post" action="{{route("admin-dashboard.editors.store")}}" novalidate class="" enctype="multipart/form-data">
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
            <label for="">Branch</label>
            <select name="branch_id" id="branch_id" class="form-control">
                @foreach($branches as $branch)
                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                @endforeach
            </select>
        </div>
<x-button.submit.create></x-button.submit.create>
    </form>
</x-form.create>


@endsection