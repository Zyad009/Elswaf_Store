            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{route("home")}}">Home</a>
                                </li>

                                <li>
                                    <a href="{{route("shop")}}">Shop</a>
                                </li>

                                <li>
                                    <a  class="sf-with-ul">Categories</a>
                                    <ul>
                                        <li>
                                            <a href="about.html" class="sf-with-ul">About</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{route("about")}}">About</a>
                                </li>

                                <li>
                                    <a href="{{route("contact")}}">Contact</a>
                                </li>

                                @auth("admin")
                                <li>
                                    <a href="{{route("admin-home")}}">
                                        <i class="fas fa-cog"></i> Dashboard
                                    </a>
                                </li>
                                @endauth

                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <a href="{{route("login.index")}}">Login & Register</a>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
            </header><!-- End .header -->
