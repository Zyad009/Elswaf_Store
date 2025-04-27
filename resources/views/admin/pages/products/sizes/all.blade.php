@extends('layouts.app')
@section('admin-title', 'All Sizes')
@section('admin-content')

<div class="card-body">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold mb-0">All sizes</h2>
                <a href="{{ route(" admin-dashboard.size.new") }}" class="btn btn-primary">
                    <i class='bx bx-plus bx-tada'></i> Create
                </a>
            </div>
            <x-error></x-error>

            <x-table.index :items="$sizes">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sizes as $size)
                        <tr>
                            <td>{{ $size->id }} || </td>
                            <td class="text-center"><i class="fab fa-angular fa-lg text-danger me-3 text-center"></i>
                                <strong>{{
                                    $size->name
                                    }}</strong>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin-dashboard.size.edit', $size) }}"
                                    class="btn btn-icon btn-outline-warning">
                                    <i class="bx bx-pencil"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('admin-dashboard.size.delete', $size) }}" method="post"
                                    data-confirm-delete="true">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-icon btn-outline-danger confirm-delete">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </form>
                            </td>
        </div>
        </td>
        </tr>
        @endforeach
        </tbody>
        <h5 class="text-center">Total: {{ $sizes->total() }}</h5>
        </table>

        </x-table.index>

        <div class="text-center p-3">
            {{ $sizes->links() }}
        </div>
    </div>
</div>
</div>



@endsection




















{{-- @extends('layouts.app')
@section('admin-content')
<div class="card-body">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">All Sizes</h1>
            <div class="mb-3">
                <a href="{{ route('admin-dashboard.size.new') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Create
                </a>
            </div>
            <x-error></x-error>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($sizes as $size)
                    <tr>
                        <td>{{ $size->id }}</td>
                        <td class="text-center">{{ $size->name }}</td>
                        <td class="text-center">
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="{{ route('admin-dashboard.size.edit', $size) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('admin-dashboard.size.delete', $size) }}" method="post"
                                    data-confirm-delete="true">
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
                    <div class="col-12">
                        <div class="alert alert-danger text-center" role="alert">
                            No Size Found
                            @endforelse
                </tbody>
                <h5 class="text-center">Total: {{ $sizes->total() }}</h5>
            </table>
        </div>
        @endsection --}}