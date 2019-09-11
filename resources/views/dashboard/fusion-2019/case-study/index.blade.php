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
    <h1>Case Study</h1>
    
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
    
    @if(Auth::user()->isCaseStudy==0)
    <div class="row">
        <div class="col-lg-7 teaminfo-container">

            <p>
                This competition is made as a platform for students all around the world to apply and sharpen their knowledge and analytical skills. By this competition, IEEE ITB SB are willing to bring out innovative ideas for the future challenge of human life.
            </p>

            @if(Auth::user()->isInvest == 1 || Auth::user()->isShortMovie == 1)
            <p>
                We're sorry, you have been registered on 
                    @if(Auth::user()->isInvest == 1) Innovation Contest.
                    @else Short Movie.
                    @endif
                 As stated from the guidebook, you cannot participate to another competition of IEEE Fusion 2019. 
            </p>
            <div class="row mt-5">
                <div class="col-6">
                    <a href="/dashboard" class="optional-button">Dashboard</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    @if(Auth::user()->isInvest == 1) <a href="/dashboard/invest" class="primary-button">Innovation Contest</a>
                    @else <a href="/dashboard/short-movie" class="primary-button">Short Movie</a>
                    @endif
                </div>
            </div>
            @else
            <p>
                It seems you haven't registered to Case Study 2019 yet.<br>
                Please insert your team name and pick a case for your essay<br>
                <a href="{{URL::asset('assets/fusion2019/case-study/studyCaseContest2019.pdf')}}">Preliminary Study Case <sup><i class="fas fa-file-download"></i></sup></a>  &mdash; .pdf file<br>
                <a href="https://docs.google.com/document/d/1eRuk1t0wyM8nq9ULyEpLp4pHS6-gOg4kMUA3TQ65Pcg/edit?usp=sharing">Preliminary Study Case <sup><i class="fas fa-link"></i></sup></a>  &mdash; mirror
            </p>

            <form action="/dashboard/case-study" method="POST">
                {{ csrf_field() }}
                <div class="group">
                <input type="text" name="nama_tim" id="nama_tim" placeholder=" " required>
                    <span class="bar"></span>
                    <label>Team Name</label>
                </div>

                <div class="row my-5">
                    <div class="col-lg-6">
                        <a href="/dashboard/case-study/guidebook" class="optional-button">View Guidebook</a>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-lg-end">
                        <div class="form-submit">
                            <input type="hidden" name="isCaseStudy" id='isCaseStudy' value='1'>
                            <input type="submit" name="submit" id="submit" class="primary-button" value="Register Case Study" />
                        </div>
                    </div>
                </div>
            </form>
            
            <script>$('#addteam').addClass("active")</script>
            @endif
        </div>
    </div>

    @else

<!-- Warning Message buat orang2 yg upload essay duluan tapi belom upload -->
@if(
        Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetEssay != 0 && 
        (
            Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetFotoKetua == 0 ||
            Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMKetua == 0 ||
            (   
                Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetFotoAnggota1 == 0 && 
                Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota1 != NULL 
            ) ||
            (   
                Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMAnggota1 == 0 && 
                Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota1 != NULL 
            ) ||
            (   
                Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetFotoAnggota2 == 0 && 
                Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota2 != NULL 
            ) ||
            (   
                Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMAnggota2 == 0 && 
                Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota2 != NULL
            )
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class='alert alert-dismissible fade show alert-warning'>
                <p>
                    <i class='fas fa-exclamation-circle'></i>&ensp;You have uploaded your essay, but you haven't upload every images needed for verification yet. <br>Go to Manage Team section for upload the files neccessary.
                </p>
                <p>
                    According to our database, You haven't upload:
                    <ul>
                        @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetFotoKetua == 0)
                        <li>Team Leader 3x4 Photo</li>
                        @endif()

                        @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMKetua == 0)
                        <li>Team Leader Student ID Card</li>
                        @endif()

                        @if(
                            Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetFotoAnggota1 == 0 && 
                            Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota1 != NULL
                            )
                        <li>Team Member 1 3x4 Photo</li>
                        @endif()

                        @if(
                            Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMAnggota1 == 0 && 
                            Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota1 != NULL
                            )
                        <li>Team Member 1 Student ID Card</li>
                        @endif()

                        @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetFotoAnggota2 == 0 && 
                            Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota2 != NULL
                            )
                        <li>Team Member 2 3x4 Photo</li>
                        @endif()

                        @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMAnggota2 == 0 && 
                            Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota2 != NULL
                            )
                        <li>Team Member 2 Student ID Card</li>
                        @endif()
                    </ul>
                </p>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif

    <div class="container-widgets">
        <div class="row">
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/case-study/guidebook'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/guidebook.svg')}}">
                    <p>Guidebook</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/case-study/manage-team'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/team.svg')}}">
                    <p>Manage Team</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/case-study/upload-files'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/upload.svg')}}">
                    <p>Upload Files</p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{URL::asset('assets/fusion2019/case-study/studyCaseContest2019.pdf')}}">Preliminary Study Case <sup><i class="fas fa-file-download"></i></sup></a>  &mdash; .pdf file<br>
                <a href="https://docs.google.com/document/d/1eRuk1t0wyM8nq9ULyEpLp4pHS6-gOg4kMUA3TQ65Pcg/edit?usp=sharing">Preliminary Study Case <sup><i class="fas fa-link"></i></sup></a>  &mdash; mirror
            </div>
        </div>
    </div>
    @endif
        
    <script>$(".alert").alert("close").fade()</script>
@endsection