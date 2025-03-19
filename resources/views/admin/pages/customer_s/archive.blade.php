


@extends('admin.layouts.app')
@section('admin-title', 'Archive Customer Services')
@section('admin-content')
<div class="card-body">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold mb-0">All Deleted Customer Services</h2>
                <a href="{{ route('admin-dashboard.customer_s.all') }}" class="btn btn-primary">
                    <i class='bx bx-collection'></i> Customer Services
                </a>
            </div>
            <x-error></x-error>

            <x-table.index :items="$customerServices">
                <table class="table">
<thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Deleted-At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($customerServices as $customerService)
                        <tr>
                            <td class="text-center">{{ $customerService->id }} || </td>
                            <td class="text-center"><i class="fab fa-angular fa-lg text-danger me-3 text-center"></i>
                                <strong>{{
                                    $customerService->name
                                    }}</strong>
                            </td>
                            <td class="text-center">{{ $customerService->email }}</td>
                            <td class="text-center">{{ $customerService->deleted_at }}</td>
                            <td class="text-center">
                                <div class="d-flex gap-2 justify-content-center">
                                    <form action="{{ route('admin-dashboard.customer_s.restore', $customerService->id) }}"
                                        method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-success">
                                            <i class="bx bx-undo"></i>
                                        </button>
                                    </form>

                                    <form action="{{ route('admin-dashboard.customer_s.remove', $customerService->id) }}"
                                        method="post" data-confirm-delete="true">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <h5 class="text-center">Total: {{ $customerServices->total() }}</h5>
                </table>

            </x-table.index>

            <div class="text-center p-3">
                {{ $customerServices->links() }}
            </div>
        </div>
    </div>
</div>
@endsection



