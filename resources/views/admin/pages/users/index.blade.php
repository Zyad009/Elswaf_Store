@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All users</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">id</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Phone</th>
                      <th class="text-center">Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user )
                    <tr>
                      <td>{{$user->id}}</td>
                      <td class="text-center">{{$user->name}}</td>
                      <td class="text-center">{{$user->email}}</td>
                      <td class="text-center">{{$user->phone}}</td>
                      <td class="text-center">{{$user->address}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
        <div class="text-center p-3">
            {{$users->links()}}
        </div>
              </div>
            @endsection