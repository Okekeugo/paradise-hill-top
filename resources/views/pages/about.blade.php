@extends('layouts.guest')

@section('main_content')
    <!--==============================
                    Breadcumb
                ============================== -->
    {{-- @include('visitors.guest.aboutPage.partials.breadcumb_section') --}}


    <!--==============================
                Welcome (Introduction) to About Us Area
                ==============================-->
    @include('visitors.guest.aboutPage.partials.intro_section')




    <!--==============================
                Mission Area
                ==============================-->
    @include('visitors.guest.aboutPage.partials.mission_section')




      <!--==============================
                Vision Area
                ==============================-->
    @include('visitors.guest.aboutPage.partials.vision_section')



    <!--==============================
                Services Area
                ==============================-->
    @include('visitors.guest.aboutPage.partials.services_section')




     <!--==============================
                About Area
                ==============================-->
    @include('visitors.guest.aboutPage.partials.about_section')


    {{-- (Unavailable ATM) --}}

    <!--==============================
                Service Area
                ==============================-->
    {{-- @include('visitors.guest.aboutPAge.partials.service_section') --}}

    <!--==============================
                Team Area 02 (Teachers)
                ==============================-->
    {{-- @include('visitors.guest.aboutPage.partials.team_section') --}}

    <!--==============================
                Activites Area
                ==============================-->
    {{-- @include('visitors.guest.aboutPage.partials.activity_section') --}}

    <!--==============================
                Brand Area
                ==============================-->
    {{-- @include('visitors.guest.aboutPage.partials.brand_Section') --}}
@endsection
