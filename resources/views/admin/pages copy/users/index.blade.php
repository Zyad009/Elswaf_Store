@extends('admin.layouts.app')
@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="d-flex" action="{{ route('admin-dashboard.user.search') }}" method="GET">

                    <div class="input-group">
                        <input class="form-control form-control-lg" name="q" type="search" placeholder="phone"
                            aria-label="Search">
                        <button class="btn btn-primary px-4" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All users</h1>
                <x-success></x-success>
                <x-error></x-error>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user )
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td class="text-center">{{ $user->name }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">{{ $user->phone }}</td>
                                <td class="text-center">{{ $user->address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <h5 class="text-center">Total: {{ $users->total() }}</h5>
                </table>
                <div class="text-center p-3">
                    {{ $users->links() }}
                </div>
            </div>
        @endsection
