@extends('admin.layouts.app')
@section('admin-content')
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">All Areas ({{ $city->name }})</h1>
                <a href="{{ route('admin-dashboard.area.all' , $city) }}" class="btn btn-success">
                    <i class="bi bi-collection"></i> All Araes
                </a>
                <x-error></x-error>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name Area</th>
                            <th class="text-center">Price Regular</th>
                            <th class="text-center">Price Super</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($areas as $area)
                            <tr>
                                <td>{{ $area->id }}</td>
                                <td class="text-center">{{ $area->name }}</td>
                                <td class="text-center">{{ $area->delivery_price_regular }}</td>
                                <td class="text-center">{{ $area->delivery_price_super }}</td>

                                <td class="text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <form action="{{ route('admin-dashboard.area.restore', $area->id) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-success">
                                                <i class="bi bi-arrow-counterclockwise"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('admin-dashboard.area.remove', $area->id) }}" method="post"
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
                                <td colspan="5" class="text-center">No areas found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <h5 class="text-center">Total: {{ $areas->total() }}</h5>
                </table>
                <div class="text-center p-3">
                    {{ $areas->links() }}
                </div>
            </div>
        @endsection
