@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')

    <div class="guidebook-container">
        &larr; <a href='/dashboard'>Dashboard</a>&ensp;
        
        <div class="container-widgets">
            <div class="container-widgets__header">
                <h2>Guidebook Navigation</h2>
            </div>
            <div class="container-widgets__body">
                <div class="row">
                    <div class="col-4 widget-icon">
                        <a href='/dashboard/case-study/guidebook'>
                            <img src="{{URL::asset('assets/images/Vendor Assets/casestudy-icon.svg')}}">
                            <p>Case Study</p>
                        </a>
                    </div>
                    <div class="col-4 widget-icon">
                        <a href='/dashboard/invest/guidebook'>
                            <img src="{{URL::asset('assets/images/Vendor Assets/invest-icon.svg')}}">
                            <p>Innovation Contest</p>
                        </a>
                    </div>
                    <div class="col-4 widget-icon">
                        <a href='/dashboard/short-movie/guidebook'>
                            <img src="{{URL::asset('assets/images/Vendor Assets/shortmovie-icon.svg')}}">
                            <p>Short Movie</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection