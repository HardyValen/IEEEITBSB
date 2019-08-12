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
    <h1>Innovation Contest</h1>
    
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
    
    @if(Auth::user()->isInvest==0)
    <div class="row">
        <div class="col-lg-7 teaminfo-container">

            <p>
                Innovation Contest is a competition held by IEEE ITB Student Branch to find the best innovation among participants from all around Asia. Innovation must be a real invention that can be directly implemented in the form of prototypes, systems, products, or platforms. Participants should make their creation according to the themes and subthemes specified.
            </p>

            @if(Auth::user()->isCaseStudy == 1 || Auth::user()->isShortMovie == 1)
            <p>
                We're sorry, you have been registered on 
                    @if(Auth::user()->isCaseStudy == 1) Case Study.
                    @else Short Movie.
                    @endif
                 As stated from the guidebook, you cannot participate to another competition of IEEE Fusion 2019. 
            </p>
            <div class="row mt-5">
                <div class="col-6">
                    <a href="/dashboard" class="optional-button">Dashboard</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    @if(Auth::user()->isCaseStudy == 1) <a href="/dashboard/case-study" class="primary-button">Case Study</a>
                    @else <a href="/dashboard/short-movie" class="primary-button">Short Movie</a>
                    @endif
                </div>
            </div>
            @else
            <p>
                It seems you haven't registered to innovation contest 2019 yet.<br>
                Please insert your team name and pick a subtheme for your essay
            </p>

            <form action="/dashboard/invest" method="POST">
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
                            <input class="form-check-input" type="radio" name="subtheme" id="opt1" value="Renewable Energy" checked>
                            <label class="form-check-label" for="opt1">
                            Renewable Energy
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subtheme" id="opt2" value="Financial Technology">
                            <label class="form-check-label" for="opt2">
                            Financial Technology
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subtheme" id="opt3" value="Social Technology">
                            <label class="form-check-label" for="opt3">
                            Social Technology
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subtheme" id="opt4" value="Health Technology">
                            <label class="form-check-label" for="opt4">
                            Health Technology
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subtheme" id="opt5" value="Eco-Friendly Technology">
                            <label class="form-check-label" for="opt5">
                            Eco-Friendly Technology
                            </label>
                        </div>
                    </div>
                </div>
                

                <div class="row my-5">
                    <div class="col-lg-6">
                        <a href="/dashboard/invest/guidebook" class="optional-button">View Guidebook</a>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-lg-end">
                        <div class="form-submit">
                            <input type="hidden" name="isInvest" id='isInvest' value='1'>
                            <input type="submit" name="submit" id="submit" class="primary-button" value="Register Invest" />
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
        Auth::user()::find(Auth::user()->id)->invest2019participant->issetEssay != 0 && 
        (
            Auth::user()::find(Auth::user()->id)->invest2019participant->issetFotoKetua == 0 ||
            Auth::user()::find(Auth::user()->id)->invest2019participant->issetKTMKetua == 0 ||
            (   
                Auth::user()::find(Auth::user()->id)->invest2019participant->issetFotoAnggota1 == 0 && 
                Auth::user()::find(Auth::user()->id)->invest2019participant->namaAnggota1 != NULL 
            ) ||
            (   
                Auth::user()::find(Auth::user()->id)->invest2019participant->issetKTMAnggota1 == 0 && 
                Auth::user()::find(Auth::user()->id)->invest2019participant->namaAnggota1 != NULL 
            ) ||
            (   
                Auth::user()::find(Auth::user()->id)->invest2019participant->issetFotoAnggota2 == 0 && 
                Auth::user()::find(Auth::user()->id)->invest2019participant->namaAnggota2 != NULL 
            ) ||
            (   
                Auth::user()::find(Auth::user()->id)->invest2019participant->issetKTMAnggota2 == 0 && 
                Auth::user()::find(Auth::user()->id)->invest2019participant->namaAnggota2 != NULL
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
                        @if(Auth::user()::find(Auth::user()->id)->invest2019participant->issetFotoKetua == 0)
                        <li>Team Leader 3x4 Photo</li>
                        @endif()

                        @if(Auth::user()::find(Auth::user()->id)->invest2019participant->issetKTMKetua == 0)
                        <li>Team Leader Student ID Card</li>
                        @endif()

                        @if(
                            Auth::user()::find(Auth::user()->id)->invest2019participant->issetFotoAnggota1 == 0 && 
                            Auth::user()::find(Auth::user()->id)->invest2019participant->namaAnggota1 != NULL
                            )
                        <li>Team Member 1 3x4 Photo</li>
                        @endif()

                        @if(
                            Auth::user()::find(Auth::user()->id)->invest2019participant->issetKTMAnggota1 == 0 && 
                            Auth::user()::find(Auth::user()->id)->invest2019participant->namaAnggota1 != NULL
                            )
                        <li>Team Member 1 Student ID Card</li>
                        @endif()

                        @if(Auth::user()::find(Auth::user()->id)->invest2019participant->issetFotoAnggota2 == 0 && 
                            Auth::user()::find(Auth::user()->id)->invest2019participant->namaAnggota2 != NULL
                            )
                        <li>Team Member 2 3x4 Photo</li>
                        @endif()

                        @if(Auth::user()::find(Auth::user()->id)->invest2019participant->issetKTMAnggota2 == 0 && 
                            Auth::user()::find(Auth::user()->id)->invest2019participant->namaAnggota2 != NULL
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
                <a href='/dashboard/invest/guidebook'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/guidebook.svg')}}">
                    <p>Guidebook</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/invest/manage-team'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/team.svg')}}">
                    <p>Manage Team</p>
                </a>
            </div>
            <div class="col-4 col-lg-3 widget-icon">
                <a href='/dashboard/invest/upload-files'>
                    <img src="{{URL::asset('assets/images/Vendor Assets/upload.svg')}}">
                    <p>Upload Files</p>
                </a>
            </div>
        </div>
    </div>
    @endif
        
    <script>$(".alert").alert("close").fade()</script>
@endsection