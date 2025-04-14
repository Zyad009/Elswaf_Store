@extends("front.layouts.app")
@section("front-title" , "Shop" )
@push('front-css')
{{-- <link rel="stylesheet" href="{{ asset('front/assets2/css/custom.css') }}"> --}}
<link rel="stylesheet" href="{{asset('front/assets2')}}/css/plugins/nouislider/nouislider.css">
@endpush
@section("content.front")

<livewire:front.shop.shop-product />


@endsection



