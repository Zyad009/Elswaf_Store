@extends('admin.layouts.app')
@section('admin-content')
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">

            <div class="mb-3">
                <h1 class="text-center my-2 p-3">Edit Category</h1>
            </div>

                    <form method="post" action="{{route("update.category" , $category)}}" class="my-5 border p-3">
                        <x-error></x-error>
                        <x-success></x-success>
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$category->name}}" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Save" class="form-control btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>
    </div>

@endsection