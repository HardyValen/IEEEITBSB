@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
<h1>Dashboard Index</h1>
    
    @if(session()->has('message'))
    <div class="row">
        <div class="col-lg-6">
            <div class='alert alert-dismissible fade show alert-danger'>
                <i class='fas fa-exclamation-circle'></i>&ensp;&ensp;{{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif

    <div class="container-widgets">
        <div class="container-widgets__header">
            <h2>Navigation</h2>
        </div>    
        <div class="container-widgets__body">
            <div class="row">
                <div class="col-4 col-lg-3 widget-icon">
                    <a href='/'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/ieee-home.svg')}}">
                        <p>Landing Page</p>
                    </a>
                </div>
                <!-- ======================================================================== -->

                <!-- F.A.Q not implemented yet -->

                <!--<div class="col-4 col-lg-3 widget-icon">
                    <a href='/dashboard/faq'>
                        <img src="{{URL::asset('assets/images/Assets/Image-ComingSoon.svg')}}">
                        <p>F.A.Q</p>
                    </a>
                </div> -->
                
                <!-- Manual not implemented yet -->

                <!--<div class="col-4 col-lg-3 widget-icon">
                    <a href='/dashboard/manual'>
                        <img src="{{URL::asset('assets/images/Assets/Image-ComingSoon.svg')}}">
                        <p>Manual</p>
                    </a>
                </div>-->
                <!-- ======================================================================== -->

                <div class="col-4 col-lg-3 widget-icon">
                    <a href='/dashboard/guidebook'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/guidebook.svg')}}">
                        <p>Guidebook</p>
                    </a>
                </div>
                <div class="col-4 col-lg-3 widget-icon">
                    <a href='/dashboard/external-files'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/file.svg')}}">
                        <p>External Files</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-widgets">
        <h2>Competitions</h2>
        <div class="row">
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/case-study'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/casestudy-icon.svg')}}">
                    <p>Case Study</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/invest'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/invest-icon.svg')}}">
                    <p>Innovation Contest</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/short-movie'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/shortmovie-icon.svg')}}">
                    <p>Short Movie</p>
                </a>
            </div>
        </div>
    </div>

    <script>$("#dashboard").addClass("active")</script>
@endsection
