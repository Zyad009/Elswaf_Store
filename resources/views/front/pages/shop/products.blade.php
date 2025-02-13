@extends("front.layouts.app")
@section("content.front")

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('{{asset("front/assets2")}}/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">All Products<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">

                                    <div class="mb-2"></div><!-- End .mb-2 -->

                            <div class="products mb-3">
                                <div class="row justify-content-center">
                                    <div class="col-6 col-md-4 col-lg-4">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <span class="product-label label-out">Out of Stock</span>
                                                <a href="product.html">
                                                    <img src="{{asset("front/assets2")}}/images/products/product-4.jpg" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Women</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">Brown paperbag waist pencil skirt</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    $60.00
                                                </div><!-- End .product-price -->

                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 2 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-thumbs">
                                                    <a href="#" class="active">
                                                        <img src="{{asset("front/assets2")}}/images/products/product-4-thumb.jpg" alt="product desc">
                                                    </a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 -->

                                </div><!-- End .row -->
                            </div><!-- End .products -->
                		</div><!-- End .col-lg-9 -->

                		<aside class="col-lg-3 order-lg-first mb-2">
                            <div class="mb-3"></div><!-- End .mb-2 -->
                			<div class="sidebar sidebar-shop">
                				<div class="widget widget-collapsible">
    								<h3 class="widget-title ">
									    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
									        Category
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-1">
										<div class="widget-body">
											<div class="filter-items filter-items-count">

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<a href="#">Dresses</a>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">3</span>
												</div><!-- End .filter-item -->

											</div><!-- End .filter-items -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->
                                        {{--  الباااجينيشن --}}
                			</div><!-- End .sidebar sidebar-shop -->
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

@endsection