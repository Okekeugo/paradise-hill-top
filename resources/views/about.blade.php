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
    @include('visitors.guest.aboutPage.partials.breadcumb_section')

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

    <!--==============================
        Footer Area
    ==============================-->
    @include('visitors.guest.welcomePage.partials.footer_section')

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    @include('visitors.guest.welcomePage.partials.scroll_to_top_section')

    <!--==============================
    All Js File
    ============================== -->
    @include('visitors.guest.welcomePage.partials.all_js_section')

</body>

</html>