@section('title','Add a Team Member')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    &larr; <a href='/dashboard'>Dashboard</a>&ensp;/&ensp;<a href='/dashboard/short-movie'>Short Movie</a>&ensp;/&ensp;<a href='/dashboard/short-movie/manage-team'>Manage Team</a>
    <h1>Add A New Member</h1>
    
    <form action="/dashboard/short-movie/manage-team/add-team-member" method="POST">
        {{ csrf_field() }}

        <div class="group">
        <input type="text" name="nama_anggota" id="nama_anggota" placeholder=" " required>
            <span class="bar"></span>
            <label>Name</label>
        </div>

        <div class="group">
        <input type="text" name="nim_anggota" id="nim_anggota" placeholder=" " required>
            <span class="bar"></span>
            <label>Student ID Number</label>
        </div>

        <div class="form-submit mt-5">
            <input type="submit" name="submit" id="submit" class="primary-button" value="Add Teammate" />
        </div>  
    </form>
    
    <script>$('#addteam').addClass("active")</script>
@endsection
