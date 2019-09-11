@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    &larr; <a href='/dashboard'>Dashboard</a>
    <h1>External Files</h1>

    <div class="guidebook-container">
        <div class="row" >
            <div class=" col-lg-9 " id='c'>
                <h1>Fusion 2019</h1>
                <h2>Case Study</h2>
                <ul>
                    <li>
                        <a href="{{URL::asset('assets/fusion2019/case-study/guidebook_casestudy.pdf')}}">Guidebook <sup><i class="fas fa-file-download"></i></sup></a>
                    </li>
                    <li>
                        <a href="https://bit.ly/StoryboardExp">Storyboard Format <sup><i class="fas fa-link"></i></sup></a>
                    </li>
                    <li>
                        <a href="{{URL::asset('assets/fusion2019/case-study/studyCaseContest2019.pdf')}}">Preliminary Study Case <sup><i class="fas fa-file-download"></i></sup></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" >
            <div class=" col-lg-9 " id='c'>
                <h2>Innovation Contest</h2>
                <ul>
                    <li>
                        <a href="{{URL::asset('assets/fusion2019/invest/guidebook_innovcontest.pdf')}}">Guidebook <sup><i class="fas fa-file-download"></i></sup></a>
                    </li>
                    <li>
                        <a href="{{URL::asset('assets/fusion2019/invest/paperFormat.docx')}}">Paper Format <sup><i class="fas fa-file-download"></i></sup></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" >
            <div class=" col-lg-9 " id='c'>
                <h2>Short Movie</h2>
                <ul>
                    <li>
                        <a href="{{URL::asset('assets/fusion2019/short-movie/guidebook_shortmovie.pdf')}}">Guidebook <sup><i class="fas fa-file-download"></i></sup></a>
                    </li>
                    <li>
                        <a href="{{URL::asset('assets/fusion2019/short-movie/letterOfRecommendation.docx')}}">Letter of Recommendation <sup><i class="fas fa-file-download"></i></sup></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection