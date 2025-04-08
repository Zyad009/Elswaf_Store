@extends("front.layouts.app")
@section("front-title" , "Shop" )
@push('front-css')
<link rel="stylesheet" href="{{ asset('front/assets2/css/custom.css') }}">
@endpush
@section("content.front")

<livewire:front.shop.shop-product :categoryId="$categoryId" :categoryName="$categoryName"/>

@endsection