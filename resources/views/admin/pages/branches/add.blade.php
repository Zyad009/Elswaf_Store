@extends('admin.layouts.app')
@section('admin-content')
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">

                        <div class="mb-3">
                          <h1 class="text-center my-2 p-3">Add New Branch</h1>
                        </div>

                    <form method="post" action="{{route("store.branches")}}" novalidate class="my-5 border p-3" enctype="multipart/form-data">
                        <x-error></x-error>
                        <x-success></x-success>
                        @csrf

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phone" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Manager</label>
                            <select name="admin_id" id="admin_id" class="form-control">
                                @foreach($editors as $editor)
                                    <option value="{{ $editor->id }}">{{ $editor->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Create" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
    </div>

@endsection