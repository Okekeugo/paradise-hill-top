@extends('layouts.guest')
@section('main_content')
    <!--==============================
    Team Area 02 
    ==============================-->
    @include('visitors.guest.teamPage.partials.team_section')

    <!--==============================
    Call to Action Area  
    ==============================-->
    @include('visitors.guest.teamPage.partials.call_to_action_section')

    <!--==============================
    About Area  
    ==============================-->
    @include('visitors.guest.teamPage.partials.about_section')
@endsection