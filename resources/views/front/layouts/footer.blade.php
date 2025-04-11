<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget widget-about">
                        <h4 class="widget-title">about Zyad Tech</h4><!-- End .widget-title -->
                        <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros
                            eu erat. </p>

                        <div class="social-icons">
                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i
                                    class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i
                                    class="icon-instagram"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="about.html">About Zyad Tech</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="login.html">Log in</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->


                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="{{route("login.index")}}">Sign In</a></li>
                            <li><a href="{{route("cart")}}">View Cart</a></li>
                            <li><a href="{{route("checkout")}}">Track My Order</a></li>
                            <li><a href="{{route("contact")}}">Help</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            <figure class="footer-payments">
                <img src="{{ asset('front/assets2') }}/images/payments.png" alt="Payment methods" width="272"
                    height="20">
            </figure><!-- End .footer-payments -->
            <img src="{{ asset('front/assets2') }}/images/demos/demo-6/logo-footer.png" alt="Zyad Tech Logo" width="82"
                height="25">
            <p class="footer-copyright">Copyright © {{date("Y")}} Zyad Tech </p>
            <!-- End .footer-copyright -->
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
</div><!-- End .page-wrapper -->

@include('front.layouts.scripts')

@stack("script-zoom")
</body>


<!-- Zyad Tech/index-6.html  22 Nov 2019 09:56:39 GMT -->

</html>
