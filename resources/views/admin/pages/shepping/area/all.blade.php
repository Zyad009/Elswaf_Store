@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All Areas ({{$city->name}})</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th class="text-center">Name Area</th>
                      <th class="text-center">Price Regular</th>
                      <th class="text-center">Price Super</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                      <th class="text-center">Count</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($areas as $area )
                    <tr>
                      <td>{{$area->id}}</td>
                      <td class="text-center">{{$area->name}}</td>
                      <td class="text-center">{{$area->delivery_price_regular}}</td>
                      <td class="text-center">{{$area->delivery_price_super}}</td>
                      <td class="text-center">
                          <a href="{{route("edit.area", $area)}}" class="btn btn-info">Edit</a>
                        </td>
                        
                        <td class="text-center">
                          <form action="{{route('delete.area', $area)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" href="">Delete</button>
                          </form>
                        </td>
                        <td class="text-center">{{ $areas->firstItem() + $loop->iteration - 1 }}</td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="7" class="text-center">No areas found</td>
                    </tr>
                    @endforelse
                  </tbody>
                    <h5 class="text-center">Total: {{ $areas->total() }}</h5>
                </table>
        <div class="text-center p-3">
            {{$areas->links()}}
        </div>
              </div>
            @endsection