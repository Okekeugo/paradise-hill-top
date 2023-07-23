<?php use Carbon\Carbon; ?>
<section class="as-blog-wrapper space-extra2-top space-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                @foreach ($all_posts as $post)
                    <div class="as-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="{{ route('blog.show', 'blog_id') }}">
                                <img src="{{ $post->default_img }}" alt="Blog Image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fa-regular fa-user"></i>By Admin</a>
                                <a href="blog.html"><i class="fa-light fa-calendar-days"></i>{{ $post->created_at }}</a>
                                <a href="blog.html"><i class="fa-regular fa-tags"></i>{{ $post->tags }} </a>
                                {{-- <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(3)</a> --}}
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blog.show', 'blog_id') }}">{{ $post->title }}</a>
                            </h2>
                            <p class="blog-text">{{ $post->pg1 }}</p>
                            <a href="{{ route('blog.show', $post->id) }}" class="read-more-btn">Read More <i
                                    class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach

                {{-- Youtube link video --}}
                {{-- <div class="as-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="{{ route('blog.show', 'blog_id') }}"><img src="/assets/img/blog/blog-s-1-2.png"
                                alt="Blog Image"></a>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                class="fas fa-play"></i></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ route('blog') }}"><i class="fa-regular fa-user"></i>Tayde </a>
                            <a href="{{ route('blog.show', 'blog_id') }}"><i
                                    class="fa-regular fa-tags"></i>Children</a>
                            <a href="{{ route('blog') }}"><i class="fal fa-calendar-alt"></i>22 June, 2023</a>
                        </div>
                        <h2 class="blog-title"><a href="{{ route('blog.show', 'blog_id') }}">Child education always
                                grow ideas for
                                knowledge sources
                                redefine distributed services</a>
                        </h2>
                        <p class="blog-text">Child education in today’s world, building a business also means you’ll
                            need a strong website and media presence. These can help you learn your customers better.
                            With them, you can even request customers’ email addresses so you can reach</p>
                        <a href="{{ route('blog.show', 'blog_id') }}" class="read-more-btn">Read More <i
                                class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div> --}}



                {{-- Link to soundcloud(audio) --}}
                {{-- <div class="as-blog blog-single has-post-thumbnail">
                    <div class="blog-audio">
                        <iframe title="Tell Me U Luv Me (with Trippie Redd) by Juice WRLD"
                            src="https://w.soundcloud.com/player/?visual=true&amp;url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F830279092&amp;show_artwork=true&amp;maxwidth=751&amp;maxheight=1000&amp;dnt=1"></iframe>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="{{ route('blog') }}"><i class="fa-regular fa-user"></i>Tayde </a>
                            <a href="{{ route('blog.show', 'blog_id') }}"><i
                                    class="fa-regular fa-tags"></i>Children</a>
                            <a href="{{ route('blog') }}"><i class="fal fa-calendar-alt"></i>12 July, 2023</a>
                        </div>
                        <h2 class="blog-title"><a href="{{ route('blog.show', 'blog_id') }}">Always Grow
                                Ideas For Child Education Knowledge models transparent sources
                            </a>
                        </h2>
                        <p class="blog-text">Always grow in today’s world, building a business also means you’ll need a
                            strong website and social media presence. These can help you learn your customers better.
                            Which upon sad wight concubines. With them, you can even request customers’ email addresses
                            so you can reach</p>
                        <a href="{{ route('blog.show', 'blog_id') }}" class="read-more-btn">Read More <i
                                class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div> --}}

                {{-- pagination section --}}
                {{-- <div class="as-pagination text-center pt-20">
                    <ul>
                        <li><a href="{{ route('blog') }}"><i class="fa-regular fa-angles-left"></i></a></li>
                        <li><a href="{{ route('blog') }}">1</a></li>
                        <li><a href="{{ route('blog') }}">2</a></li>
                        <li><a href="{{ route('blog') }}">3</a></li>
                        <li><a href="{{ route('blog') }}"><i class="fa-solid fa-ellipsis"></i></a></li>
                        <li><a href="{{ route('blog') }}">10</a></li>
                        <li><a href="{{ route('blog') }}"><i class="fa-regular fa-angles-right"></i></a></li>
                    </ul>
                </div> --}}
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    {{-- <div class="widget widget_search">
                        <form class="search-form">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div> --}}

                    {{-- <div class="widget widget_categories  ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="{{ route('blog') }}"><i class="fa-solid fa-circle-chevron-right"></i>Day
                                    Care Kids</a>
                                <span>10</span>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}"><i class="fa-solid fa-circle-chevron-right"></i>Online
                                    Education</a>
                                <span>07</span>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}"><i class="fa-solid fa-circle-chevron-right"></i>Pre
                                    School
                                    Works</a>
                                <span>05</span>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}"><i class="fa-solid fa-circle-chevron-right"></i>Outdoor
                                    Playing</a>
                                <span>02</span>
                            </li>
                        </ul>
                    </div> --}}

                    <div class="widget  ">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            @foreach ($all_posts as $post)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blog.show', 'blog_id') }}"><img
                                                src="/assets/img/blog/recent-post-1-1.png" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blog') }}"><i class="fal fa-calendar-days"></i>21 June,
                                                2023</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit"
                                                href="{{ route('blog.show', 'blog_id') }}">Extend
                                                market really
                                                driven exam results</a></h4>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    {{-- <div class="widget widget_tag_cloud   ">
                        <h3 class="widget_title">Tags</h3>
                        <div class="tagcloud">
                            <a href="{{ route('blog') }}">UI/UX</a>
                            <a href="{{ route('blog') }}">Services</a>
                            <a href="{{ route('blog') }}">Tools</a>
                            <a href="{{ route('blog') }}">Product</a>
                            <a href="{{ route('blog') }}">Solution</a>
                            <a href="{{ route('blog') }}">Combo</a>
                            <a href="{{ route('blog') }}">Car</a>
                            <a href="{{ route('blog') }}">Repair</a>
                            <a href="{{ route('blog') }}">Tools</a>
                        </div>
                    </div> --}}

                    {{-- <div class="widget widget_banner">
                        <div class="banner">
                            <img class="w-100" src="/assets/img/blog/widget-banner.png" alt="banner">
                        </div>
                        <div class="content">
                            <span class="text-theme">Hurry Up</span>
                            <h3>Get 20% Off</h3>
                        </div>
                        <a href="contact.html" class="as-btn">Appointment</a>
                    </div> --}}
                </aside>
            </div>
        </div>
    </div>
</section>
