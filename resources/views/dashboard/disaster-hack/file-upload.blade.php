@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    <a href='/dashboard'>&larr; Dashboard</a>
    <h1>File Upload</h1>


    <script>$("#dashboard").addClass("active")</script>
@endsection
