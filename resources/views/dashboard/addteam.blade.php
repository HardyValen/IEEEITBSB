@section('title','Add a Team Member')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    <a href='/dashboard/team-info'>&larr; Manage Team</a>
    <h1>Add A New Member</h1>

    @if(session()->has('message'))
    <div class="alert">
        {{ session()->get('message') }}
    </div>
    @endif
    
    <form action="addteam" method="POST">
        {{ csrf_field() }}

        <div class="group">
        <input type="text" name="nama_anggota" id="nama_anggota" placeholder=" " required>
            <span class="bar"></span>
            <label>Name *</label>
        </div>

        <div class="group">
        <input type="text" name="nim_anggota" id="nim_anggota" placeholder=" " required>
            <span class="bar"></span>
            <label>Student ID Number *</label>
        </div>

        <div class="form-submit">
            <input type="submit" name="submit" id="submit" class="submit" value="Add Teammate" />
            <p>*Required</p>
        </div>  
    </form>
    
    <script>$('#addteam').addClass("active")</script>
@endsection
