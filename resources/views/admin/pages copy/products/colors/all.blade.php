@extends('admin.layouts.app')
@section('admin-content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Colours</h1>
                <a href="{{ route("admin-dashboard.color.new") }}" class="btn btn-success">Create</a>
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
                        @forelse ($colors as $color)
                            <tr>
                                <td>{{ $color->id }}</td>
                                <td class="text-center">{{ $color->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin-dashboard.color.edit', $color) }}"
                                        class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <form class="text-center" action="{{ route('admin-dashboard.color.delete', $color) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" href="">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No colors found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <h5 class="text-center">Total: {{ $colors->total() }}</h5>
                </table>
            </div>
        @endsection
