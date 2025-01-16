@extends('admin.layouts.app')
@section('admin-content')
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">

                        <div class="mb-3">
                          <h1 class="text-center my-2 p-3">Edit Area</h1>
                        </div>

                    <form method="post" action="{{route("store.area")}}" novalidate class="my-5 border p-3" enctype="multipart/form-data">
                        <x-error></x-error>
                        <x-success></x-success>
                        @csrf


                        <div class="mb-3">
                            <label for="">City</label>
                            <select name="city_id" id="city_id" class="form-control">
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Price Regular</label>
                            <input type="number" step="0.01" min="0" name="delivery_price_regular" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Price Super</label>
                            <input type="number" step="0.01" min="0" name="delivery_price_super" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Save" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
    </div>

@endsection