@extends('layouts.guest')

@section('main_content')

    <!--==============================
        ==============================
        Main Content
        ==============================
        ==============================-->


    <!--==============================
        About Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.about_section')

    <!--==============================
        Service Area
        ==============================-->
    {{-- @include('visitors.guest.welcomePage.partials.services_section') --}}

    <!--==============================
        Why-choose-us Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.why_choose_us_section')


     <!--==============================
        Security Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.why_choose_us_section')


    <!--==============================
        Course Area (dynamic page creation for every course)
        ==============================-->
    {{-- @include('visitors.guest.welcomePage.partials.course_area_section') --}}

    <!--==============================
        Call to Action Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.call_to_action_section')

    <!--==============================
        Team Area
        ==============================-->
    {{-- @include('visitors.guest.welcomePage.partials.team_section') --}}
    <!--==============================
        Testimonial Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.testimonial_section')
    <!--==============================
        Blog Area
        ==============================-->
    {{-- @include('visitors.guest.welcomePage.partials.blog_section') --}}

    <!--==============================
        Brand Area
        ==============================-->
    {{-- @include('visitors.guest.welcomePage.partials.brand_section') --}}


    <!--==============================
        ==============================
        / Main Content EOL
        ==============================
        ==============================-->
@endsection
