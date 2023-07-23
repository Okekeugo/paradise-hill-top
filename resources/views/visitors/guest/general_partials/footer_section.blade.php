<footer class="footer-wrapper footer-layout1 remi" data-bg-href="/assets/img/bg/footer_bg_1.png">
    <div class="bg-shape-top">
        <img src="/assets/img/bg/header_bg_1.png" alt="img">
    </div>
    <div class="footer-top">
        <div class="container">
            <ul>
                <li>
                    <div class="footer-contact-wrap">
                        <div class="icon">
                            <img src="/assets/img/icon/phone.svg" alt="img">
                        </div>
                        <div class="details">
                            <p class="title">Give us a Call</p>
                            <p class="info">
                                <span class="text-sm">
                                    <a href="tel:+234706556944">+234 706 556 944</a>
                                </span>
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="footer-contact-wrap">
                        <div class="icon">
                            <img src="/assets/img/icon/envelope.svg" alt="img">
                        </div>
                        <div class="details">
                            <p class="title">Send us a Message</p>
                            <p class="info">
                                <span class="text-sm">
                                    <a href="mailto:info@paradisehilltop.com">info@paradisehilltop.com</a>
                                </span>

                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="footer-contact-wrap">
                        <div class="icon">
                            <img src="/assets/img/icon/home.svg" alt="img">
                        </div>
                        <div class="details">
                            <p class="title">Visit our Office</p>
                            <p class="info">
                                <span class="text-sm">
                                    St. Peter's Church, Guzape
                                </span>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xxl-3 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="as-widget-about">
                            <h3 class="widget_title">About Us</h3>
                            <p class="about-text">{{ env('CRECHE_COY') }} aims to bring out the best in your baby. We
                                give a high priority to the safety and security of our children.</p>
                            <div class="as-social">
                                <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="goggle" href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Details Info</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('about us') }}">About Us</a></li>
                                {{-- <li><a href="#">Careers</a></li> --}}
                                {{-- <li><a href="{{ route('gallery') }}">Gallery</a></li> --}}
                                {{-- <li><a href="{{ route('team') }}">teachers</a></li> --}}
                                <li><a href="{{ route('contact us') }}">Contact Us</a></li>
                                {{-- <li><a href="event.html">Resource Center</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">News Feed</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img href="/assets/img/widget/1.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>25th March,
                                            2023</a>
                                    </div>
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Mission
                                            critical action life items rather</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img href="/assets/img/widget/2.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>22 June, 2023</a>
                                    </div>
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Prepare
                                            Users Using Story Guide Yes</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Contact Now</h3>
                        <div class="newsletter-widget">
                            <p class="footer-text">Be the first one to receive latest updates
                                very easy and fastest
                            </p>
                            <div class="newsletter-form">
                                <input type="text" placeholder="Enter Your Email">
                                <button class="as-btn"><i class="far fa-envelope-open"></i></button>
                            </div>
                            <p class="info"><i class="fa-regular fa-circle-info"></i> We Never Publish Your Data
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap" data-bg-href="/assets/img/bg/copyright_bg.png">
        <div class="container">
            <p class="copyright-text text-center">Copyright <i class="fal fa-copyright"></i> 2023 By <a
                    href="{{ route('welcome') }}#">{{ env('SCHOOL_NAME') }}</a>. All Rights Reserved.</p>
        </div>
    </div>
</footer>
