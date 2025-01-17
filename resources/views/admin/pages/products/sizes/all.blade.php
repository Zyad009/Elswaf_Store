@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All Colours</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                      <th class="text-center">Count</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($sizes as $size )
                    <tr>
                      <td>{{$size->id}}</td>
                      <td class="text-center">{{$size->name}}</td>
                         <td class="text-center">
                          <a href="{{route("edit.size", $size)}}" class="btn btn-info">Edit</a>
                        </td>
                      <td>
                          <form class="text-center" action="{{route('delete.size', $size)}}" method="post">
                           @csrf
                           @method('DELETE')
                            <button type="submit" class="btn btn-danger" href="">delete</button>
                           </form>
                           <td class="text-center">{{ $sizes->firstItem() + $loop->iteration - 1 }}</td>
                     </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="4" class="text-center">No sizes found</td>
                    </tr>
                    @endforelse
                  </tbody>
                    <h5 class="text-center">Total: {{ $sizes->total() }}</h5> 
                </table>
              </div>
            @endsection