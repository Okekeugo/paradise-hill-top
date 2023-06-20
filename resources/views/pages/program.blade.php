@extends('layouts.guest')

@section('main_content')
    <!--==============================
        Breadcumb
    ============================== -->
    @include('visitors.guest.programPage.partials.breadcumb_section')
    <!--==============================
    Event Area
    ==============================-->
    @include('visitors.guest.programPage.partials.event_section')
    <!--==============================
        Footer Area
    ==============================-->
    @include('visitors.guest.general_partials.footer_section')

    <!--********************************
   Code End  Here
 ******************************** -->
@endsection