@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All Admins</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">id</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Role</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($admins as $admin )
                    <tr>
                      <td>{{$admin->id}}</td>
                      <td class="text-center">{{$admin->name}}</td>
                      <td class="text-center">{{$admin->email}}</td>
                      <td class="text-center">{{$admin->role}}</td>
                      <td class="text-center">{{$admin->phone}}</td>
                      <td>
                          <a href="{{route("admin.edit", $admin)}}" class="btn btn-info">Edit</a>
                      </td>

                     <td>
                          <form action="{{route('admin.delete', $admin)}}" method="post">
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
            {{$admins->links()}}
        </div>
              </div>
            @endsection