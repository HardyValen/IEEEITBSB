@section('title', 'Innovation Contest Participants')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-admin')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-admin')
@endsection

@section('content')
<div class="teaminfo-container">
    <div class="row teaminfo-member">
        <div class="col-12">
            &larr; <a href='/dashboard/admin'>Dashboard</a>
            <h2>Innovation Contest Participants</h2>

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

            <div class="table-responsive-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Team Members</th>
                            <th scope="col">Contacts</th>
                            <th scope="col">Team Info</th>
                            <th scope="col">Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>
                                <b>{{$user->namaKetua}} &ndash; {{$user->nimKetua}} | 
                                    @if($user->issetFotoKetua == 1)
                                        [<a href="{{Storage::url($user->urlFotoKetua)}}" target='_blank'>Photo</a>]
                                    @else
                                        No Photo | 
                                    @endif
                                    @if($user->issetKTMKetua == 1)
                                        [<a href="{{Storage::url($user->urlKTMKetua)}}" target='_blank'>KTM</a>]
                                    @else
                                        No KTM
                                    @endif
                                </b><br>

                                @if($user->namaAnggota1 != NULL)
                                {{$user->namaAnggota1}} &ndash; {{$user->nimAnggota1}} | 
                                    @if($user->issetFotoAnggota1 == 1)
                                        <b>[<a href="{{Storage::url($user->urlFotoAnggota1)}}" target='_blank'>Photo</a>]</b>
                                    @else
                                        No Photo | 
                                    @endif
                                    @if($user->issetKTMAnggota1 == 1)
                                        <b>[<a href="{{Storage::url($user->urlKTMAnggota1)}}" target='_blank'>KTM</a>]</b>
                                    @else
                                        No KTM
                                    @endif<br>
                                @endif

                                @if($user->namaAnggota2 != NULL)
                                {{$user->namaAnggota2}} &ndash; {{$user->nimAnggota2}} |
                                    @if($user->issetFotoAnggota2 == 1)
                                        <b>[<a href="{{Storage::url($user->urlFotoAnggota2)}}" target='_blank'>Photo</a>]</b> 
                                    @else
                                        No Photo | 
                                    @endif
                                    @if($user->issetKTMAnggota2 == 1)
                                        <b>[<a href="{{Storage::url($user->urlKTMAnggota2)}}" target='_blank'>KTM</a>]</b>
                                    @else
                                        No KTM
                                    @endif
                                @endif
                            </td>

                            <td>
                                <b>Email: </b>{{$user->email}}<br>
                                <b>LINE: </b>{{$user->lineID}}<br>
                                <b>Phone: </b>{{$user->phone}}
                            </td>

                            <td>
                                <b>Team Name: </b>{{$user->teamName}}<br>
                                <b>Subtheme: </b>{{$user->subtheme}}<br>
                                <b>Gelombang: </b>{{$user->gelombang}}<br>
                                <b>Invoice: </b> 
                                @if($user->issetInvoice != 0)
                                    <b>[<a href="{{Storage::url($user->urlInvoice)}}" target='_blank'>View</a>]</b>
                                    @if($user->issetInvoice == 1)
                                        <span class='text-danger'><b>Not Verified</b></span> &emsp;
                                    @else
                                        <span class='text-success'><b>Paid</b></span> &emsp;
                                    @endif
                                @else
                                    Not Set
                                @endif<br>
                                <b>Essay: </b>
                                    @if($user->issetEssay != 0)
                                        <b>[<a href="{{Storage::url($user->urlEssay)}}" target='_blank'>View</a>]</b>
                                        @if($user->issetEssay == 2)
                                            <span class='text-success'><b>Scored</b></span> &emsp;
                                        @else
                                            <span class='text-danger'><b>Not Scored</b></span> &emsp;
                                        @endif
                                        <br>
                                        <b>Preliminary Score: </b>
                                        @if($user->preliminaryScore == NULL)
                                            Not Scored Yet<br>
                                        @else
                                            {{$user->preliminaryScore}}<br>
                                        @endif
                                        @if($user->isFinalist != 0)
                                            <b>Final Score: </b>
                                            @if($user->finalScore == NULL)
                                                Not Scored Yet<br>
                                            @else
                                                {{$user->finalScore}}<br>
                                            @endif
                                        @endif
                                    @else
                                        Not Set
                                    @endif
                            </td>

                            <td>
                                <a href='/dashboard/admin/view-invest/{{$user->id}}' class='primary-button'>EDIT</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                <!-- Pagination -->
                <div class="row">
                <div class="col-2">
                    @if($users->currentPage()-1 != 0)
                    <a href='/blog?page=1' class='optional-button'>
                        <i class="fas fa-angle-double-left"></i>
                    </a>
                    @endif
                </div>
                <div class="col-8 d-flex justify-content-center">
                    @if(!($users->currentPage()-2 <= 0))
                        <a href='{{$users->url($users->currentPage()-2)}}' class='optional-button'>
                            {{$users->currentPage()-2}}
                        </a>
                    @endif
                    @if(!($users->currentPage()-1 <= 0))
                        <a href='{{$users->previousPageUrl()}}' class='optional-button'>
                            {{$users->currentPage()-1}}
                        </a>
                    @endif
                    <a href='/' class='primary-button'>
                        {{$users->currentPage()}}
                    </a>
                    @if(!($users->currentPage()+1 >= $users->lastPage()+1))
                        <a href='{{$users->nextPageUrl()}}' class='optional-button'>
                            {{$users->currentPage()+1}}
                        </a>
                    @endif
                    @if(!($users->currentPage()+2 >= $users->lastPage()+1))
                        <a href='{{$users->url($users->currentPage()+2)}}' class='optional-button'>
                            {{$users->currentPage()+2}}
                        </a>
                    @endif
                </div>
                <div class="col-2 d-flex justify-content-end">
                    @if($users->currentPage() != $users->lastPage())
                    <a href='{{$users->url($users->lastPage())}}' class='optional-button'>
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                    @endif
                </div>
            </div>
            <!-- End of Pagination -->
        </div>
    </div>
</div>


@endsection
