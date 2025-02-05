@extends('admin.layouts.app')
@section('admin-content')

    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Deleted Products</h1>
                <a href="{{ route('admin-dashboard.product.all') }}" class="btn btn-success">
                    <i class="bi bi-collection"></i> All Product
                </a>

                <x-error></x-error>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <img src="{{ asset($product->image) }}"
                                        class="card-img-top rounded-circle card-image-circle" alt="product"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                </td>
                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <form action="{{ route('admin-dashboard.product.restore', $product->id) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-success">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('admin-dashboard.product.remove', $product->id) }}"
                                            method="post" data-confirm-delete="true">
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
                                <td colspan="7" class="text-center">No products found</td>
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
