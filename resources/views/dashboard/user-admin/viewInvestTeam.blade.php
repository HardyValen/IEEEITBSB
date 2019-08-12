@section('title', 'Viewing '.$team->teamName)
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
            &larr; <a href='/dashboard/admin'>Dashboard</a>&ensp; / &ensp;<a href='/dashboard/admin/view-invest'>Innovation Contest</a>
            <h2>{{$team->teamName}}</h2>

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

                <div class="table-responsive-lg col-lg-9">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">Team Members</th>
                            <td>
                                <b>{{$team->namaKetua}} &ndash; {{$team->nimKetua}} | 
                                    @if($team->issetFotoKetua == 1)
                                        [<a href="{{Storage::url($team->urlFotoKetua)}}" target='_blank'>Photo</a>]
                                    @else
                                        <span class="text-danger">No Photo</span> | 
                                    @endif
                                    @if($team->issetKTMKetua == 1)
                                        [<a href="{{Storage::url($team->urlKTMKetua)}}" target='_blank'>KTM</a>]
                                    @else
                                        <span class="text-danger">No KTM</span>
                                    @endif
                                </b>

                                @if($team->namaAnggota1 != NULL)
                                    <br>{{$team->namaAnggota1}} &ndash; {{$team->nimAnggota1}} |
                                    @if($team->issetFotoAnggota1 == 1)
                                        <b>[<a href="{{Storage::url($team->urlFotoAnggota1)}}" target='_blank'>Photo</a>]</b>
                                    @else
                                        <span class="text-danger">No Photo</span> | 
                                    @endif
                                    @if($team->issetKTMAnggota1 == 1)
                                        <b>[<a href="{{Storage::url($team->urlKTMAnggota1)}}" target='_blank'>KTM</a>]</b>
                                    @else
                                        <span class="text-danger">No KTM</span>
                                    @endif
                                @endif

                                @if($team->namaAnggota2 != NULL)
                                    <br>{{$team->namaAnggota2}} &ndash; {{$team->nimAnggota2}} |
                                    @if($team->issetFotoAnggota2 == 1)
                                        <b>[<a href="{{Storage::url($team->urlFotoAnggota2)}}" target='_blank'>Photo</a>]</b> 
                                    @else
                                        <span class="text-danger">No Photo</span> | 
                                    @endif
                                    @if($team->issetKTMAnggota2 == 1)
                                        <b>[<a href="{{Storage::url($team->urlKTMAnggota2)}}" target='_blank'>KTM</a>]</b>
                                    @else
                                        <span class="text-danger">No KTM</span>
                                    @endif
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Contacts</th>
                            <td>
                                Email: {{$team->email}}<br>
                                Phone: {{$team->phone}}<br>
                                Line ID: {{$team->lineID}}
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">Subtheme</th>
                            <td>{{$team->subtheme}}</td>
                        </tr>

                        <tr>
                            <th scope="row">Gelombang</th>
                            <td>{{$team->gelombang}}</td>
                        </tr>
                        
                        <tr>
                            <th scope="row">Invoice</th>
                            <td>
                                @if($team->issetInvoice == 0)
                                    <b><span class='text-danger'>No Invoice</span></b>
                                @else
                                    @if($team->issetInvoice == 1)
                                        <form action="" method="post" class='form-inline'>
                                            @csrf
                                            <b><span class='text-success'>Submitted </span>[<a href="{{Storage::url($team->urlInvoice)}}" target='_blank'>View</a>]</b>
                                            &emsp;|&emsp;
                                            <span class='text-danger'><b>Not Verified</b></span> &ensp;
                                            <input type="hidden" name="typeofPropertyUpdated" value='grantPaidStatus'>
                                            <input type='submit' class='btn btn-primary' value='Grant Paid Status'>
                                        </form>
                                    @else
                                        <form action="" method="post" class='form-inline'>
                                            @csrf
                                            <b><span class='text-success'>Submitted </span>[<a href="{{Storage::url($team->urlInvoice)}}" target='_blank'>View</a>]</b>
                                            &emsp;|&emsp;
                                            <span class='text-success'><b>Paid</b></span> &ensp;
                                            <input type="hidden" name="typeofPropertyUpdated" value='revokePaidStatus'>
                                            <input type='submit' class='btn btn-primary' value='Revoke Paid Status'>
                                        </form>
                                    @endif
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">Essay Status</th>
                            <td>
                                @if($team->issetEssay == 0)
                                    <span class="text-danger">No Essay</span> 
                                @else
                                    @if($team->issetEssay == 2)
                                        <b><span class='text-success'>Submitted, Scored</span> [<a href="{{Storage::url($team->urlEssay)}}" target='_blank'>View</a>]</b>
                                    @else
                                        <b><span class='text-success'>Submitted</span>, <span class='text-danger'>No score</span> [<a href="{{Storage::url($team->urlEssay)}}" target='_blank'>View</a>]</b>
                                    @endif
                                @endif
                            </td>
                        </tr>
                        @if($team->issetInvoice == 2)
                            <tr>
                                <th scope="row">Essay Score</th>
                                <td>
                                <form action="" method="post" class='form-inline'>
                                    @csrf
                                    <input type='text' class='form-control mr-3' name='preliminaryScore' value="{{$team->preliminaryScore}}">
                                    <input type="hidden" name="typeofPropertyUpdated" value='preliminaryScore'>
                                    <input type='submit' class='btn btn-primary' value='Submit Score'>
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Team Status</th>
                                <td>
                                @if($team->isFinalist == 0)
                                    <form action="" method="post" class='form-inline'>
                                        @csrf
                                        <span class='text-danger'><b>Not Finalist</b></span> &emsp;
                                        <input type="hidden" name="typeofPropertyUpdated" value='grantFinalistStatus'>
                                        <input type='submit' class='btn btn-primary' value='Grant Finalist Status'>
                                    </form>
                                @else
        
                                    <form action="" method="post" class='form-inline'>
                                        @csrf
                                        <span class='text-success'><b>Finalist</b></span> &emsp;
                                        <input type="hidden" name="typeofPropertyUpdated" value='revokeFinalistStatus'>
                                        <input type='submit' class='btn btn-primary' value='Revoke Finalist Status'>
                                    </form>
                                @endif
                                </td>
                            </tr>

                            @if($team->isFinalist == 1)
                            <tr>
                                <th scope="row">Final Score</th>
                                <td>
                                <form action="" method="post" class='form-inline'>
                                    @csrf
                                    <input type='text' class='form-control mr-3' name='finalScore' value="{{$team->finalScore}}">
                                    <input type="hidden" name="typeofPropertyUpdated" value='finalScore'>
                                    <input type='submit' class='btn btn-primary' value='Submit Score'>
                                </form>
                                </td>
                            </tr>
                            @endif
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
