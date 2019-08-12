@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    &larr; <a href='/dashboard'>Dashboard</a>&ensp;/&ensp;<a href='/dashboard/invest'>Innovation Contest</a>
    <h1>Upload Files</h1>
    
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


    <form action="/dashboard/invest/upload-files" method="POST" enctype = "multipart/form-data">
        @csrf

        <input type='file' name="submission" id = "submission" class='inputfile' required>
        <label for='submission' class='upload-button-custom'><span><i class='fa fa-upload'></i> Essay (.pdf)</span></label><br>

        <input type='file' name="invoice" id = "invoice" class='inputfile' required>
        <label for='invoice' class='upload-button-custom'><span><i class='fa fa-upload'></i> Invoice (.jpg / .png)</span></label><br>

        <input type="hidden" name="isset_essay" id="isset_essay" value="1">
        <input type="hidden" name="isset_invoice" id="isset_invoice" value="1">
        <input type="hidden" name="is_verified" id="is_verified" value="1">

        <button class='primary-button mt-5 mb-3'>Submit Files</button>
        <div class="row">
            <div class="col-lg-8">
                <div class='alert alert-dismissible fade show alert-info'>
                    <i class='fas fa-info-circle'></i>&ensp;The "Submit Files" button does not work? Make sure you have set the images on the respective buttons above
                </div>
            </div>
        </div>
    </form>

    <script>$("#dashboard").addClass("active")</script>
    <script src="{{URL::asset('assets/js/custom-file-input.js')}}"></script>
@endsection