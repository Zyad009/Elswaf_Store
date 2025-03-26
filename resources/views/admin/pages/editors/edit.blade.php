@extends('admin.layouts.app')
@section("admin-title" , "Edit Editor")
@section('admin-content')

<x-form.edit title="Edit Editor" :name="$editor->name">

    <form method="post" action="{{route("admin-dashboard.editors.update", $editor)}}" class=""
        enctype="multipart/form-data">
        <x-error></x-error>
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{$editor->name}}" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="">Email <span class="text-danger">*</span></label>
                <input type="email" name="email" value="{{$editor->email}}" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Phone <span class="text-danger">*</span></label>
                <input type="tel" name="phone" value="{{$editor->phone}}" class="form-control" pattern="^\+?[0-9-]+$">
            </div>

            <div class="col-md-6">
                <label for="">Whatsapp <span class="text-danger">*</span></label>
                <input type="tel" name="whatsapp" value="{{$editor->whatsapp}}" class="form-control"
                    pattern="^\+?[0-9-]+$">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Gender <span class="text-danger">*</span></label>
                <select name="gender" class="form-control mb-3">
                    <option value="{{$editor->gender}}">{{ucfirst($editor->gender)}}</option>
                    @if ($editor->gender == "male")
                    <option value="female">Female</option>
                    @else
                    <option value="male">Male</option>
                    @endif
                </select>
            </div>

            <div class="col-md-6">
                <label for="">Branch <span class="text-danger">*</span></label>
                <select name="branch_id" class="form-control">
                    @if (isset($editor->branch))
                    <option value="{{$editor->branch->id}}">{{$editor->branch->name}}</option>
                    @else
                    <option value="">Select Branch</option>
                    @endif
                    @foreach($branches as $branch)
                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Salary <span class="text-danger">*</span></label>
                <input type="number" min="1000" name="salary" value="{{$editor->salary}}" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="">Role <span class="text-danger">*</span></label>
                <select name="role" class="form-control mb-3">
                    <option value="{{$editor->role}}">{{ucfirst(str()->replace("_"," ",$editor->role)) }}</option>
                    @if ($editor->role == "editor_admin")
                    <option value="super_admin">Super Admin</option>
                    @else
                    <option value="editor_admin">Editor Admin</option>
                    @endif
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Address <span class="text-danger">*</span></label>
                <textarea name="address" class="form-control"> {{$editor->address}}</textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Main Image</label>
                <input type="file" name="main_image" id="main_image" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="">Password <span class="text-danger">*</span></label>
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