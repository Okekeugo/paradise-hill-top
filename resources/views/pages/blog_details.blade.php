@extends('layouts.guest')

@section('main_content')
    <!--==============================
                                                                                                            Blog Area
                                                                                                        ==============================-->
    <section class="as-blog-wrapper blog-details space-extra2-top space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    {{-- <div class="as-blog blog-single">
                        <div class="blog-img">
                            <img src="/assets/img/blog/blog_inner_1.png" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="javascript:void(0)"><i class="fa-regular fa-user"></i>By Thomas</a>
                                <a href="javascript:void(0)"><i class="fa-light fa-calendar-days"></i>June 21, 2023</a>
                                <a href="javascript:void(0)"><i class="fa-regular fa-tags"></i>Kids, Education, Knowledge</a>
                                <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments(3)</a>
                            </div>
                            <h2 class="blog-title">Education Knowledge Always Grow
                                Ideas For Child :: {{ $post->title }}</h2>
                            <p>Can get a better understanding of what already exists in your industry by analyzing competing
                                goods or services. This can direct you toward ways to strengthen your concept. Before
                                investing time and money in its creation, it can also help you identify its weak points.
                                During this process, be sure to take note of your competitors' prices. This will give you a
                                range of how much customers are currently paying for comparable products.
                            </p>
                            <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat, quis
                                nostrud enim ad minim veniam. Nulla pariatur fugiat Duis aute irure dolor in reprehenderit
                                in voluptate velit esse cillum dolore. Exceptionally, non-proident cupidatat. Develop
                                collaborative platforms with intermandated networks quickly. Reengineer cross-media markets
                                rather than viral models monotonectally.</p>
                            <p>It's time to take your business to the next level by becoming official once you've put a lot
                                of effort into researching your idea and are confident that it has the potential to succeed
                                in the market. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, even though the inventor was truthful and nearly
                                perfect. Create collaborative platforms with intermandated speed.</p>
                            <div class="row mt-30">
                                <div class="col-lg-6">
                                    <div class="blog-img">
                                        <img src="/assets/img/blog/blog_1_1.png" alt="Blog Image">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="blog-img">
                                        <img src="/assets/img/blog/blog_1_2.png" alt="Blog Image">
                                    </div>
                                </div>
                            </div>
                            <p>May be able to improve your idea as a result of this. Before you invest time and money in
                                making your product or service, it can also help you identify its weak points. While doing
                                this, be sure to keep track of your competitors' prices. quickly design platforms for
                                collaboration with intermandated.</p>
                            <blockquote>
                                <p>You can get a sense of what already exists in your industry by examining similar goods or
                                    services. Finding ways to strengthen your mental image can help.</p>
                                <cite><span>Written by </span>
                                    Md. Amiruzzaman</cite>
                                <img class="quote-icon" src="/assets/img/blog/quote.png" alt="quote">
                            </blockquote>
                            <p>Before investing time and money in its creation, it can also help you identify its weak
                                points. During this process, be sure to take note of your competitors' prices. This will
                                give you a range of how much customers are currently paying for comparable products. </p>
                        </div>
                        <div class="share-links clearfix ">
                            <div class="row justify-content-between">
                                <div class="col-sm-auto">
                                    <span class="share-links-title">Related Tags:</span>
                                    <div class="tagcloud">
                                        <a href="javascript:void(0)">Business</a>
                                        <a href="javascript:void(0)">Growth</a>
                                        <a href="javascript:void(0)">Focus</a>
                                    </div>
                                </div>
                                <div class="col-sm-auto text-md-end">
                                    <span class="share-links-title">Share:</span>
                                    <div class="as-social">
                                        <a class="facebook" href="blog-details.html#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="twitter" href="blog-details.html#"><i class="fab fa-twitter"></i></a>
                                        <a class="linkedin" href="blog-details.html#"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="instagram" href="blog-details.html#"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div><!-- End Social Share -->
                                </div><!-- Share Links Area end -->
                            </div>
                        </div>
                        <div class="as-blog-author">
                            <div class="media">
                                <div class="media-left">
                                    <img src="/assets/img/blog/author_1.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <span class="cite">Written by</span>
                                    <h3 class="name">David Young</h3>
                                    <p class="content">Transparent architectures are delayed monotonectally in favor of
                                        viable parallel opportunities. Throughout this process, work in progressively
                                        parallel with mindshare-based, 24/7/365 online markets to provide you.</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="as-blog blog-single">
                        <div class="blog-img">
                            <img src="{{ $post->default_img }}" alt="Blog Image" class="w-full">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="javascript:void(0)"><i class="fa-regular fa-user"></i>By Admin</a>
                                <a href="javascript:void(0)"><i
                                        class="fa-light fa-calendar-days"></i>{{ $post->created_at }}</a>
                                <a href="javascript:void(0)"><i class="fa-regular fa-tags"></i>{{ $post->tags }} </a>
                                {{-- <a href="javascript:void(0)"><i class="fa-regular fa-comments"></i>Comments(3)</a> --}}
                            </div>
                            <h2 class="blog-title">{{ $post->title }}</h2>
                            <p>{{ $post->pg1 }}</p>
                            <p>{{ $post->pg2 }}</p>
                            <p>{{ $post->pg3 }}</p>

                            @if ($post->img1 or $post->img2)
                                <div class="row mt-30">
                                    @if ($post->img1 && !$post->img2 or !$post->img1 && $post->img2)
                                        <div class="col-lg-12">
                                            <div class="blog-img">
                                                <img src="{{ $post->img1 ?? $post->img2 }}" alt="Blog Image" class="w-full">
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-lg-6">
                                            <div class="blog-img">
                                                <img src="{{ $post->img1 }}" alt="Blog Image">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="blog-img">
                                                <img src="{{ $post->img2 }}" alt="Blog Image">
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            @endif
                            <p>{{ $post->pg4 }}</p>
                            @if ($post->img3)
                                <div class="row mt-30">
                                    <div class="col-lg-12">
                                        <div class="blog-img">
                                            <img src="{{ $post->img3 }}" alt="Blog Image" class="w-full">
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <p>{{ $post->pg5 }}</p>

                            {{-- <blockquote>
                                <p>You can get a sense of what already exists in your industry by examining similar goods or
                                    services. Finding ways to strengthen your mental image can help.</p>
                                <cite><span>Written by </span>
                                    Md. Amiruzzaman</cite>
                                <img class="quote-icon" src="/assets/img/blog/quote.png" alt="quote">
                            </blockquote> --}}

                        </div>
                        <div class="share-links clearfix ">
                            <div class="row justify-content-between">
                                <div class="col-sm-auto">
                                    <span class="share-links-title">Related Tags:</span>
                                    <div class="tagcloud">
                                        {{-- <a href="javascript:void(0)">Business</a>
                                        <a href="javascript:void(0)">Growth</a>
                                        <a href="javascript:void(0)">Focus</a> --}}
                                        @foreach (explode(',', $post->tags) as $tag)
                                            <a href="javascript:void(0)">{{ $tag }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- share post to other social media platforms --}}
                                {{-- <div class="col-sm-auto text-md-end">
                                    <span class="share-links-title">Share:</span>
                                    <div class="as-social">
                                        <a class="facebook" href="blog-details.html#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="twitter" href="blog-details.html#"><i class="fab fa-twitter"></i></a>
                                        <a class="linkedin" href="blog-details.html#"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="instagram" href="blog-details.html#"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </div><!-- End Social Share -->
                                </div><!-- Share Links Area end --> --}}
                            </div>
                        </div>

                        {{-- section for blog author --}}
                        {{-- <div class="as-blog-author">
                            <div class="media">
                                <div class="media-left">
                                    <img src="/assets/img/blog/author_1.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <span class="cite">Written by</span>
                                    <h3 class="name">David Young</h3>
                                    <p class="content">Transparent architectures are delayed monotonectally in favor of
                                        viable parallel opportunities. Throughout this process, work in progressively
                                        parallel with mindshare-based, 24/7/365 online markets to provide you.</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    {{-- futures : comment functionality --}}

                    {{-- <div class="as-comments-wrap ">
                        <h2 class="blog-inner-title fw-extrabold h3">3 Comments</h2>
                        <ul class="comment-list">
                            <li class="as-comment-item">
                                <div class="as-post-comment">
                                    <div class="comment-avater">
                                        <img src="/assets/img/blog/comment-author-1.png" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on"><i class="fal fa-calendar-alt"></i>14 March, 2023</span>
                                        <h3 class="name">David Malan</h3>
                                        <p class="text">Collaboratively empower multifunctional e-commerce for prospective
                                            applications. Seamlessly productivate plug and play markets.</p>
                                        <div class="reply_and_edit">
                                            <a href="blog-details.html" class="reply-btn"><i
                                                    class="fas fa-reply"></i>Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="as-comment-item">
                                        <div class="as-post-comment">
                                            <div class="comment-avater">
                                                <img src="/assets/img/blog/comment-author-2.png" alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <span class="commented-on"><i class="fal fa-calendar-alt"></i>15 March,
                                                    2023</span>
                                                <h3 class="name">Enna Marco</h3>
                                                <p class="text">Competently provide access to fully researched methods of
                                                    empowerment
                                                    without sticky models.</p>
                                                <div class="reply_and_edit">
                                                    <a href="blog-details.html" class="reply-btn"><i
                                                            class="fas fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="as-comment-item">
                                <div class="as-post-comment">
                                    <div class="comment-avater">
                                        <img src="/assets/img/blog/comment-author-3.png" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on"><i class="fal fa-calendar-alt"></i>16 March,
                                            2023</span>
                                        <h3 class="name">Sowat Ahsan</h3>
                                        <p class="text">Collaboratively empower multifunctional e-commerce for
                                            prospective applications. Seamlessly productivate plug and play markets.</p>
                                        <div class="reply_and_edit">
                                            <a href="blog-details.html" class="reply-btn"><i
                                                    class="fas fa-reply"></i>Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- Comment end --> --}}
                    <!-- Comment Form -->
                    {{-- <div class="as-comment-form mt-50">
                        <div class="form-title">
                            <h3 class="blog-inner-title fw-extrabold mb-3"> Leave A Comment</h3>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group style-2">
                                <textarea placeholder="Write a Message" class="form-control style-pink"></textarea>
                                <i class="fal fa-pencil form-icon-left"></i>
                            </div>
                            <div class="col-md-6 form-group style-2">
                                <input type="text" placeholder="Your Name" class="form-control style-pink">
                                <i class="fal fa-user form-icon-left"></i>
                            </div>
                            <div class="col-md-6 form-group style-2">
                                <input type="text" placeholder="Your Email" class="form-control style-pink">
                                <i class="fal fa-envelope form-icon-left"></i>
                            </div>
                            <div class="col-12 form-group style-2">
                                <input type="text" placeholder="Website" class="form-control style-pink">
                                <i class="fal fa-globe form-icon-left"></i>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button class="as-btn"><i class="fa-light fa-paper-plane me-2"></i>Post Comment</button>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">

                        {{-- search widget --}}
                        {{-- <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div> --}}

                        {{-- <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-regular fa-circle-chevron-right"></i>Day Care
                                        Kids</a>
                                    <span>10</span>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-regular fa-circle-chevron-right"></i>Online
                                        Education</a>
                                    <span>07</span>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-regular fa-circle-chevron-right"></i>Pre School
                                        Works</a>
                                    <span>05</span>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="fa-regular fa-circle-chevron-right"></i>Outdoor
                                        Playing</a>
                                    <span>02</span>
                                </li>
                            </ul>
                        </div> --}}

                        <div class="widget  ">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($all_posts as $post)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="{{ route('blog.show', $post->id) }}">
                                                <img src="{{ $post->default_img }}" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="recent-post-meta">
                                                <a href="javascript:void(0)"><i class="fal fa-calendar-days"></i>
                                                    {{ $post->created_at }}
                                                </a>
                                            </div>
                                            <h4 class="post-title">
                                                <a class="text-inherit" href="{{ route('blog.show', $post->id) }}">
                                                    {{ $post->title }}
                                                </a>
                                            </h4>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud   ">
                            <h3 class="widget_title">Tags</h3>
                            <div class="tagcloud">
                                @foreach (explode(',', $post->tags) as $tag)
                                    <a href="javascript:void(0)">{{ $tag }}</a>
                                @endforeach
                            </div>
                        </div>

                        {{-- promo section --}}
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
@endsection
