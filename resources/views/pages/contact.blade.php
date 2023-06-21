@extends('layouts.guest')
{{-- <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css"> --}}
@section('main_content')
    <!--==============================
    Contact Area
    ==============================-->
    @include('visitors.guest.contactPage.partials.contact_section')
@endsection