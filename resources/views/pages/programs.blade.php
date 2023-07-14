@extends('layouts.guest')

@section('main_content')
    <!--==============================
                Mission Area
                ==============================-->
    @include('visitors.guest.programPage.partials.age_section')


      <!--==============================
                Our Services Area
                ==============================-->

    @include('visitors.guest.programPage.partials.services_section')



     <!--==============================
                Daily Activities Area
                ==============================-->

    @include('visitors.guest.programPage.partials.event_section')


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
