@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All Products</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr >
                      <th style="width: 10px">ID</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Category</th>
                      <th class="text-center">Size</th>
                      <th class="text-center">Colour</th>
                      <th class="text-center">QTY</th>
                      <th class="text-center">Description</th>
                      <th class="text-center">Price</th>
                      <th class="text-center">Image</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                      <th class="text-center">Count</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($products as $product )
                    <tr>
                      <td>{{$product->id}}</td>
                      <td>{{$product->name}}</td>
                      <td>{{$product->category->name}}</td>

                      <td>
                          @if(is_array($product->sizes) && !empty($product->sizes))
                              <ul>
                                  @foreach($product->sizes as $size)
                                      <li>{{ $size }}</li>
                                  @endforeach
                              </ul>
                          @else
                              No Size Yet!
                          @endif
                      </td>


                      <td>{{$product->color}}</td>
                      <td>{{$product->QTY}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->price}}</td>
                      <td>
                          <img src="{{ asset('uploads/products/' . $product->image) }}" 
                          class="card-img-top rounded-circle card-image-circle" 
                          alt="product" 
                          style="width: 100px; height: 100px; object-fit: cover;">
                        </td>

                        <td>
                          <a href="{{route("edit.product", $product)}}" class="btn btn-info">Edit</a>
                        </td>

                        <td>
                          <form action="{{route('delete.product', $product)}}" method="post">
                           @csrf
                           @method('DELETE')
                            <button type="submit" class="btn btn-danger" href="">delete</button>
                           </form>
                        </td>
                        <td class="text-center">{{ $products->firstItem() + $loop->iteration - 1 }}</td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="12" class="text-center">No products found</td>
                    </tr>
                    @endforelse
                  </tbody>
                    <h5 class="text-center">Total: {{ $products->total() }}</h5>
                </table>
        <div class="text-center p-3">
            {{$products->links()}}
        </div>
              </div>
            @endsection