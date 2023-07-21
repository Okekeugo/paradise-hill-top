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
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data"
                        class="">
                        @csrf @method('patch')
                        <div class="d-flex justify-content-between ">
                            <h2 class="fw-extrabold h3">Edit Post</h2>
                            <h2 class="fw-extrabold h4 text-danger">
                                <a href="{{ route('posts.destroy', $post->id) }}" class="text-danger">
                                    Delete Post
                                    <i class="fa fa-skull "></i>
                                </a>
                            </h2>
                        </div>

                        <p>Modify the Contents of your post here</p>
                        <p class="text-center">You're currently editing : </p>
                        <h3 class="text-center"> {{ $post->title }}</h3>
                        <div class="row mt-35">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Post Title:</label>
                                    <input type="text" class="form-control style2" name="title" id="name"
                                        placeholder="Post title" value="{{ $post->title }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="tags">Tags:</label>
                                    <input type="text" class="form-control style2" name="tags" id="tags"
                                        value="{{ $post->tags }}"
                                        placeholder="Tags : Comma separated list eg. fashion, kids, learning, education, knowledge etc.">
                                </div>
                            </div>


                            <div class="media-files my-5">

                                <h5 class="">Media Files</h5>

                                <h6>Main Hero Image</h6>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p>current file</p>
                                        @if ($post->default_img)
                                            <img src="{{ $post->default_img }}" alt="post_default_img" width="400">
                                            <a type="button" class="btn"
                                                href="{{ route('img.delete', ['post_id' => $post->id, 'imgkey' => 'default_img']) }}">
                                                <i class="fa fa-trash text-danger fa-lg cursor-pointer"
                                                    name="default_img"></i>
                                            </a>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control style2" name="default_img"
                                            id="default_img">
                                    </div>

                                </div>

                                <h6>Other Images</h6>
                                <div class="form-group">
                                    <p>current files (3 files max)</p>
                                    <div class="d-flex">
                                        @if ($post->img1)
                                            <div class="mx-2">
                                                <div class="">
                                                    <img src="{{ $post->img1 }}" alt="img1" width="200">
                                                </div>
                                                <a type="button" class="btn"
                                                    href="{{ route('img.delete', ['post_id' => $post->id, 'imgkey' => 'img1']) }}">
                                                    <i class="fa fa-trash text-danger fa-lg cursor-pointer"
                                                        name="img1"></i>
                                                </a>
                                            </div>
                                        @endif

                                        @if ($post->img2)
                                            <div class="mx-2">
                                                <div class="">
                                                    <img src="{{ $post->img2 }}" alt="im2" width="200">
                                                </div>
                                                <a type="button" class="btn"
                                                    href="{{ route('img.delete', ['post_id' => $post->id, 'imgkey' => 'img2']) }}">
                                                    <i class="fa fa-trash text-danger fa-lg cursor-pointer"
                                                        name="img2"></i>
                                                </a>
                                            </div>
                                        @endif

                                        @if ($post->img3)
                                            <div class="mx-2">
                                                <div class="">
                                                    <img src="{{ $post->img3 }}" alt="img3" width="200">
                                                </div>
                                                <a type="button" class="btn"
                                                    href="{{ route('img.delete', ['post_id' => $post->id, 'imgkey' => 'img3']) }}">
                                                    <i class="fa fa-trash text-danger fa-lg cursor-pointer"
                                                        name="img3"></i>
                                                </a>
                                            </div>
                                        @endif

                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control style2" name="img0" id="img0">
                                    </div>
                                </div>

                            </div>

                            <div class="post-content my-4">

                                <h5>Post Content</h5>

                                <div class="form-group col-12">
                                    <textarea required placeholder="Paragraph 1" id="pg1" class="form-control style2" name="pg1">{{ $post->pg1 }}</textarea>
                                </div>

                                <div class="form-group col-12">
                                    <textarea required placeholder="Paragraph 2" id="pg2" class="form-control style2" name="pg2">{{ $post->pg2 }}</textarea>
                                </div>

                                <div class="form-group col-12">
                                    <textarea placeholder="Paragraph 3 (Optional)" id="pg3" class="form-control style2" name="pg3">{{ $post->pg3 ?? '' }}</textarea>
                                </div>

                                <div class="form-group col-12">
                                    <textarea placeholder="Paragraph 4 (Optional)" id="pg4" class="form-control style2 " name="pg4">{{ $post->pg4 ?? '' }}</textarea>
                                </div>

                                <div class="form-group col-12">
                                    <textarea placeholder="Paragraph 5 (Optional)" id="pg5" class="form-control style2 " name="pg5">{{ $post->pg5 ?? '' }}</textarea>
                                </div>
                            </div>


                            <div class="form-btn col-12">
                                <button class="as-btn capitalize">Update post</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
