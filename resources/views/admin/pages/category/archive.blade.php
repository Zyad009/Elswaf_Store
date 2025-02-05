@extends('admin.layouts.app')
@section('admin-content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Deleted Masters Categories</h1>
                <x-error></x-error>
                <a href="{{ route('admin-dashboard.category.all') }}" class="btn btn-success">
                    <i class="bi bi-collection"></i> All Categories
                </a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Has Sub-Category</th>
                            <th class="text-center">Deleted-At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td class="text-center">{{ $category->name }}</td>
                                <td class="text-center">
                                    @if ($category->children_count > 0)
                                        <p class="text-secondary">Show</p> <i class="bi bi-eye"></i>
                                        </a>
                                    @else
                                        <p class="text-secondary">No</p>
                                    @endif
                                </td>

                                <td class="text-center">{{ $category->deleted_at }}</td>

                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <form action="{{ route('admin-dashboard.category.restore', $category->id) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-success">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('admin-dashboard.category.remove', $category->id) }}"
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
                                <td colspan="5" class="text-center">No categories found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <h5 class="text-center">Total: {{ $categories->total() }}</h5>
                </table>
            </div>

            <div class="text-center p-3">
                {{ $categories->links() }}
            </div>
        @endsection
