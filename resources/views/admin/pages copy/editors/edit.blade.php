@extends('admin.layouts.app')
@section('admin-content')
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">
                    
                        <div class="mb-3">
                          <h1 class="text-center my-2 p-3">Edit Editor</h1>
                        </div>

                    <form method="post" action="{{route("admin-dashboard.editors.update", $editor)}}" class="my-5 border p-3" enctype="multipart/form-data">
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
                        
                        <div class="mb-3">
                            <input type="submit" value="Edit" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
    </div>

@endsection