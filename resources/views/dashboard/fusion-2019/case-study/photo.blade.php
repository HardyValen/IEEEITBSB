@section('title', 'Team Member Confirmation')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
&larr; <a href='/dashboard'>Dashboard</a>&ensp;/&ensp;<a href='/dashboard/case-study'>Case Study</a>&ensp;/&ensp;<a href='/dashboard/case-study/manage-team'>Manage Team</a>

<h1>Upload Photo & ID Card</h1>
<div class="guidebook-container">
    <h2>
        @if($id == 0)
            Team Leader
        @else 
            Team Member {{$id}}
        @endif
    </h2>

    <ol>
        <li>Click the "Upload 3x4 photo" to set the 3x4 photo image file</li>
        <li>Click the "upload id card" to set your Student ID Card image file</li>
        <li>Then, click the "upload images" button to submit files</li>
        <li>Note that the accepted image file extensions are .jpg, .png, and .pdf on lowercase</li>
    </ol>

    <form action="/upload-process" method="POST" enctype = "multipart/form-data">
        @csrf 
        <input type='file' name="photo" id="photo" class='inputfile' required>
        <label for='photo' class='upload-button-custom'><span><i class='fa fa-upload'></i> Upload 3x4 Photo</span></label><br>

        <input type='file' name="ktm" id="ktm" class='inputfile' required>
        <label for='ktm' class='upload-button-custom'><span><i class='fa fa-upload'></i> Upload ID Card</span></label><br>

        <input type="hidden" name="anggota" id="anggota" value="{{$id}}">
        <input type="hidden" name="isset_photo" id="isset_photo" value="1">
        <input type="hidden" name="isset_ktm" id="isset_ktm" value="1">

        <button class="primary-button mt-5 mb-3" >Upload Images</button>
        <div class="row">
            <div class="col-lg-8">
                <div class='alert alert-dismissible fade show alert-info'>
                    <i class='fas fa-info-circle'></i>&ensp;The "upload images" button does not work? Make sure you have set the images on the respective buttons above
                </div>
            </div>
        </div>
    </form>

</div>

<script>$("#team{{$id}}").addClass("active")</script>
<script src="{{URL::asset('assets/js/custom-file-input.js')}}"></script>
@endsection