<!doctype html>
<html class="no-js" lang="zxx">
@include('visitors.guest.general_partials.head')

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!--********************************
    Code Start From Here
    ******************************** -->


    <!--==============================
     Preloader
    ==============================-->
    @include('visitors.guest.general_partials.preloader')
    <!--==============================
    Mobile Menu
    ============================== -->
    @include('visitors.guest.general_partials.mobile_menu')
    <!--==============================
    Sidemenu
    ============================== -->
    @include('visitors.guest.general_partials.cart_sidemenu')
    <!--==============================
    Header Area (Navigation)
    ==============================-->
    @include('visitors.guest.general_partials.navigation_header')

    @if (Route::currentRouteName() == 'welcome')
        <!--==============================
        Hero Area
        ==============================-->
        @include('visitors.guest.welcomePage.partials.hero_section')

        <!--==============================
        count-down Area
        ==============================-->
        {{-- @include('visitors.guest.welcomePage.partials.countdown_section') --}}
    @else
        <!--==============================
                Breadcumb
            ============================== -->

        @include('visitors.guest.general_partials.breadcumb_section')
    @endif
