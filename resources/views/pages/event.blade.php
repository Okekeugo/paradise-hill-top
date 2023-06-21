@extends('layouts.guest')

@section('main_content')
    <!--==============================
                Breadcumb
            ============================== -->
    {{-- @include('visitors.guest.event.partials.breadcumb_section') --}}
    <!--==============================
            Event Area
            ==============================-->
    @include('visitors.guest.event.partials.event_section')
    <!--********************************
           Code End  Here
         ******************************** -->
@endsection
