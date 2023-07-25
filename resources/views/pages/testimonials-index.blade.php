@extends('layouts.guest')

@section('main_content')
    <!--==============================
                                                Admin testimonials Area
                                                ==============================-->
    <div class="as-cart-wrapper space-extra2-top space-bottom">
        <div class="container">
            @if (session('success'))
                <div class="woocommerce-notices-wrapper">
                    <div class="woocommerce-message"> {{ session('success') }}</div>
                </div>
            @endif
            <div class="bg-success text-white p-3 h6 d-flex justify-content-between">
                <div class="left">All Client Testimonials</div>
                <a class="right text-white" href="{{ route('testimonials.create') }}">
                    <i class="fa fa-plus"></i>
                    Add New Testimonial
                </a>
            </div>
            {{-- <form action="#" class="woocommerce-cart-form"> --}}
            <table class="cart_table">
                <thead>
                    <tr>
                        <th class="cart-col-image">Image</th>
                        <th class="cart-col-productname">First Name</th>
                        <th class="cart-col-productname">Last Name</th>
                        <th class="cart-col-productname">Role </th>
                        <th class="cart-col-quantity">View</th>
                        <th class="cart-col-price">Edit</th>
                        {{-- <th class="cart-col-price">tags</th> --}}
                        {{-- <th class="cart-col-total">Images</th> --}}
                        <th class="cart-col-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_testimonials as $testimonial)
                        <tr class="cart_item">
                            <td data-title="Client Image">
                                <a class="cart-testimonialimage" href="shop-details.html"><img width="91" height="91"
                                        src="{{ $testimonial->client_img ?? '' }}" alt="Image"></a>
                            </td>
                            <td data-title="Client First Name">
                                <a class="testimonial" href="shop-details.html">{{ $testimonial->client_fname }}</a>
                            </td>

                            <td data-title="Client Last Name">
                                <a class="testimonial" href="shop-details.html">{{ $testimonial->client_lname }}</a>
                            </td>

                            <td data-title="Client Role">
                                <a class="testimonial" href="shop-details.html">{{ $testimonial->client_role }}</a>
                            </td>

                            {{-- View testimonial Link --}}
                            <td data-title="View">
                                <a href="{{ route('welcome') }}#testimonial_section" class="amount">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>

                            {{-- Edit testimonial Link --}}
                            <td data-title="Edit">
                                <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="amount">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>

                            <td data-title="Remove">
                                <a href="{{ route('testimonials.destroy', $testimonial->id) }}" class="remove"><i
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
