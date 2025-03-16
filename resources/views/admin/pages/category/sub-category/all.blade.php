@extends('admin.layouts.app')
@section('admin-title', 'All Sub Categories')
@section("sub-categories-active", "active")
@section('admin-content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Sub Categories</h1>
                <a href="{{ route('admin-dashboard.subcategory.new') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Create
                </a>
                <x-error></x-error>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Belongs To</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subCategories as $subCategory)
                            <tr>
                                <td>{{ $subCategory->id }}</td>
                                <td class="text-center">{{ $subCategory->name }}</td>
                                <td class="text-center text-secondary">
                                    @if ($subCategory->parent)
                                        {{ $subCategory->parent->parent_id > 0 ? $subCategory->parent->name . ' (SUB)' : $subCategory->parent->name . ' (MAIN)' }}
                                    @else
                                        <span class="text-muted">No Parent</span>
                                    @endif

                                </td>
                                <td class="text-center">
                                                    <img src="{{ asset($subCategory ->images->first()?->main_image) }}" width="120" height="120"
                                                        style="aspect-ratio: 1/1; object-fit: cover; border-radius: 50%;" alt="product">
                                                </td>
                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="{{ route('admin-dashboard.subcategory.edit', $subCategory) }}"
                                            class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('admin-dashboard.subcategory.delete', $subCategory) }}"
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
                    <h5 class="text-center">Total: {{ $subCategories->total() }}</h5>
                </table>
            </div>

            <div class="text-center p-3">
                {{ $subCategories->links() }}
            </div>
        @endsection
