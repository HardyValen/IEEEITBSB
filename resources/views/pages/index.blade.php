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

    <section class="landing-post" id='landing-post'>
        <div class="row">
            <div class="col-lg-2">
                <h1 class='post-header'>Recent Posts</h1>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-lg-4 landing-post__blogcard">
                        <div class="blogcard-container">
                            <div class="blogcard-header">
                                <a href="/blog/{{$post->id}}"><h1>{{$post->title}}</h1></a>
                            </div>
                            <div class="blogcard-content">
                                {!!substr($post->body_html, 0, 160)!!}...
                                <p><a href='/blog/{{$post->id}}'>see more &mdash;</a></p>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        

        

    </section>

    <section class="landing-competitions" id='landing-competitions'>
        <h1>Competitions</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="landing-competitions__card">
                    <div class="media">
                        <object class='logo-competitions' data="{{URL::asset('assets/images/_Competition-DisasterHack/DisasterHack-Icon.svg')}}" type="image/svg+xml"></object>

                        <div class="media-body">
                            <h1>Health Disaster Hack</h1>
                            <p>
                                A hackathon competition by IEEE SIGHT Indonesia, IEEE ITB Student Branch, and Biomedical Engineering Bandung Institute of Technology for talented undergraduate developers. Do your best to solve a certain risk and disaster management problem!
                            </p>

                            <p>
                                <i class="fas fa-scroll"></i>
                                <b>Registration Period | </b> 1 &ndash; 19 April 2019
                            </p>

                            <p>
                                <a href="/disaster-hack">&mdash; More info</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="landing-competitions__card">
                    <div class="media">
                        <object class='logo-competitions' data="{{URL::asset('assets/images/_Competition-DisasterHack/Image-ComingSoon.svg')}}" type="image/svg+xml"></object>

                        <div class="media-body">
                            <h1>IEEE Fusion Competitions</h1>
                            <p>
                                Three Competitions from IEEE Student Branch ITB is yet to be revealed this April! Stay tuned for more info.
                            </p>

                            <p>
                                <i class="far fa-calendar-alt"></i>
                                <b>Reveal Date | </b> Late April 2019
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
