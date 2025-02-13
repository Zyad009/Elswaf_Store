@extends('admin.layouts.app')
@section('admin-content')

    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Products</h1>
                <a href="{{ route('admin-dashboard.product.new') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Create
                </a>

                <x-error></x-error>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Colour</th>
                            <th class="text-center">QTY</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            {{-- {{dd($product->images[0]->main_image)}} --}}
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>

                                <td>
                                    @if (is_array($product->sizes) && !empty($product->sizes))
                                        <ul>
                                            @foreach ($product->sizes as $size)
                                                <li>{{ $size }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        No Size Yet!
                                    @endif
                                </td>

                                <td>{{ $product->color }}</td>
                                <td>{{ $product->QTY }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <img src="{{asset($product->images->first()?->main_image)}}"
                                        class="card-img-top rounded-.circle card-image-circle" alt="product"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                </td>

                                <td class="text-center">
                                  <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('admin-dashboard.product.edit', $product) }}" class="btn btn-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin-dashboard.product.delete', $product) }}" method="post"
                                        data-confirm-delete="true">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                  </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">No products found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <h5 class="text-center">Total: {{ $products->total() }}</h5>
                </table>
                <div class="text-center p-3">
                    {{ $products->links() }}
                </div>
            </div>
        @endsection
