@section('title', 'Team Member Confirmation')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
&larr; <a href='/dashboard'>Dashboard</a>&ensp;/&ensp;<a href='/dashboard/short-movie'>Short Movie</a>&ensp;/&ensp;<a href='/dashboard/short-movie/manage-team'>Manage Team</a>

<h1>Upload Images</h1>
<div class="guidebook-container">
    <ol>
        <li>Click the "Letter of Recommendation" to set the letter of recommendation image file</li>
        <li>Click the "Upload Invoice" to set the invoice image file</li>
        <li>Then, click the "upload images" button to submit files</li>
        <li>Note that the accepted image file extensions are .jpg, .png, and .pdf on lowercase</li>
    </ol>

    <form action="/upload-process-short-movie" method="POST" enctype = "multipart/form-data">
        @csrf 
        <input type='file' name="letter" id="letter" class='inputfile' required>
        <label for='letter' class='upload-button-custom'><span><i class='fa fa-upload'></i> Letter of Recommendation</span></label><br>

        <input type='file' name="invoice" id="invoice" class='inputfile' required>
        <label for='invoice' class='upload-button-custom'><span><i class='fa fa-upload'></i> Upload Invoice</span></label><br>

        <input type="hidden" name="anggota" id="anggota" value="{{$id}}">
        <input type="hidden" name="isset_letter" id="isset_letter" value="1">
        <input type="hidden" name="isset_invoice" id="isset_invoice" value="1">

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