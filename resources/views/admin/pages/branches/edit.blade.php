@extends('admin.layouts.app')
@section("admin-title" , "Edit Branch")
@section('admin-content')



<x-form.edit title="Edit Branch" :name="$branch->name">

    <form method="post" action="{{route("admin-dashboard.branches.update" , $branch )}}" novalidate class=""
        enctype="multipart/form-data">
        <x-error></x-error>
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Name </label>
                <input type="text" name="name" value="{{$branch->name}}" class="form-control">
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" value="{{$branch->phone}}" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Address</label>
                <textarea type="text" name="address" class="form-control">
                    {{$branch->address}}
                </textarea>
            </div>

            <div class="col-md-6">
                <label for="">Manager</label>
                <select name="admin_id" id="admin_id" class="form-control">
                    @foreach($editors as $editor)
                    <option value="{{ $editor->id }}">{{ $editor->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <x-button.submit.edit></x-button.submit.edit>
    </form>
</x-form.edit>


@endsection