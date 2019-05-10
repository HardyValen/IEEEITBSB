@section('title', 'Team Member Confirmation')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-teaminfo')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
<a href='/dashboard/team-info'>&larr; Manage Team</a>
<h1>Upload Photo & ID Card</h1>
<p>for 
    @if($id == 0)
        Team Leader
    @else 
        Team Member {{$id}}
    @endif
</p>

@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif

<form action="/proof" method="POST" enctype = "multipart/form-data">
    @csrf 
    <input type='file' name="photo" id="photo" class='inputfile' required>
    <label for='photo' class='upload-button-custom'><span><i class='fa fa-upload'></i> Upload 3x4 Photo</span></label><br>

    <input type='file' name="ktm" id="ktm" class='inputfile' required>
    <label for='ktm' class='upload-button-custom'><span><i class='fa fa-upload'></i> Upload ID Card</span></label><br>

    <input type="hidden" name="anggota" id="anggota" value="{{$id}}">
    <input type="hidden" name="isset_photo" id="isset_photo" value="1">
    <input type="hidden" name="isset_ktm" id="isset_ktm" value="1">

    <button class="submit" >Upload Images</button>
</form>

<script>$("#team{{$id}}").addClass("active")</script>
<script src="{{URL::asset('assets/js/custom-file-input.js')}}"></script>
@endsection