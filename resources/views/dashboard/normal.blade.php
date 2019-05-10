@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    <div class="container-widgets">
        <div class="row">
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/ieee-home.svg')}}">
                    <p>Home Page</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='dashboard/guidebook-disasterhack'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/guidebook.svg')}}">
                    <p>Guidebook</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='dashboard/team-info'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/team.svg')}}">
                    <p>Team Info</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/essay'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/upload.svg')}}">
                    <p>File Upload</p>
                </a>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-12 text-center">
            <h2>Registration Closed</h2>
            <p>
                Please wait for finalist announcement.<br>
                We will notify you from your email.
            </p>
        </div>
    </div>

    <script>$("#dashboard").addClass("active")</script>
@endsection
