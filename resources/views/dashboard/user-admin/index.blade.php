@section('title', 'Admin Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-admin')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-admin')
@endsection

@section('content')
<h1>Admin Dashboard</h1>

    @if(session()->has('message'))
    <div class="row">
        <div class="col-lg-12">
            <div class='alert alert-dismissible fade show alert-info'>
                <i class='fas fa-info-circle'></i>&ensp;&ensp;{{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif

    <div class="container-widgets">
        <div class="container-widgets__header">
            <h2>Blog Settings</h2>
        </div>    
        <div class="container-widgets__body">
            <div class="row">
                <div class="col-4 widget-icon">
                    <a href='/dashboard/admin/blog-create'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/blog-create.svg')}}">
                        <p>Create</p>
                    </a>
                </div>
                <div class="col-4 widget-icon">
                    <a href='/blog'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/blog-read.svg')}}">
                        <p>Show</p>
                    </a>
                </div>
                <div class="col-4 widget-icon">
                    <a href='/dashboard/admin/blog-update'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/blog-update.svg')}}">
                        <p>Edit</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-widgets">
        <div class="container-widgets__header">
            <h2>Ongoing Competition</h2>
        </div>    
        <div class="container-widgets__body">
            <div class="row">
                <div class="col-4 widget-icon">
                    <a href='/dashboard/admin/view-case-study'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/casestudy-icon.svg')}}">
                        <p>Case Study</p>
                    </a>
                </div>
                <div class="col-4 widget-icon">
                    <a href='/dashboard/admin/view-invest'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/invest-icon.svg')}}">
                        <p>Innovation Contest</p>
                    </a>
                </div>
                <div class="col-4 widget-icon">
                    <a href='/dashboard/admin/view-short-movie'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/shortmovie-icon.svg')}}">
                        <p>Short Movie</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>$("#dashboard").addClass("active")</script>
@endsection
