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
                      <th class="text-center">Has Sub-Category</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($categories as $category )
                    <tr>
                      <td>{{$category->id}}</td>
                      <td class="text-center">{{$category->name}}</td>
                      <td class="text-center">{{ $category->children_count > 0 ? "Yes" : 'No' }}</td>

                      <td class="text-center">
                        <a href="{{route("edit.category", $category)}}" class="btn btn-info">Edit</a>
                      </td>

                      <td>
                          <form class="text-center" action="{{route('delete.category', $category)}}" method="post">
                           @csrf
                           @method('DELETE')
                            <button type="submit" class="btn btn-danger" href="">delete</button>
                           </form>
                     </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="5" class="text-center">No categories found</td>
                    </tr>
                    @endforelse
                  </tbody>
                    <h5 class="text-center">Total: {{ $categories->total() }}</h5> 
                </table>
              </div>

        <div class="text-center p-3">
            {{$categories->links()}}
        </div>  
            @endsection