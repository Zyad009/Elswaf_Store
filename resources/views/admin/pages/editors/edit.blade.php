@extends('admin.layouts.app')
@section('admin-content')
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">
                    <form method="post" action="{{route("update.editor", $editor)}}" class="my-5 border p-3" enctype="multipart/form-data">
                        <x-error></x-error>
                        <x-success></x-success>
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
                            <input type="submit" value="Edit" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
    </div>

@endsection