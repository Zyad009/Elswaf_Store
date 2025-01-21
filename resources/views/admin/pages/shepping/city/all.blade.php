@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All Cities</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($cities as $city )
                    <tr>
                      <td>{{$city->id}}</td>
                      <td class="text-center">{{$city->name}}</td>
                      <td class="text-center">
                          <a href="{{route("edit.city", $city)}}" class="btn btn-info">Edit</a>
                        </td>
                        
                        <td class="text-center">
                          <form action="{{route('delete.city', $city)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" href="">delete</button>
                          </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="7" class="text-center">No Cities found</td>
                    </tr>
                    @endforelse
                  </tbody>
                    <h5 class="text-center">Total: {{ $cities->total() }}</h5>
                </table>
        <div class="text-center p-3">
            {{$cities->links()}}
        </div>
              </div>
            @endsection