@extends('admin.layouts.app')
@section('admin-content')
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">
                    <form method="post" action="{{route("admin-dashboard.product.update", $product)}}" class="my-5 border p-3" enctype="multipart/form-data">
                        <x-error></x-error>
                        <x-success></x-success>
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$product->name}}" id="" class="form-control">
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
                            <label for="">QTY</label>
                            <input type="number" name="QTY" id="" min="0" value="{{$product->QTY}}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" value="{{$product->description}}" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="">Price</label>
                            <input type="number" name="price" value="{{$product->price}}" id="" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="">Offer</label>
                            <input type="number" step="0.01" min="0" name="offer" value="{{$product->offer}}" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <input type="submit" value="Edit" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
    </div>

@endsection