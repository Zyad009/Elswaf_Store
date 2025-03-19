@extends('admin.layouts.app')
@section('admin-title', 'All Branches')
@section('admin-content')
<div class="card-body">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold mb-0">All Branches</h2>
                <a href="{{ route('admin-dashboard.branches.new') }}" class="btn btn-primary">
                    <i class='bx bx-plus bx-tada'></i> Create
                </a>
            </div>
            <x-error></x-error>

            <x-table.index :items="$branches">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Manager</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($branches as $branch)
                        <tr>
                            <td>{{ $branch->id }} || </td>
                            <td class="text-center"><i class="fab fa-angular fa-lg text-danger me-3 text-center"></i>
                                <strong>{{
                                    $branch->name
                                    }}</strong></td>
                            <td class="text-center">
                                <textarea class="form-control" rows="3"
                                    style="width: 100%; height: 100px; resize: none;"
                                    readonly>{{ $branch->address }}</textarea>
                            </td>
                            <td class="text-center">{{ $branch->phone }}</td>
                            <td class="text-center">
                                @if ($branch->admin)
                                {{ $branch->admin->name }}
                                @else
                                <b class="badge bg-label-danger me-1">No Manager</b>
                                @endif
                            </td>

                            <td class="text-center">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <a href="{{ route('admin-dashboard.branches.edit', $branch) }}"
                                        class="btn btn-icon btn-outline-warning">
                                        <i class="bx bx-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin-dashboard.branches.delete', $branch) }}" method="post"
                                        data-confirm-delete="true">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-outline-danger confirm-delete">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <h5 class="text-center">Total: {{ $branches->total() }}</h5>
                </table>

            </x-table.index>

            <div class="text-center p-3">
                {{ $branches->links() }}
            </div>
        </div>
    </div>
</div>
@endsection