@extends('admin.layouts.app')
@section('admin-content')
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">

                        <div class="mb-3">
                          <h1 class="text-center my-2 p-3">Add New Product</h1>
                        </div>

                    <form method="post" action="{{route("store.product")}}" class="my-5 border p-3" enctype="multipart/form-data">
                        <x-error></x-error>
                        <x-success></x-success>
                        @csrf

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="size">Sizes</label>
                            <select name="sizes[]" id="size" class="form-control">
                                <option value="S size">S</option>
                                <option value="S&M size">S,M</option>
                                <option value="S&M&L size">S,M,L</option>
                                <option value="S&M&L&XL size">S,M,L,XL</option>
                                <option value="S&M&L&XL&2XL size">S,M,L,2XL</option>
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="">Colour</label>
                            <input type="text" name="color" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">QTY</label>
                            <input type="number" name="QTY" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="">price</label>
                            <input type="number" name="price" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <input type="submit" value="Save" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
    </div>

@endsection