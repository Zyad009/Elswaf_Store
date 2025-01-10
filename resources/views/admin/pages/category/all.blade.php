@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All Categories</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">id</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category )
                    <tr>
                      <td>{{$category->id}}</td>
                      <td class="text-center">{{$category->name}}</td>
                      <td>
                          <form class="text-center" action="{{route('delete.category', $category)}}" method="post">
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