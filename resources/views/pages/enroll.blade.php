@extends('layouts.guest')
@section('main_content')
    {{-- <!--==============================
        Breadcumb
    ============================== -->
    @include('visitors.guest.enrollPage.partials.breadcumb_section') --}}

    <!--==============================
    Login Area  
    ==============================-->
    @include('visitors.guest.enrollPage.partials.login_section')
    @include('authy.login_section')
@endsection
