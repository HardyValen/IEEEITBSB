@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    &larr; <a href='/dashboard'>Dashboard</a>&ensp;/&ensp;<a href='/dashboard/case-study'>Case Study</a>
    <h1>Manage Team</h1>

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

    <div class="teaminfo-container">
        <h2>
        @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota1 == NULL)
            Team Member Info
        @else
            Team Members Info
        @endif
        </h2>
        <div class="row teaminfo-member">
            <div class="col-lg-4 col-12 teaminfo-member-info">
                <b>Team Leader</b>
                <p>
                    Name: {{ Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaKetua }}<br>
                    Student ID Number: {{ Auth::user()::find(Auth::user()->id)->casestudy2019participant->nimKetua }}<br>
                     
                    Photo:  @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetFotoKetua == 1)
                                Uploaded | <a href='/dashboard/case-study/manage-team/upload-photo/0'>edit</a>
                            @else
                                No Photo | <a href='/dashboard/case-study/manage-team/upload-photo/0'>add photo</a>
                            @endif
                    <br>
                    Student Card:   @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMKetua == 1)
                                        Uploaded | <a href='/dashboard/case-study/manage-team/upload-photo/0'>edit</a>
                                    @else
                                        No ID card | <a href='/dashboard/case-study/manage-team/upload-photo/0'>add ID card</a>
                                    @endif<br>
                </p>
            </div>
            
            @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota1!=NULL)
            <div class="col-lg-4 col-12 teaminfo-member-info">
                <b>Team Member 1</b>
                <p>
                    Name: {{ Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota1 }}<br>
                    Student ID Number: {{ Auth::user()::find(Auth::user()->id)->casestudy2019participant->nimAnggota1 }}<br>

                    Photo:  @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMAnggota1 == 1)
                                Uploaded | <a href='/dashboard/case-study/manage-team/upload-photo/1'>edit</a>
                            @else
                                No Photo | <a href='/dashboard/case-study/manage-team/upload-photo/1'>add photo</a>
                            @endif
                    <br>
                    Student Card:   @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMAnggota1 == 1)
                                        Uploaded | <a href='/dashboard/case-study/manage-team/upload-photo/1'>edit</a>
                                    @else
                                        No ID card | <a href='/dashboard/case-study/manage-team/upload-photo/1'>add ID card</a>
                                    @endif<br>
                </p>
            </div>
            @else
                <div class="col-4 col-lg-3 widget-icon justify-content-start">
                    <a href='/dashboard/case-study/manage-team/add-team-member'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/user-add.svg')}}">
                        <p>Add Member</p>
                    </a>
                </div>
            @endif
            
            @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota2!=NULL)
            <div class="col-lg-4 col-12 teaminfo-member-info">
                <b>Team Member 2</b>
                <p>
                    Name: {{ Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota2 }}<br>
                    Student ID Number: {{ Auth::user()::find(Auth::user()->id)->casestudy2019participant->nimAnggota2 }}<br>
                    Photo:  @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMAnggota2 == 1)
                                Uploaded | <a href='/dashboard/case-study/manage-team/upload-photo/2'>edit</a>
                            @else
                                No Photo | <a href='/dashboard/case-study/manage-team/upload-photo/2'>add photo</a>
                            @endif
                    <br>
                    Student Card:   @if(Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetKTMAnggota2 == 1)
                                        Uploaded | <a href='/dashboard/case-study/manage-team/upload-photo/2'>edit</a>
                                    @else
                                        No ID card | <a href='/dashboard/case-study/manage-team/upload-photo/2'>add ID card</a>
                                    @endif<br>
                </p>
            </div>
            @else
                @if (Auth::user()::find(Auth::user()->id)->casestudy2019participant->namaAnggota1!=NULL)
                <div class="col-4 col-lg-3 widget-icon justify-content-start">
                    <a href='/dashboard/case-study/manage-team/add-team-member'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/user-add.svg')}}">
                        <p>Add Member</p>
                    </a>
                </div>
                @endif
            @endif
        </div>
        

        <h2>Team Status</h2>
        <div class="row teaminfo-member">
            <div class="col-lg-8">
                <div class="table-responsive-xl">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Team Name</th>
                                <td>{{ Auth::user()::find(Auth::user()->id)->casestudy2019participant->teamName }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Institution</th>
                                <td>{{ Auth::user()->afiliasi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Essay Submission</th>
                                @if (Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetEssay == 0)
                                <td class='teaminfo-submissionstatus not-verified'>
                                    <p> <i class="fas fa-exclamation-circle"></i>&ensp;None</p>
                                </td>
                                @else 
                                <td class='teaminfo-submissionstatus verified'>
                                    <p> <i class="fas fa-check"></i>&ensp;Submitted</p>
                                </td>
                                @endif
                            </tr>
                            <tr>
                                <th scope="row">Essay Verification</th>
                                @if (Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetEssay == 0)
                                <td class='teaminfo-submissionstatus not-verified'>
                                    <p> <i class="fas fa-exclamation-circle"></i>&ensp;No Essay</p>
                                </td>
                                @else
                                    @if (Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetEssay == 1)
                                    <td class='teaminfo-submissionstatus submitted'>
                                        <p> <i class="far fa-clock"></i>&ensp;Waiting for Verification</p>
                                    </td>
                                    @else
                                    <td class='teaminfo-submissionstatus verified'>
                                        <p> <i class="fas fa-check "></i>&ensp;Verified</p>
                                    </td>
                                    @endif
                                
                                @endif
                            </tr>
                            <tr>
                                <th scope="row">Payment Status</th>
                                @if (Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetInvoice == 0)
                                <td class='teaminfo-submissionstatus not-verified'>
                                    <p> <i class="fas fa-exclamation-circle"></i>&ensp;Unpaid</p>
                                </td>
                                @else
                                @if (Auth::user()::find(Auth::user()->id)->casestudy2019participant->issetInvoice == 1)
                                    <td class='teaminfo-submissionstatus submitted'>
                                        <p> <i class="far fa-clock"></i>&ensp;Waiting for Verification</p>
                                    </td>
                                    @else
                                    <td class='teaminfo-submissionstatus verified'>
                                        <p> <i class="fas fa-check"></i>&ensp;Paid</p>
                                    </td>
                                    @endif
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
           </div>
        </div>
    </div>
    

    <script>$("#dashboard").addClass("active")</script>
    <script>$(".alert").alert("close").fade()</script>
@endsection
