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
        <h2>Team Status</h2>
        <div class="row teaminfo-member">
            <div class="col-lg-8">
                <div class="table-responsive-xl">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope=row>Name</th>
                                <td>{{ Auth::user()::find(Auth::user()->id)->shortmovie2019participant->namaKetua }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Student ID Number</th>
                                <td>{{ Auth::user()::find(Auth::user()->id)->shortmovie2019participant->nimKetua }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Team Name</th>
                                <td>{{ Auth::user()::find(Auth::user()->id)->shortmovie2019participant->teamName }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Subtheme</th>
                                <td>{{ Auth::user()::find(Auth::user()->id)->shortmovie2019participant->subtheme }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Affiliation</th>
                                <td>{{ Auth::user()->afiliasi }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Letter of Recommendation</th>
                                @if (Auth::user()::find(Auth::user()->id)->shortmovie2019participant->issetLetterOfRecommendation == 0)
                                <td class='teaminfo-submissionstatus not-verified'>
                                    <p> <i class="fas fa-exclamation-circle"></i>&ensp;No Photo | <a href='/dashboard/short-movie/manage-team/upload-photo/0'>Add Photo</a></p>
                                </td>
                                @else 
                                <td class='teaminfo-submissionstatus verified'>
                                    <p> <i class="fas fa-check"></i>&ensp;Uploaded | <a href='/dashboard/short-movie/manage-team/upload-photo/0'>Edit</a></p>
                                </td>
                                @endif
                            </tr>
                            <tr>
                                <th scope="row">Payment Status</th>
                                @if (Auth::user()::find(Auth::user()->id)->shortmovie2019participant->issetInvoice == 0)
                                <td class='teaminfo-submissionstatus not-verified'>
                                    <p> <i class="fas fa-exclamation-circle"></i>&ensp;Unpaid | <a href='/dashboard/short-movie/manage-team/upload-photo/0'>Submit Invoice</a></p>
                                </td>
                                @else
                                    @if (Auth::user()::find(Auth::user()->id)->shortmovie2019participant->issetInvoice == 1)
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
                            <tr>
                                <th scope="row">URL Submission</th>
                                @if (Auth::user()::find(Auth::user()->id)->shortmovie2019participant->issetURL == 0)
                                <td class='teaminfo-submissionstatus not-verified'>
                                    <p> <i class="fas fa-exclamation-circle"></i>&ensp;None | <a href='/dashboard/short-movie/submit-url'>Add URL</a></p>
                                </td>
                                @else
                                    @if (Auth::user()::find(Auth::user()->id)->shortmovie2019participant->issetURL == 1)
                                    <td class='teaminfo-submissionstatus submitted'>
                                        <p> <i class="far fa-clock"></i>&ensp;Waiting for Verification | <a href='/dashboard/short-movie/submit-url'>Edit URL</a></p>
                                    </td>
                                    @else
                                    <td class='teaminfo-submissionstatus verified'>
                                        <p> <i class="fas fa-check "></i>&ensp;Verified</p>
                                    </td>
                                    @endif
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
           </div>
        </div>
        <div class="row">
            <div class="col-lg-8 d-flex justify-content-end">
                @if(Auth::user()::find(Auth::user()->id)->shortmovie2019participant->URL != NULL)
                    <a href="{{Auth::user()::find(Auth::user()->id)->shortmovie2019participant->URL}}" target='_blank' class='primary-button'>View Video</a>
                @endif
            </div>
        </div>
    </div>
    

    <script>$("#dashboard").addClass("active")</script>
    <script>$(".alert").alert("close").fade()</script>
@endsection
