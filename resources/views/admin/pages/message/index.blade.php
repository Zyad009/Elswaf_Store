@extends('admin.layouts.app')
@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">All Messages</h1>
    <x-success></x-success>
    <x-error></x-error>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Phone</th>
                      <th class="text-center">Subject</th>
                      <th class="text-center">Message</th>
                      <th class="text-center">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($messages as $index => $message )
                    <tr>
                      <td>{{$message->id}}</td>
                      <td class="text-center">{{$message->name}}</td>
                      <td class="text-center">{{$message->email}}</td>
                      <td class="text-center">{{$message->phone}}</td>
                      <td class="text-center">{{$message->subject}}</td>
                      <td class="text-center">{{$message->message}}</td>
                      <td>
                        <form class="text-center" action="{{route("delete.message", $message)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" href="">delete</button>
                        </form>
                      </td>
                      <td class="text-center">{{$index + 1}}</td>
                    </tr>
                    @empty
                    <tr>
                      <td colspan="7" class="text-center">No messages found</td>
                    </tr>
                    @endforelse
                  </tbody>
                    <h5 class="text-center">Total: {{ $messages->count() }}</h5>  
                </table>
        <div class="text-center p-3">
            {{$messages->links()}}
        </div>
              </div>
            @endsection