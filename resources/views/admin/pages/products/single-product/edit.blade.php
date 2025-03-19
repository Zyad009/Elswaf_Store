@extends('admin.layouts.app')
@section('admin-title', 'Edit Details')
@section('admin-content')

@push("cdn")
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
@endpush
<x-form.edit title="Edit Details" :name="$singleProduct->product->name">

    <form action="{{ route('admin-dashboard.single-product.update', $singleProduct) }}" method="post" novalidate>
        @csrf
        @method('PUT')
        {{-- for select colors --}}
        <div class="mb-4">
            <label class="form-label fw-bold">Select Colors</label>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-select-sm">
                        <select class="form-select" name="color_id">
                            <option value="{{$singleProduct->color_id}}">{{$nameColor}}</option>
                            @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{$color->name }}</option>
                            @endforeach
                        </select>
                        <x-message.error name="color_id" />
                    </div>
                </div>
            </div>
        </div>
        {{-- end select colors --}}
    
        {{-- for select sizes --}}
        <div class="mb-4">
            <label class="form-label fw-bold">Select Sizes</label>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-select-sm">
                        <select class="form-select" name="size_id">
                            <option value="{{$singleProduct->size_id}}">{{$nameSize}}</option>
                            @foreach ($sizes as $size)
                            <option value="{{ $size->id }}">{{
                                $size->name }}</option>
                            @endforeach
                        </select>
                        <x-message.error name="size_id" />
                    </div>
                </div>
            </div>
        </div>
        {{-- end select sizes --}}
    
    
        {{-- set QTY --}}
        <div class="mb-4">
            <div class="col-md-4">
                <label class="form-label fw-bold">Quantity</label>
                <input type="number" name="QTY" class="form-control"
                    placeholder="Enter quantity" value="{{$singleProduct->QTY}}" min="1">
                <x-message.error name="quantity" />
            </div>
        </div>
    <x-button.submit.edit></x-button.submit.edit>
    </form>
</x-form.edit>

                

@endsection