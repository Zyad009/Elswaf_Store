@extends('admin.layouts.app')
@section('admin-content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Deleted Sub-Categories</h1>
                <x-error></x-error>
                <a href="{{ route('admin-dashboard.subcategory.all') }}" class="btn btn-success">
                    <i class="bi bi-collection"></i> All Sub-Categories
                </a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Deleted-At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subCategories as $subCategory)
                            <tr>
                                <td>{{ $subCategory->id }}</td>
                                <td class="text-center">{{ $subCategory->name }}</td>
                                <td class="text-center">{{ $subCategory->deleted_at }}</td>

                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <form action="{{ route('admin-dashboard.subcategory.restore', $subCategory->id) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-success">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('admin-dashboard.subcategory.remove', $subCategory->id) }}"
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
                                <td colspan="6" class="text-center">No categories found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <h5 class="text-center">Total: {{ $subCategories->total() }}</h5>
                </table>
            </div>

            <div class="text-center p-3">
                {{ $subCategories->links() }}
            </div>
        @endsection
