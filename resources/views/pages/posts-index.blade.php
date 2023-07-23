@extends('layouts.guest')

@section('main_content')
    <!--==============================
                                        Admin Posts Area
                                        ==============================-->
    <div class="as-cart-wrapper space-extra2-top space-bottom">
        <div class="container">
            @if (session('success'))
                <div class="woocommerce-notices-wrapper">
                    <div class="woocommerce-message"> {{ session('success') }}</div>
                </div>
            @endif
            <div class="bg-success text-white p-3 h6 d-flex justify-content-between">
                <div class="left">All Posts</div>
                <a class="right text-white" href="{{ route('Create Post') }}">
                    <i class="fa fa-plus"></i> Add New Post
                </a>
            </div>
            {{-- <form action="#" class="woocommerce-cart-form"> --}}
            <table class="cart_table">
                <thead>
                    <tr>
                        <th class="cart-col-image">Image</th>
                        <th class="cart-col-productname">Post Title</th>
                        <th class="cart-col-quantity">View</th>
                        <th class="cart-col-price">Edit</th>
                        {{-- <th class="cart-col-price">tags</th> --}}
                        {{-- <th class="cart-col-total">Images</th> --}}
                        <th class="cart-col-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_posts as $post)
                        <tr class="cart_item">
                            <td data-title="Post">
                                <a class="cart-postimage" href="shop-details.html"><img width="91" height="91"
                                        src="{{ $post->default_img }}" alt="Image"></a>
                            </td>
                            <td data-title="Title">
                                <a class="cart-posttitle" href="shop-details.html">{{ $post->title }}</a>
                            </td>

                            {{-- View Post Link --}}
                            <td data-title="View">
                                <a href="{{ route('blog.show', $post->id) }}" class="amount">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                            {{-- Edit Post Link --}}
                            <td data-title="Edit">
                                <a href="{{ route('posts.edit', $post->id) }}" class="amount">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>

                            <td data-title="Remove">
                                <a href="{{ route('posts.destroy', $post->id) }}" class="remove"><i
                                        class="fal fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- </form> --}}
        </div>
    </div>
@endsection
