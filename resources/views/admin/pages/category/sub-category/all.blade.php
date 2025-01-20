@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All Masters Categories</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Belongs To</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                      <th class="text-center">Count</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($subCategories as $category )
                    <tr>
                      <td>{{$category->id}}</td>
                      <td class="text-center">{{$category->name}}</td>
                      <td class="text-center text-secondary">{{ $category->parent->name}}</td>

                      <td class="text-center">
                        <a href="{{route("edit.category", $category)}}" class="btn btn-info">Edit</a>
                      </td>

                      <td>
                          <form class="text-center" action="{{route('delete.category', $category)}}" method="post">
                           @csrf
                           @method('DELETE')
                            <button type="submit" class="btn btn-danger" href="">delete</button>
                           </form>
                           <td class="text-center">{{ $subCategories->firstItem() + $loop->iteration - 1 }}</td>
                     </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="6" class="text-center">No categories found</td>
                    </tr>
                    @endforelse
                  </tbody>
                    <h5 class="text-center">Total: {{ $subCategories->total() }}</h5> 
                </table>
              </div>

        <div class="text-center p-3">
            {{$subCategories->links()}}
        </div>  
            @endsection