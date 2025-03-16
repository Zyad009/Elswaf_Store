@extends('admin.layouts.app')
@section('admin-content')
<div class="card-body">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">All Masters Categories</h1>
            <a href="{{ route('admin-dashboard.category.new') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Create
            </a>
            <x-error></x-error>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">Code</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Has Sub-Category</th>
                        <th class="text-center">Image</th>
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
                            <a href="{{ route('admin-dashboard.category.view', $category) }}">
                                Show <i class="bi bi-eye"></i>
                            </a>
                            @else
                            <p class="text-secondary">No</p>
                            @endif
                        </td>

<td class="text-center">
    <img src="{{ asset($category->images->first()?->main_image) }}" width="120" height="120"
        style="aspect-ratio: 1/1; object-fit: cover; border-radius: 50%;" alt="product">
</td>

                        <td class="text-center">
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="{{ route('admin-dashboard.category.edit', $category) }}"
                                    class="btn btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('admin-dashboard.category.delete', $category) }}" method="post"
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
                    <tr>
                        <td colspan="4" class="text-center">No categories found</td>
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