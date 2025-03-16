@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Archived Areas "City"</h2>
        <div class="list-group">
            @forelse ( $cities as $city )
                <a href="{{ route('admin-dashboard.area.archive', $city) }}" class="list-group-item list-group-item-action">
                    <i class="bi bi-map-fill"></i> {{ $city->name }}
                </a>
            @empty
                <div class="col-12">
                    <div class="alert alert-danger text-center" role="alert">
                        No City Found
            @endforelse
        </div>
    </div>
@endsection
