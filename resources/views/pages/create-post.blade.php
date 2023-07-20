@extends('layouts.guest')
{{-- <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css"> --}}
@section('main_content')
    <!--==============================
                                Contact Area
                                ==============================-->
    <div class="space-extra2-top contact-area space-bottom">
        <div class="container">
            <div class="row justify-content-center">
                @if (session('success'))
                    <div class="woocommerce-notices-wrapper">
                        <div class="woocommerce-message"> {{ session('success') }}</div>
                    </div>
                @endif

                <div class="col-xl-7 col-lg-8 order-lg-1">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="">
                        @csrf
                        <h2 class="fw-extrabold h3">Create New Post</h2>
                        <p>Fill the form below to Create a new blog post
                        </p>
                        <div class="row mt-35">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control style2" name="title" id="name"
                                        placeholder="Post title">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control style2" name="tags" id="tags"
                                        placeholder="Tags : Comma separated list eg. fashion, kids, learning, education, knowledge etc.">
                                </div>
                            </div>


                            <div class="media-files my-5">

                                <h5 class="">Media Files</h5>

                                <h6>Main Hero Image</h6>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control style2" name="default_img"
                                            id="default_img">
                                    </div>
                                </div>

                                <h6>Other Images</h6>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control style2" name="img1" id="img1">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control style2" name="img2" id="img2">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control style2" name="img3" id="img3">
                                    </div>
                                </div>

                            </div>

                            <div class="post-content my-4">

                                <h5>Post Content</h5>

                                <div class="form-group col-12">
                                    <textarea required placeholder="Paragraph 1" id="pg1" class="form-control style2" name="pg1"></textarea>
                                </div>

                                <div class="form-group col-12">
                                    <textarea required placeholder="Paragraph 2" id="pg2" class="form-control style2" name="pg2"></textarea>
                                </div>

                                <div class="form-group col-12">
                                    <textarea placeholder="Paragraph 3 (Optional)" id="pg3" class="form-control style2 capitalize" name="pg3"></textarea>
                                </div>

                                <div class="form-group col-12">
                                    <textarea placeholder="Paragraph 4 (Optional)" id="pg4" class="form-control style2 " name="pg4"></textarea>
                                </div>

                                <div class="form-group col-12">
                                    <textarea placeholder="Paragraph 5 (Optional)" id="pg5" class="form-control style2 " name="pg5"></textarea>
                                </div>
                            </div>


                            <div class="form-btn col-12">
                                <button class="as-btn capitalize">create post</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
