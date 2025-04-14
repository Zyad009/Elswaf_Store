@extends('front.layouts.app')
@section('front-title', $product->name)
@push("front-css")
<link rel="stylesheet" href="{{ asset('front/assets2/css/custom.css') }}">
@endpush
@section('content.front')
<div class="mb-2"></div><!-- End .mb-2 -->
<main class="main">
    <div class="page-content">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery product-gallery-vertical">
                            <div class="row">
                                <figure class="product-main-image">
                                    <img id="product-zoom" src="{{asset($product->images->first()?->main_image)}}"
                                        data-zoom-image="{{asset($product->images->first()?->main_image)}}"
                                        alt="product image">

                                    <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                        <i class="icon-arrows"></i>
                                    </a>
                                </figure><!-- End .product-main-image -->

                                <div id="product-zoom-gallery" class="product-image-gallery">
                                    @php
                                    $images = $product->images->first()?->images;
                                    $images = json_decode($images);
                                    @endphp
                                    <a class="product-gallery-item active" href="#"
                                        data-image="{{asset($product->images->first()?->main_image)}}"
                                        data-zoom-image="{{asset($product->images->first()?->main_image)}}">
                                        <img src="{{asset($product->images->first()?->main_image)}}"
                                            alt="product cross">
                                    </a>
                                    <a class="product-gallery-item" href="#"
                                        data-image="{{asset($product->images->first()?->hover_image)}}"
                                        data-zoom-image="{{asset($product->images->first()?->hover_image)}}">
                                        <img src="{{asset($product->images->first()?->hover_image)}}"
                                            alt="product cross">
                                    </a>
                                    @foreach ($images as $image)
                                    <a class="product-gallery-item" href="#" data-image="{{ asset($image) }}"
                                        data-zoom-image="{{ asset($image) }}">
                                        <img src="{{ asset($image) }}" alt="product cross">
                                    </a>
                                    @endforeach
                                </div><!-- End .product-image-gallery -->
                            </div><!-- End .row -->
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title">{{$product->name}}</h1>
                            <!-- End .product-title -->

                            <div class="product-price">
                                @if (isset($product->offer))
                                <span class="new-price">
                                    @php
                                    if($product->offer?->discount_type == "percentage"){
                                    $price = $product->price;
                                    $discount = $product->offer?->discount;
                                    $result = $price - (($price*$discount)/100);
                                    echo "Now " . $result ." EGP";
                                    }else{
                                    $price = $product->price;
                                    $discount = $product->offer?->discount;
                                    $result = $price-$discount;
                                    echo "Now " . $result ." EGP";
                                    }
                                    @endphp
                                </span>
                                <span class="old-price"><s>{{$product->price}} EGP </s></span>
                                @else
                                <div class="product-price">{{$product->price}} EGP</div>
                                @endif
                            </div><!-- End .product-price -->

                            <div class="product-content">
                                <p>{{str($product->description)->limit(100)}}</p>
                            </div><!-- End .product-content -->

                            <livewire:front.shop.single-product :details="$details" />

                            <div class="details-filter-row details-row-size">
                                <label for="qty">Qty:</label>
                                <div class="product-details-quantity">
                                    <input type="number" id="qty" class="form-control" value="1" min="1" max="10"
                                        step="1" data-decimals="0" required>
                                </div><!-- End .product-details-quantity -->
                            </div><!-- End .details-filter-row -->

                            <div class="product-details-action">
                                <a href="#" class="btn btn-outline-primary-2 btn-cart "><span>add to cart</span></a>


                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab"
                            role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab"
                            role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (1)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel"
                        aria-labelledby="product-desc-link">
                        <div class="product-desc-content">
                            <h3>Product Information</h3>
                            <p>{{$product->description}}</p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->

                    <div class="tab-pane fade" id="product-review-tab" role="tabpanel"
                        aria-labelledby="product-review-link">
                        <div class="reviews">
                            <h3>Reviews (1)</h3>
                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">Samanta J.</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                                <!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <span class="review-date">6 days ago</span>
                                    </div><!-- End .col -->
                                    <div class="col">
                                        <h4>Good, perfect size</h4>

                                        <div class="review-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum
                                                dolores assumenda asperiores facilis porro reprehenderit animi culpa
                                                atque blanditiis commodi perspiciatis doloremque, possimus, explicabo,
                                                autem fugit beatae quae voluptas!</p>
                                        </div><!-- End .review-content -->

                                        <div class="review-action">
                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                        </div><!-- End .review-action -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .row -->
                            </div><!-- End .review -->
                        </div><!-- End .reviews -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-details-tab -->
            @if(count($productsBest) > 0 )
            <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>

                @foreach ( $productsBest as $item)

                <div class="product product-7 text-center">
                    <figure class="product-media">
                        @if (isset($item->offer))
                        <span class="product-label label-sale">sale</span>
                        @endif
                        <a href="{{route('singel.product' , $item)}}">
                            <img src="{{ asset($item->images->first()?->main_image) }}" alt="Product image"
                                class="product-image">
                            <img id="current-image-best-{{$item->id}}"
                                src="{{ asset($item->images->first()?->hover_image) }}" alt="Product image"
                                class="product-image product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="{{route('singel.product' , $item)}}"
                                class="btn-product-icon btn-expandable"><span>View
                                    Details</span>
                                <i class="la la-search"></i>
                            </a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            {{-- <a href="{{route('shop' , $item->category->slug)}}">{{$item->category->name}}</a>
                            --}}
                            <a
                                href="{{route('shop' , ['category'=>$item->category->slug])}}">{{$item->category->name}}</a>
                            {{--
                            <livewire:front.home.select-category-component :categorySlug="$item->category->slug"
                                :categoryName="$item->category->name" /> --}}

                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="{{ route('singel.product', $item) }}">{{$item->name}}</a>
                        </h3>
                        <!-- End .product-title -->
                        <div class="product-price">
                            @if (isset($item->offer))
                            <span class="new-price">
                                @php
                                if($item->offer?->discount_type == "percentage"){
                                $price = $item->price;
                                $discount = $item->offer?->discount;
                                $result = $price - (($price*$discount)/100);
                                echo "Now " . $result ." EGP";
                                }else{
                                $price = $item->price;
                                $discount = $item->offer?->discount;
                                $result = $price-$discount;
                                echo "Now " . $result ." EGP";
                                }
                                @endphp
                            </span>
                            <span class="old-price"><s>{{$item->price}} EGP </s></span>
                            @else
                            <div class="product-price">{{$item->price}} EGP</div>
                            @endif
                        </div><!-- End .product-price -->

                        <div class="product-nav product-nav-thumbs">
                            @php
                            $images = $item->images->first()?->images;
                            $images = json_decode($images);
                            @endphp
                            <a href="{{route('singel.product' , $item)}}" class="active">
                                <img src="{{ asset($item->images->first()?->main_image) }}" alt="product desc">
                            </a>

                            <a href="#" class="thumb-image"
                                onclick="changeImageBest({{$item->id}} ,'{{ asset($item->images->first()?->hover_image) }}'); return false;">
                                <img src="{{ asset($item->images->first()?->hover_image) }}" alt="product desc">
                            </a>
                            @foreach ($images as $image)
                            <a href="#" class="thumb-image"
                                onclick="changeImageBest({{$item->id}} ,'{{ asset($image) }}'); return false;">
                                <img src="{{ asset($image) }}" alt="product desc">
                            </a>
                            @endforeach
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                @endforeach
            </div><!-- End .owl-carousel -->
            @endif
        </div><!-- End .owl-carousel -->
    </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@push("front-js")
<script src="{{ asset('front/assets2') }}/js/jquery.elevateZoom.min.js"></script>
<script>
    function changeImageNew( itemId ,imageSrc) {
            const currentImage = document.getElementById('current-image-new-' + itemId);
            currentImage.src = imageSrc;
        }

        function changeImageBest( itemId ,imageSrc) {
            const currentImage = document.getElementById('current-image-best-' + itemId);
            currentImage.src = imageSrc;
        }
</script>
@endpush

@endsection