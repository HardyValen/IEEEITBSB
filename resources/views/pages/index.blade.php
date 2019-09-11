<?php
function getMonthNameShort($x){
        if ($x == '01'){
            return "Jan";
        } else if ($x == '02'){
            return "Feb";
        } else if ($x == '03'){
            return "Mar";
        } else if ($x == '04'){
            return "Apr";
        } else if ($x == '05'){
            return "May";
        } else if ($x == '06'){
            return "Jun";
        } else if ($x == '07'){
            return "Jul";
        } else if ($x == '08'){
            return "Aug";
        } else if ($x == '09'){
            return "Sep";
        } else if ($x == '10'){
            return "Oct";
        } else if ($x == '11'){
            return "Nov";
        } else if ($x == '12'){
            return "Dec";
        } else {
            return "";
        }
    }

    function getDateShort($x){
        $tahun = substr($x, 0, 4);
        $bulan = getMonthNameShort(substr($x, 5, 2));
        $tanggal = substr($x, 8, 2);

        return $bulan." ".$tanggal.", ".$tahun;
    }
?>
@extends('layouts.app')

@section('content')
    <section class='hero'>
        <div class="hero-content__text px-4">
            <object class='hero-logo' data="assets/images/Digital Logo IEEE ITB.svg" type="image/svg+xml"></object>
            <h1>World’s Largest Technical Professional Organization</h1>
        </div>

        <div class="hero-content">
            <a href=#landing-post>
                <i class="hero-icon__scroll-down fas fa-chevron-down animate-down-infinite"></i>
            </a>
        </div>
    </section>

    <section class="newsboard-container-body" id="newsboard-body">
    <div class="row">
        <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 blog-card-container" id='blog-container'>
            <div class='newsboard-landing-title'>
                <p>Check out the lastest articles of IEEE ITB SB on</p>
                <a href='/blog'><h1>The Newsboard</h1></a>
            </div>
            <div class="newsboard-landing-cards">
                <h2>Recent Posts</h2>
                @foreach($posts as $post)
                <div class="row">
                    <a class='blog-card-link' href='/blog/{{$post->id}}'>
                        <div class="col-12 blog-card">
                            <h1>{{$post->title}}</h1>
                            <p class="blog-card-date">
                                {{getDateShort($post->created_at)}}
                            </p>
                            <p>
                                @if (strlen($post->summary) <= 160)
                                    {{$post->summary}}
                                @else
                                    {{substr($post->summary, 0, 160)}} ...
                                @endif
                            </p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>    
    </section>

    <section class="landing-competitions" id='landing-competitions'>
        <h1>Competitions</h1>
        <div class="row">
            <div class="col-12 landing-competitions__header">
                <h3>2019</h3>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <div class="landing-competitions__card">
                    <div class="media">
                        <object class='logo-competitions' data="{{URL::asset('assets/images/_Competition-DisasterHack/DisasterHack-Icon.svg')}}" type="image/svg+xml"></object>

                        <div class="media-body">
                            <h1>Health Disaster Hack</h1>
                            <p>
                                A hackathon competition by IEEE SIGHT Indonesia, IEEE ITB Student Branch, and Biomedical Engineering Bandung Institute of Technology for talented undergraduate developers. Do your best to solve a certain risk and disaster management problem!
                            </p>

                            <p>
                                <b>Competition Ended</b><br>
                                <b>[<a href="/disaster-hack">More info</a>]</b>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="landing-competitions__card">
                    <div class="media">
                    <object class='logo-competitions' data="{{URL::asset('assets/images/Vendor Assets/shortmovie-icon.svg')}}" type="image/svg+xml"></object>

                        <div class="media-body">
                            <h1>Short Movie - IEEE FUSION 2019</h1>
                            <p>
                                A competition for high school students in Indonesia to further explore ideas, create a story, implement and show off the ability to make a movie, acting, and cinematography skills, and share their work not only as a competition submission but also as a creation that can affect and improve people’s awareness concerning the impact of technology on humanity through a work of short movie. 
                            </p>

                            <p>
                                <b>Registration Period | </b> 
                                July 15<sup>th</sup> 2019 &ndash; September 7<sup>th</sup> 2019
                                <br>
                                <b> [<a href='/register'>Register</a>]
                                    [<a href='/guidebook/short-movie'>Guidebook</a>]</b>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="landing-competitions__card">
                    <div class="media">
                    <object class='logo-competitions' data="{{URL::asset('assets/images/Vendor Assets/invest-icon.svg')}}" type="image/svg+xml"></object>

                        <div class="media-body">
                            <h1>Innovation Contest - IEEE FUSION 2019</h1>
                            <p>
                                A competition held by IEEE ITB Student Branch to find the best innovation among participants from all around Asia. Innovation must be a real invention that can be directly implemented in the form of prototypes, systems, products, or platforms. Participants should make their creation according to the themes and subthemes specified.
                            </p>

                            <p>
                                <b>Registration Period | </b> 
                                July 15<sup>th</sup> 2019 &ndash; September 7<sup>th</sup> 2019
                                <br>
                                <b> [<a href='/register'>Register</a>]
                                    [<a href='/guidebook/invest'>Guidebook</a>]</b>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="landing-competitions__card">
                    <div class="media">
                    <object class='logo-competitions' data="{{URL::asset('assets/images/Vendor Assets/casestudy-icon.svg')}}" type="image/svg+xml"></object>

                        <div class="media-body">
                            <h1>Case Study - IEEE FUSION 2019</h1>
                            <p>
                                A brand-new event of IEEE ITB Student Branch. It is an international competition participated by student of various major, mainly electrical and computer science engineering, all around the world. The competition focuses on analysis of a real case related to industries, identification of main problems and proposition of best solution to solve the problem. The competition consists of two main stages, which are preliminary phase (paper selection) and final phase (presentation). 
                            </p>

                            <p>
                                <b>Registration Period | </b> 
                                July 15<sup>th</sup> 2019 &ndash; September 7<sup>th</sup> 2019
                                <br>
                                <b> [<a href='/register'>Register</a>]
                                    [<a href='/guidebook/case-study'>Guidebook</a>]</b>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src=""></script>
<script src="{{URL::asset('assets/js/navbar-transparent.js')}}"></script>
@endsection
