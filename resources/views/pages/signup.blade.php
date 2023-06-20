@extends('layouts.guest')
@section('main_content')
    <!--==============================
        Breadcumb
    ============================== -->
    @include('visitors.guest.signupPage.partials.breadcumb_section')

    <!--==============================
    Login Area  
    ==============================-->
    @include('visitors.guest.signupPage.partials.login_section')
@endsection
