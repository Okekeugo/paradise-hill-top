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
 Header Area
    ==============================-->
    @include('visitors.guest.general_partials.navigation_header')

    <!--==============================
        Breadcumb
    ============================== -->
    @include('visitors.guest.event.partials.breadcumb_section')
    <!--==============================
    Event Area
    ==============================-->
    @include('visitors.guest.event.partials.event_section')
    <!--==============================
        Footer Area
    ==============================-->
    @include('visitors.guest.general_partials.footer_section')

    <!--********************************
   Code End  Here
 ******************************** -->

    <!-- Scroll To Top -->
    @include('visitors.guest.general_partials.scroll_to_top_section')
    <!--==============================
    All Js File
    ============================== -->
    @include('visitors.guest.general_partials.scroll_to_top_section')


</body>

</html>
