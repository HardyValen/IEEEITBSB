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
            &larr; <a href='/dashboard/admin'>Dashboard</a>&ensp; / &ensp;<a href='/dashboard/admin/view-short-movie'>Short Movie</a>
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
                            <th scope="row">Team Leader</th>
                            <td>
                                <b>{{$team->namaKetua}} &ndash; {{$team->nimKetua}}</b>
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
                            <th scope="row">Letter of Recommendation</th>
                            <td>
                                @if($team->urlLetterOfRecommendation == NULL)
                                    <b><span class='text-danger'>No Letter of Recommendation</span></b>
                                @else
                                    <b><span class='text-success'>Submitted </span>[<a href="{{Storage::url($team->urlLetterOfRecommendation)}}" target='_blank'>View</a>]</b>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">Video URL</th>
                            <td>
                            @if($team->URL == NULL)
                                <b><span class='text-danger'>No Url</span></b>
                            @else
                                @if($team->issetURL == 2)
                                    <form action="" method="post" class='form-inline'>
                                        @csrf
                                        <b>[<a href="{{$team->URL}}" target='_blank'>Link</a>]</b>
                                        &emsp;|&emsp;
                                        <b><span class='text-success'>Approved</span></b>&ensp;
                                        <input type="hidden" name="typeofPropertyUpdated" value='revokeApproval'>
                                        <input type='submit' class='btn btn-primary' value='Revoke Approval'>
                                    </form>
                                @else
                                    <form action="" method="post" class='form-inline'>
                                        @csrf
                                        <b>[<a href="{{$team->URL}}" target='_blank'>Link</a>]</b>
                                        &emsp;|&emsp;
                                        <b><span class='text-danger'>Not Approved Yet</span></b>&ensp;
                                        <input type="hidden" name="typeofPropertyUpdated" value='grantApproval'>
                                        <input type='submit' class='btn btn-primary' value='Grant Approval'>
                                    </form>
                                @endif
                            @endif
                            </td>
                        </tr>

                        @if($team->issetInvoice == 2 && $team->issetURL == 2)
                        <tr>
                            <th scope="row">Vote Score</th>
                            <td>
                                <form action="" method="post" class='form-inline'>
                                    @csrf
                                    <input type='text' class='form-control mr-3' name='voteScore' value="{{$team->voteScore}}">
                                    <input type="hidden" name="typeofPropertyUpdated" value='voteScore'>
                                    <input type='submit' class='btn btn-primary' value='Submit Score'>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">Team Score</th>
                            <td>
                                <form action="" method="post" class='form-inline'>
                                    @csrf
                                    <input type='text' class='form-control mr-3' name='teamScore' value="{{$team->teamScore}}">
                                    <input type="hidden" name="typeofPropertyUpdated" value='teamScore'>
                                    <input type='submit' class='btn btn-primary' value='Submit Score'>
                                </form>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
