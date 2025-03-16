@extends('admin.layouts.app')
@section('admin-title', 'All Customer Service')
@section("customer-services-active", "active")
@section('admin-content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Customer Service</h1>
                <a href="{{ route('admin-dashboard.customer_s.new') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Create
                </a>
                <x-error></x-error>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($customerServices as $customerService)
                            <tr>
                                <td>{{ $customerService->id }}</td>
                                <td class="text-center">{{ $customerService->name }}</td>
                                <td class="text-center">{{ $customerService->email }}</td>

                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="{{ route('admin-dashboard.customer_s.edit', $customerService) }}"
                                            class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('admin-dashboard.customer_s.delete', $customerService) }}"
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
                                <td colspan="4" class="text-center">No customer service found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <h5 class="text-center">Total: {{ $customerServices->total() }}</h5>
                </table>

                <div class="text-center p-3">
                    {{ $customerServices->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
