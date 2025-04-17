@extends("front.layouts.app")
@section("front-title" , "Shop" )
@push('front-css')
{{-- <link rel="stylesheet" href="{{ asset('front/assets2/css/custom.css') }}"> --}}
<link rel="stylesheet" href="{{asset('front/assets2')}}/css/plugins/nouislider/nouislider.css">
@endpush
@push("front-cdn")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@section("content.front")

<livewire:front.shop.shop-product />


@endsection



