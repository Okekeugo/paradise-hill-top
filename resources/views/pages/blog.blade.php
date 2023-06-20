@extends('layouts.guest')
@section('main_content')
    <!--==============================
        Breadcumb
    ============================== -->
    @include('visitors.guest.blogPage.partials.breadcumb_section')
    <!--==============================
    Blog Area
    ==============================-->
    @include('visitors.guest.blogPage.partials.blog_section')
@endsection
 