@extends('layouts.guest')
@section('custom_page_css')
     <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">

@endsection
@section('main_content')
    <!--==============================
        ==============================
        Main Content
        ==============================
        ==============================-->

    <!--==============================
        Hero Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.hero_section')
    <!--======== / Hero Section ========-->

    <!--==============================
        count-down Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.countdown_section')

    <!--==============================
        About Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.about_section')

    <!--==============================
        Service Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.services_section')

    <!--==============================
        Why-choose-us Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.why_choose_us_section')

    <!--==============================
        Course Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.course_area_section')

    <!--==============================
        Call to Action Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.call_to_action_section')

    <!--==============================
        Team Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.team_section')
    <!--==============================
        Testimonial Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.testimonial_section')
    <!--==============================
        Blog Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.blog_section')

    <!--==============================
        Brand Area
        ==============================-->
    @include('visitors.guest.welcomePage.partials.brand_section')


    <!--==============================
        ==============================
        / Main Content EOL
        ==============================
        ==============================-->
@endsection
