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
                    <div class="woocommerce-notices-wrapper">
                        <div class="{{ session('success') ? 'woocommerce-message' : 'alert alert-danger' }}">
                            {{ session('success') ?? session('failed') }}</div>
                    </div>
                @endif

                <div class="col-xl-7 col-lg-8 order-lg-1">
                    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data" class="">
                        @csrf
                        <h2 class="fw-extrabold h3">Create New Testimonial</h2>
                        <p>Fill the form below to create a new client testimonial
                        </p>
                        <div class="row mt-35">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="client_fname">Client First Name :</label>
                                    <input type="text" class="form-control style2" name="client_fname" id="client_lname"
                                        placeholder="first name eg. peter">
                                    @error('client_fname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="client_lname">Client Last Name :</label>
                                    <input type="text" class="form-control style2" name="client_lname" id="client_lname"
                                        placeholder="last name eg. paul">
                                    @error('client_lname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                            <div class="media-files my-5">

                                <h5 class="">Media Files</h5>

                                <h6>Client Image</h6>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" class="form-control style2" name="client_img" id="client_img">
                                        @error('client_img')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="post-content my-4">

                                <h5>Testimonial Message</h5>

                                <div class="form-group col-12">
                                    <textarea required placeholder="Client message goes here" id="client_message" class="form-control style2" name="client_message"></textarea>
                                    @error('client_message')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="client_role">Client Role : <small>Occcupation also allowed</small></label>
                                    <input type="text" class="form-control style2" name="client_role" id="client_role"
                                        placeholder="eg. Guardian(Doctor), Parent(Civil Engineer), caregiver etc">
                                    @error('client_role')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">Editor (Admin) Password:</label>
                                    <input type="password" id="password" name="password" required>
                                    @error('pg1')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
