@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-teaminfo')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    <a href='/dashboard'>&larr; Dashboard</a>
    <h1>Team Info</h1>

    <div class="teaminfo-container">
        <div class="row teaminfo-member">
            <div class="col-lg-4 col-12 teaminfo-member-info">
                <h2>Team Leader</h2>
                <p>
                    Name: {{ Auth::user()->name }}<br>
                    Student ID Number: {{ Auth::user()->nim }}<br>
                     
                    Photo:  @if(Auth::user()->isset_photo_anggota0 == 1)
                                Uploaded | <a href='/confirm/$id'>edit</a>
                            @else
                                No Photo | <a href='/confirm/$id'>add photo</a>
                            @endif
                    <br>
                    Student Card:   @if(Auth::user()->isset_photo_anggota0 == 1)
                                        Uploaded | <a href='/confirm/$id'>edit</a>
                                    @else
                                        No ID card | <a href='/confirm/$id'>add ID card</a>
                                    @endif<br>
                </p>
            </div>
            
            @if(Auth::user()->nama_anggota1!=NULL)
            <div class="col-lg-4 col-12 teaminfo-member-info">
                <h2>Team Member 1</h2>
                <p>
                    Name: {{ Auth::user()->nama_anggota1 }}<br>
                    Student ID Number: {{ Auth::user()->nim_anggota1 }}<br>

                    Photo:  @if(Auth::user()->isset_photo_anggota1 == 1)
                                Uploaded | <a href='/confirm/$id'>edit</a>
                            @else
                                No Photo | <a href='/confirm/$id'>add photo</a>
                            @endif
                    <br>
                    Student Card:   @if(Auth::user()->isset_photo_anggota1 == 1)
                                        Uploaded | <a href='/confirm/$id'>edit</a>
                                    @else
                                        No ID card | <a href='/confirm/$id'>add ID card</a>
                                    @endif<br>
                </p>
            </div>
            @else
                <div class="col-4 col-lg-3 widget-icon justify-content-start">
                    <a href='/addteam'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/user-add.svg')}}">
                        <p>Add Member</p>
                    </a>
                </div>
            @endif
            
            @if(Auth::user()->nama_anggota2!=NULL)
            <div class="col-lg-4 col-12 teaminfo-member-info">
                <h2>Team Member 2</h2>
                <p>
                    Name: {{ Auth::user()->nama_anggota2 }}<br>
                    Student ID Number: {{ Auth::user()->nim_anggota2 }}<br>
                    Photo:  @if(Auth::user()->isset_photo_anggota2 == 1)
                                Uploaded | <a href='/confirm/$id'>edit</a>
                            @else
                                No Photo | <a href='/confirm/$id'>add photo</a>
                            @endif
                    <br>
                    Student Card:   @if(Auth::user()->isset_ktm_anggota2 == 1)
                                        Uploaded | <a href='/confirm/$id'>edit</a>
                                    @else
                                        No ID card | <a href='/confirm/$id'>add ID card</a>
                                    @endif<br>
                </p>
            </div>
            @else
                @if (Auth::user()->nama_anggota1!=NULL)
                <div class="col-4 col-lg-3 widget-icon justify-content-start">
                    <a href='/addteam'>
                        <img src="{{URL::asset('assets/images/Vendor Assets/user-add.svg')}}">
                        <p>Add Member</p>
                    </a>
                </div>
                @endif
            @endif
        </div>
        <p class='text-danger'>
            *Required
        </p>

        <p class='teaminfo-institution'>
            Institution: {{ Auth::user()->afiliasi }}
        </p>

        @if (Auth::user()->is_verified==0)
            <div class='teaminfo-submissionstatus not-verified'>
            <p>Essay Submission Status: <i class="fas fa-times"></i> None</p>
            </div>
        @else 
            @if (Auth::user()->is_verified==1)
            <div class='teaminfo-submissionstatus submitted'>
            <p>Essay Submission Status: <i class="far fa-clock"></i> Submitted. Our admin will check your files.</p>
            </div>
            @else
            <div class='teaminfo-submissionstatus verified'>
            <p>Essay Submission Status: <i class="fas fa-check"></i> Verified</p>
            </div>
            @endif
        @endif
    </div>
    

    <script>$("#dashboard").addClass("active")</script>
@endsection
