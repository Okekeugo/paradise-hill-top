<header class="as-header header-layout1">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fa-solid fa-phone"></i><a href="tel:+2348164148950">+2348164148950</a></li>
                            <li><i class="fa-solid fa-location-dot"></i><a href="https://goo.gl/maps/i2rghksVmoiwokDaA">Ground Floor, St. Peter's Church Guzape</a></li>
                            <li><i class="fa-regular fa-clock"></i><span>Mon - Sat: 8:30 am - 6:00 pm</span>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 align-self-center text-lg-end text-center">
                    <ul class="navbar-top-right header-links">
                        <li>
                            {{-- <i class="fa-regular fa-user"></i>
                                    <a href="login.html">Login</a> <span>/</span>
                                    <a href="signup.html">Register</a> --}}
                            <a href="{{ route('contact us') }}">Follow us</a>
                        </li>
                        <li>
                            <div class="header-social">
                                <a href="{{ route('welcome') }}#"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ route('welcome') }}#"><i class="fab fa-twitter"></i></a>
                                <a href="{{ route('welcome') }}#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{ route('welcome') }}#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                {{-- <a href="home-child-care.html"><img src="/assets/logo/logo_white_no_bg.png" alt="Paradise Hilltop"></a> --}}
                                <a href="home-child-care.html">
                                    <a href="{{ route('welcome') }}"><img src="/assets/logo/logo_white.jpeg" alt="Paradise Hilltop" width="125"></a>
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="menu-area">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        {{-- <li class="menu-item-has-children"> --}}
                                        <li>
                                            <a href="{{ url('/') }}">Home</a>
                                            {{-- <ul class="sub-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="home-child-care.html#">Multipage</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="home-child-care.html">Home Child Care</a></li>
                                                            <li><a href="home-child-care-center.html">Child Care Center</a></li>
                                                            <li><a href="home-modern-kindergarten.html">Modern Kindergarten</a></li>
                                                            <li><a href="home-kindergarten.html">New Kindergarten</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="home-child-care.html#">Onepage</a>
                                                        <ul class="sub-menu">
                                    <li><a href="home-child-care-onepage.html">Home Child Care</a></li>
                                    <li><a href="home-child-care-center-onepage.html">Child Care Center</a></li>
                                    <li><a href="home-modern-kindergarten-onepage.html">Modern Kindergarten</a></li>
                                    <li><a href="home-kindergarten-onepage.html">New Kindergarten</a></li>
                                </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="home-child-care.html#">RTL</a>
                                                        <ul class="sub-menu">
                                    <li><a href="home-child-care-rtl.html">Home Child Care Rtl</a></li>
                                    <li><a href="home-child-care-center-rtl.html">Child Care Center Rtl</a></li>
                                    <li><a href="home-modern-kindergarten-rtl.html">Modern Kindergarten Rtl</a></li>
                                    <li><a href="home-kindergarten-rtl.html">New Kindergarten Rtl</a></li>
                                    <li><a href="home-child-care-onepage-rtl.html">Home Child Care Onepage Rtl</a></li>
                                    <li><a href="home-child-care-center-onepage-rtl.html">Child Care Center Onepage Rtl</a></li>
                                    <li><a href="home-modern-kindergarten-onepage-rtl.html">Modern Kindergarten Onepage Rtl</a></li>
                                    <li><a href="home-kindergarten-rtl-onepage.html">New Kindergarten Onepage Rtl</a></li>
                                </ul>
                                                    </li>
                                                </ul> --}}
                                        </li>
                                        {{-- <li class="menu-item-has-children"> --}}
                                        <li>
                                            <a href="{{ url('/program') }}">Programs</a>
                                            {{-- <ul class="sub-menu">
                                                    <li><a href="event.html">Event</a></li>
                                                    <li><a href="event-details.html">Event Details</a></li>
                                                    <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="course.html">Courses</a></li>
                                                </ul> --}}
                                        </li>

                                        {{-- <li class="menu-item-has-children"> --}}


                                        {{-- <li>  --}}
                                        {{-- not yet available --}}
                                        {{-- <a href="{{ url('/team') }}">Team</a> --}}
                                        {{-- <ul class="sub-menu">
                                                    <li><a href="course.html">Classes</a></li>
                                                    <li><a href="course-details.html">Class Details</a></li>
                                                </ul> --}}
                                        {{-- </li> --}}


                                        {{-- <li class="menu-item-has-children">
                                                <a href="home-child-care.html#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                    <li><a href="event.html">Event</a></li>
                                                    <li><a href="event-details.html">Event Deatils</a></li>
                                                    <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="blog.html">Blog Page</a></li>
                                                    <li><a href="blog-details.html">Blog Details Page</a></li>
                                                    <li><a href="login.html">Log In Page</a></li>
                                                    <li><a href="signup.html">Sign Up Page</a></li>
                                                    <li><a href="error.html">Error Page</a></li>
                                                </ul>
                                            </li> --}}
                                        {{-- <li class="menu-item-has-children"> --}}

                                        {{-- <li>     --}}
                                        {{-- not available yet --}}
                                        {{-- <a href="{{ url('/event') }}">event</a> --}}

                                        {{-- futures --}}
                                        {{-- <ul class="sub-menu">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul> --}}
                                        {{-- </li> --}}
                                        {{-- not yet available --}}
                                        {{-- <li>    
                                                <a href="{{ url('/facility') }}">Facilities</a>
                                            </li> --}}

                                        {{-- unavailable --}}
                                        {{-- <li>
                                            <a href="{{ url('/gallery') }}">Gallery</a>
                                        </li> --}}
                                        {{-- not yet available --}}
                                        <li>
                                            <a href="{{ url('/blog') }}">blog</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/about') }}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/contact') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                                <button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">

                                {{-- <button type="button" class="icon-btn searchBoxToggler"><i class="fa-regular fa-magnifying-glass"></i></button> --}}
                                {{-- <button type="button" class="icon-btn bar-btn  sideMenuToggler">
                                        <i class="fa-regular fa-basket-shopping-simple"></i>
                                        <span class="badge">5</span>
                                    </button> --}}
                                <a href="{{ route('contact us') }}" class="as-btn d-none d-xl-block">Enroll</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-shape" data-bg-src="/assets/img/bg/header_bg_1.png">
            </div>
        </div>
    </div>
</header>
