@section('title', 'Admin Page')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    <p>Hi Admin</p>
    <script>$('#dashboard').addclass("active")</script>
@endsection