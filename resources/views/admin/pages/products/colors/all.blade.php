@extends('admin.layouts.app')
@section('admin-title', 'All Colors')
@section('admin-content')

<div class="card-body">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold mb-0">All Colors</h2>
                <a href="{{ route("admin-dashboard.color.new") }}" class="btn btn-primary">
                    <i class='bx bx-plus bx-tada'></i> Create
                </a>
            </div>
            <x-error></x-error>

            <x-table.index :items="$colors">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($colors as $color)
                        <tr>
                            <td>{{ $color->id }} || </td>
                            <td class="text-center"><i class="fab fa-angular fa-lg text-danger me-3 text-center"></i>
                                <strong>{{
                                    $color->name
                                    }}</strong>
                            </td>
                            <td class="text-center">
                                    <a href="{{ route('admin-dashboard.color.edit', $color) }}"
                                        class="btn btn-icon btn-outline-warning">
                                        <i class="bx bx-pencil"></i>
                                    </a>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('admin-dashboard.color.delete', $color) }}" method="post"
                                    data-confirm-delete="true">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-icon btn-outline-danger confirm-delete">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </form>
                            </td>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <h5 class="text-center">Total: {{ $colors->total() }}</h5>
                </table>

            </x-table.index>

            <div class="text-center p-3">
                {{ $colors->links() }}
            </div>
        </div>
    </div>
</div>



@endsection
