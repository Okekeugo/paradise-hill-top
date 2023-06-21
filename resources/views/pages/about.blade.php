@extends('layouts.guest')

@section('main_content')
    <!--==============================
                Breadcumb
            ============================== -->
    {{-- @include('visitors.guest.aboutPage.partials.breadcumb_section') --}}


    <!--==============================
            About Area
            ==============================-->
    @include('visitors.guest.aboutPage.partials.about_section')

    <!--==============================
            Service Area
            ==============================-->
    @include('visitors.guest.aboutPAge.partials.service_section')

    <!--==============================
            Team Area 02
            ==============================-->
    @include('visitors.guest.aboutPage.partials.team_section')

    <!--==============================
            Activites Area
            ==============================-->
    @include('visitors.guest.aboutPage.partials.activity_section')

    <!--==============================
            Brand Area
            ==============================-->
    @include('visitors.guest.aboutPage.partials.brand_Section')
@endsection
