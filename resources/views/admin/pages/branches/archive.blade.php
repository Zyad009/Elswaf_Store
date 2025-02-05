@extends('admin.layouts.app')
@section('admin-content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Branches</h1>
                <x-error></x-error>
                <a href="{{ route('admin-dashboard.branches.all') }}" class="btn btn-success">
                    <i class="bi bi-collection"></i> All Branches
                </a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Manager</th>
                            <th class="text-center">Deleted-At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($branches as $branch)
                            <tr>
                                <td>{{ $branch->id }}</td>
                                <td class="text-center">{{ $branch->name }}</td>
                                <td class="text-center">{{ $branch->address }}</td>
                                <td class="text-center">{{ $branch->phone }}</td>
                                <td class="text-center">
                                    @if ($branch->admin)
                                        {{ $branch->admin->name }}
                                    @else
                                        <h5 class="text-danger">No Manager</h5>
                                    @endif
                                </td>

                                <td class="text-center">{{ $branch->deleted_at }}</td>

                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <form action="{{ route('admin-dashboard.branches.restore', $branch->id) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-success">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('admin-dashboard.branches.remove', $branch->id) }}"
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
                                <td colspan="8" class="text-center">No branches found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <h5 class="text-center">Total: {{ $branches->total() }}</h5>
                </table>
                <div class="text-center p-3">
                    {{ $branches->links() }}
                </div>
            </div>
        @endsection
