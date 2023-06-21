@extends('layouts.guest')

@section('main_content')
    <!--==============================
        Breadcumb
    ============================== -->
    {{-- @include('visitors.guest.facilitiesPage.partials.breadcumb_section') --}}

    <!--==============================
    facilities Area  
    ==============================-->
    @include('visitors.guest.facilitiesPage.partials.gallery_section')

@endsection