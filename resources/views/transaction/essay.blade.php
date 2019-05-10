@section('title', 'Upload Essay')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-essay')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')

<a href='/dashboard'>&larr; Dashboard</a>
<h1>Essay Upload</h1>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="row my-5">
    <div class="col-12 text-center">
        <h2>Registration Closed</h2>
        <p>
            Please wait for finalist announcement.<br>
            We will notify you from your email.
        </p>
    </div>
</div>
<!--<form action="/submit-essay" method="POST" enctype = "multipart/form-data">
    @csrf

    <input type='file' name="submission" id = "submission" class='inputfile' required>
    <label for='submission' class='upload-button-custom'><span><i class='fa fa-upload'></i> Essay (.pdf)</span></label><br>

    <input type='file' name="instagram" id = "instagram" class='inputfile' required>    AS FOR 8 April, NO INSTAGRAM POST
    <label for='instagram' class='upload-button-custom'><span><i class='fa fa-upload'></i> Instagram Post</span></label><br>

    <input type="hidden" name="isset_essay" id="isset_essay" value="1">
    <input type="hidden" name="isset_instagram_post" id="isset_instagram_post" value="1">
    <input type="hidden" name="is_verified" id="is_verified" value="1">

    <button class='submit'>Submit Essay</button>
</form>-->
<script>$("#dashboard").addClass("active")</script>
<script src="{{URL::asset('assets/js/custom-file-input.js')}}"></script>
@endsection