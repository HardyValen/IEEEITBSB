@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    &larr; <a href='/dashboard'>Dashboard</a>&ensp;/&ensp;<a href='/dashboard/case-study'>Case Study</a>
    <h1>FAQ</h1>
    
@endsection