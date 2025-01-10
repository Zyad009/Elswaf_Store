@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All Branches</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">id</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Address</th>
                      <th class="text-center">Phone</th>
                      <th class="text-center">Manager</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($branches as $branch )
                    <tr>
                      <td>{{$branch->id}}</td>
                      <td class="text-center">{{$branch->name}}</td>
                      <td class="text-center">{{$branch->address}}</td>
                      <td class="text-center">{{$branch->phone}}</td>
                      <td class="text-center">{{$branch->admin->name}}</td>
                      <td>
                          <a href="{{route("branch.edit", $branch)}}" class="btn btn-info">Edit</a>
                      </td>

                     <td>
                          <form action="{{route('delete.branch', $branch)}}" method="post">
                           @csrf
                           @method('DELETE')
                            <button type="submit" class="btn btn-danger" href="">delete</button>
                           </form>
                     </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
        <div class="text-center p-3">
            {{$branches->links()}}
        </div>
              </div>
            @endsection