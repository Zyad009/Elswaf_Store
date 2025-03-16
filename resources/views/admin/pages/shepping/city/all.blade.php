@extends('admin.layouts.app')
@section('admin-title', 'All Cities')
@section("cities-active", "active")
@section('admin-content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Cities</h1>
                <a href="{{ route('admin-dashboard.city.new') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Create
                </a>
                <x-error></x-error>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cities as $city)
                            <tr>
                                <td>{{ $city->id }}</td>
                                <td class="text-center">{{ $city->name }}</td>
                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="{{ route('admin-dashboard.city.edit', $city) }}"
                                            class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('admin-dashboard.city.delete', $city) }}"
                                            method="post" data-confirm-delete="true">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No Cities found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <h5 class="text-center">Total: {{ $cities->total() }}</h5>
                </table>
                <div class="text-center p-3">
                    {{ $cities->links() }}
                </div>
            </div>
        @endsection
