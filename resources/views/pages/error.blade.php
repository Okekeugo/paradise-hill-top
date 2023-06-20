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
    @include('visitors.guest.errorPage.partials.preloader_header')
    <!--==============================
        Mobile Menu
    ============================== -->
    @include('visitors.guest.errorPage.partials.mobile_menu')
    <!--==============================
    Error Area
    ==============================-->
    @include('visitors.guest.errorPage.partials.error_section')

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
