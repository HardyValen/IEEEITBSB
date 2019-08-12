@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    <a href='/dashboard'>&larr; Dashboard</a>
    <h1>Short Movie</h1>
    
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
    
    @if(Auth::user()->isShortMovie==0)
    <div class="row">
        <div class="col-lg-7 teaminfo-container">

            <p>
                Short movie competition IEEE Fusion 2019 is a competition for high school students in Indonesia to further explore ideas, create a story, implement and show off the ability to make a movie, acting, and cinematography skills, and share their work not only as a competition submission but also as a creation that can affect and improve people’s awareness concerning the impact of technology on humanity through a work of short movie. 
            </p>

            @if(Auth::user()->isInvest == 1 || Auth::user()->isCaseStudy == 1)
            <p>
                We're sorry, you have been registered on 
                    @if(Auth::user()->isInvest == 1) Innovation Contest.
                    @else Case Study.
                    @endif
                 As stated from the guidebook, you cannot participate to another competition of IEEE Fusion 2019. 
            </p>
            <div class="row mt-5">
                <div class="col-6">
                    <a href="/dashboard" class="optional-button">Dashboard</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    @if(Auth::user()->isInvest == 1) <a href="/dashboard/invest" class="primary-button">Innovation Contest</a>
                    @else <a href="/dashboard/case-study" class="primary-button">Case Study</a>
                    @endif
                </div>
            </div>
            @else
            <p>
                It seems you haven't registered to innovation contest 2019 yet.<br>
                Please insert your team name and pick a subtheme for your essay
            </p>

            <form action="/dashboard/short-movie" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12">
                        <div class="group">
                            <input type="text" name="nama_tim" id="nama_tim" placeholder=" " required>
                            <span class="bar"></span>
                            <label>Team Name</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <b>Subtheme Select</b>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subtheme" id="opt1" value="Living with Artificial Intelligence" checked>
                            <label class="form-check-label" for="opt1">
                                Living with Artificial Intelligence
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subtheme" id="opt2" value="How Internet Affects Our Lives">
                            <label class="form-check-label" for="opt2">
                                How Internet Affects Our Lives
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subtheme" id="opt3" value="How Technology Improves Our Lives">
                            <label class="form-check-label" for="opt3">
                                How Technology Improves Our Lives
                            </label>
                        </div>
                    </div>
                </div>
                

                <div class="row my-5">
                    <div class="col-lg-6">
                        <a href="/dashboard/short-movie/guidebook" class="optional-button">View Guidebook</a>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-lg-end">
                        <div class="form-submit">
                            <input type="hidden" name="isShortMovie" id='isShortMovie' value='1'>
                            <input type="submit" name="submit" id="submit" class="primary-button" value="Register Short Movie" />
                        </div>
                    </div>
                </div>
            </form>
            
            <script>$('#addteam').addClass("active")</script>
            @endif
        </div>
    </div>
    @else

    <div class="container-widgets">
        <div class="row">
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/short-movie/guidebook'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/guidebook.svg')}}">
                    <p>Guidebook</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/short-movie/manage-team'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/team.svg')}}">
                    <p>Manage Team</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/short-movie/submit-url'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/chain.svg')}}">
                    <p>Submit URL</p>
                </a>
            </div>
        </div>
    </div>
    @endif
        
    <script>$(".alert").alert("close").fade()</script>
@endsection