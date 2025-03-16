@extends('admin.layouts.app')

@section('admin-content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Deleted Customer-Service</h1>
                <a href="{{ route('admin-dashboard.customer_s.all') }}" class="btn btn-success">
                    <i class="bi bi-collection"></i> All Customer Services
                </a>
                <x-error></x-error>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Deleted-At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($customerServices as $customerService)
                            <tr>
                                <td>{{ $customerService->id }}</td>
                                <td class="text-center">{{ $customerService->name }}</td>
                                <td class="text-center">{{ $customerService->email }}</td>
                                <td class="text-center">{{ $customerService->deleted_at }}</td>
                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <form action="{{ route('admin-dashboard.customer_s.restore', $customerService->id) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-success">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('admin-dashboard.customer_s.remove', $customerService->id) }}"
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
                                <td colspan="5" class="text-center">No customer service found.</td>
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
