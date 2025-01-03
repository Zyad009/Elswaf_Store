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
                      <th style="width: 10px">id</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Size</th>
                      <th>Colour</th>
                      <th>QTY</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Image</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product )
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
                          <a href="{{url("edit-product", $product)}}" class="btn btn-info">Edit</a>
                        </td>

                        <td>
                          <form action="{{url('delete-product', $product)}}" method="post">
                           @csrf
                           @method('DELETE')
                            <button type="submit" class="btn btn-danger" href="">delete</button>
                           </form>
                     </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            @endsection