@extends('admin.layouts.app')
@section('admin-content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Deleted Admins</h1>
                <x-error></x-error>
                <a href="{{ route('admin-dashboard.editors.all') }}" class="btn btn-success">
                    <i class="bi bi-collection"></i> All Admins
                </a>


                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Branch</th>
                            <th class="text-center">Deleted-At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($editors as $editor)
                            <tr>
                                <td>{{ $editor->id }}</td>
                                <td class="text-center">{{ $editor->name }}</td>
                                <td class="text-center">{{ $editor->email }}</td>
                                <td class="text-center">{{ $editor->role }}</td>
                                <td class="text-center">
                                    @if ($editor->branch)
                                        {{ $editor->branch->name }}
                                    @else
                                        <h5 class="text-danger">No Branch</h5>
                                    @endif
                                </td>
                                <td class="text-center">{{ $editor->deleted_at }}</td>
                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <form action="{{ route('admin-dashboard.editors.restore', $editor->id) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-success">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('admin-dashboard.editors.remove', $editor->id) }}"
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
                                <td colspan="7" class="text-center">No editors found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <h5 class="text-center">Total: {{ $editors->total() }}</h5>
                </table>
                <div class="text-center p-3">
                    {{ $editors->links() }}
                </div>
            </div>
        @endsection
