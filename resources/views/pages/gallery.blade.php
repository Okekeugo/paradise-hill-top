@extends('layouts.guest')

@section('main_content')
    <!--==============================
        Breadcumb
    ============================== -->
    {{-- @include('visitors.guest.galleryPage.partials.breadcumb_section') --}}

    <!--==============================
    Gallery Area  
    ==============================-->
    @include('visitors.guest.galleryPage.partials.gallery_section')

@endsection