@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All Sub Categories For ({{$category->name}})</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">Code</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($categories as $subCategory )
                    <tr>
                      <td>{{$subCategory->id}}</td>
                      <td class="text-center">{{$subCategory->name}}</td>
                      <td class="text-center">
                        <a href="{{route("admin-dashboard.subcategory.edit", $subCategory)}}" class="btn btn-info">Edit</a>
                      </td>

                      <td>
                          <form class="text-center" action="{{route("admin-dashboard.subcategory.delete", $subCategory)}}" method="post">
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