@extends('admin.layouts.app')
@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <form method="post" action="{{ route('admin-dashboard.size.store') }}" class="my-5 border p-3">
                    <x-error></x-error>
                    <x-success></x-success>
                    @csrf

                    <div class="mb-3">
                        <label for="type_size">Type Size:</label>
                        <select name="type_size" id="type_size" class="form-control" >
                            <option value="" class="text-center">Selet A Type Size</option>
                            <option value="letter">Alphabetic</option>
                            <option value="number">Numeric</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Save" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
