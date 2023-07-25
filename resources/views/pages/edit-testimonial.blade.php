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
                @if (session('success') or session('failed'))
                    <div class="woocommerce-notices-wrapper mb-5">
                        <div class="{{ session('success') ? 'woocommerce-message' : 'alert alert-danger' }}">
                            {{ session('success') ?? session('failed') }}</div>
                    </div>
                @endif
                <div class="col-xl-7 col-lg-8 order-lg-1">
                    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="post"
                        enctype="multipart/form-data" class="">
                        @csrf @method('patch')
                        <div class="d-flex justify-content-between ">
                            <h2 class="fw-extrabold h3">Edit testimonial</h2>
                            <h2 class="fw-extrabold h4 text-danger">
                                <a href="{{ route('testimonials.destroy', $testimonial->id) }}" class="text-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </h2>
                        </div>

                        <p class="my-5">Modify the Contents of your testimonial here</p>
                        <p class="text-center my-5">You're currently editing testimonial for : </p>
                        <h3 class="text-center my-5"> {{ "$testimonial->client_fname $testimonial->client_lname" }}</h3>
                        <div class="row mt-35">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="client_fname">Client First Name:</label>
                                    <input type="text" class="form-control style2" name="client_fname" id="client_fname"
                                        placeholder="Client First Name" value="{{ $testimonial->client_fname }}">
                                </div>

                                <div class="form-group">
                                    <label for="client_lname">Client Last Name:</label>
                                    <input type="text" class="form-control style2" name="client_lname" id="client_lname"
                                        placeholder="Client Last Name" value="{{ $testimonial->client_lname }}">
                                </div>

                                <div class="form-group">
                                    <label for="client_role">Client Role:</label>
                                    <input type="text" class="form-control style2" name="client_role" id="client_role"
                                        placeholder="Client Last Name" value="{{ $testimonial->client_role }}">
                                </div>
                            </div>

                            <div class="media-files my-5">

                                <h5 class="">Media Files</h5>

                                <h6>Client Image</h6>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @if ($testimonial->client_img)
                                            <p>current file</p>
                                            <img src="{{ $testimonial->client_img }}" alt="client_img" width="400">
                                            {{-- <a type="button" class="btn"
                                                href="{{ route('testimonial_img.delete', ['testimonial_id' => $testimonial->id]) }}">
                                                <i class="fa fa-trash text-danger fa-lg cursor-pointer"
                                                    name="client_img"></i>
                                            </a> --}}
                                        @else
                                            <p class="">This client has no image</p>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control style2" name="client_img" id="client_img">
                                    </div>

                                </div>

                                {{-- <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control style2" name="img0" id="img0">
                                    </div>
                                </div> --}}

                            </div>

                            <div class="testimonial-content my-4">

                                <h5> Client testimonial (Message)</h5>

                                <div class="form-group col-12">
                                    <textarea required placeholder="Client message" id="client_message" class="form-control style2" name="client_message">{{ $testimonial->client_message }}</textarea>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="password">Enter Password:</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <div class="form-btn col-12">
                                <button class="as-btn capitalize">Update testimonial</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
