@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    &larr; <a href='/dashboard'>Dashboard</a>&ensp;/&ensp;<a href='/dashboard/short-movie'>Short Movie</a>
    <h1>Submit URL</h1>
    
    @if(session()->has('message'))
    <div class="row">
        <div class="col-lg-6">
            <div class='alert alert-dismissible fade show alert-info'>
                <i class='fas fa-info-circle'></i>&ensp;&ensp;{{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif


    <form action="/dashboard/short-movie/submit-url" method="POST" enctype = "multipart/form-data">
        @csrf

        <p>Type your short movie youtube URL below</p>
        <div class="row">
            <div class="col-12">
                <div class="group">
                    <input type="text" name="youtubeURL" id="youtubeURL" placeholder=" " required>
                    <span class="bar"></span>
                    <label>Youtube URL</label>
                </div>
            </div>
        </div>

        <button class='primary-button mt-5 mb-3'>Submit URL</button>
        <div class="row">
            <div class="col-lg-8">
                <div class='alert alert-dismissible fade show alert-info'>
                    <i class='fas fa-info-circle'></i>&ensp;The "Submit URL" button does not work? Make sure you have set the images on the respective buttons above
                </div>
            </div>
        </div>
    </form>

    <script>$("#dashboard").addClass("active")</script>
    <script src="{{URL::asset('assets/js/custom-file-input.js')}}"></script>
@endsection