@extends('layouts.app')

@section('content')
<section class='generic-container'>
    <div class="generic-content__text">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <h1>HEALTH DISASTER HACK</h1>
                <p>
                    Indonesia is a bountiful country that faces frequent natural disasters across the archipelago. In order to mitigate the damage done by those disastrous events, we should advance with our technology. Do you want to contribute with your technical abilities?
                </p>

                <p>
                    Join the hackathon competition by IEEE SIGHT Indonesia, IEEE ITB Student Branch, and Biomedical Engineering Bandung Institute of Technology for talented undergraduate developers. Do your best to solve a certain risk and disaster management problem!
                </p>

                <div class="table-of-content">
                    <h1>Table of Contents</h1>
                    <a href="#poster">Poster</a>
                    <a href="#essay-tac">Essay Competition Terms and Conditions</a>
                    <a href="#hackathon-tac">Hackathon Terms and Conditions</a>
                    <a href="#essay-criteria">Essay Criteria</a>
                    <a href="#scoring">Scoring</a>
                    <a href="#registration">How to join the competition</a>
                </div>

            </div>
        </div>
    </div>
</section>

<section class='generic-container' id='poster'>
    <div class="generic-content__text">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <h2>poster</h2>
                <img class='generic-poster-image img-fluid rounded' src={{URL::asset('assets/images/_Competition-DisasterHack/DisasterHack-Poster.jpg')}}>

            </div>
        </div>
    </div>
</section>

<section class='generic-container'>
    <div class="generic-content__text">
        <div class="row" >
            <div class="offset-lg-2 col-lg-8 my-4" id='essay-tac'>
                <h2>1<sup>st</sup> Stage: Essay Terms and Conditions</h2>
                <ol>
                    <li>
                        Competitors are required to provide student identifications i.e. student card or other equivalent documents.
                    </li>
                    <li>
                        The essay consists of a maximum of 2 (two) pages must be submitted by April 19th 2019.
                    </li>
                    <li>
                        The essay must provide a solution for post disaster health issues.
                    </li>
                    <li>
                        Registration and submission are done via IEEE ITB SB website.
                    </li>
                    <li>
                        Maximum of 3 (three) member in each team.
                    </li>
                    <li>
                        Maximum of 1 (one) entry for each team.
                    </li>
                    <li>
                        The best 15 (fifteen) teams will go through the final stage, which will be held in Bandung Institute of Technology, Bandung, West Java.
                    </li>
                    <li>
                        Accommodations will be provided by organizer.
                    </li>
                    <li>
                        Every member of the best 15 (fifteen) teams will receive a free IEEE Student Membership for a year.
                    </li>
                    <li>
                        Judges’ decisions are final and nonnegotiable. 
                    </li>
                </ol>
            </div>
        </div>

        <div class="row" >
            <div class="offset-lg-2 col-lg-8 my-4" id='hackathon-tac'>
                <h2>2<sup>nd</sup> Stage: Hackathon Terms and Conditions</h2>
                <ol>
                    <li>
                        The final will be a hackathon competition, held at Bandung Institute of Technology, Bandung, West Java on Saturday, April 27th 2019.
                    </li>
                    <li>
                        Finalists will be announced from the top 15 (fifteen) essays on Saturday, April 20th 2019.
                    </li>
                    <li>
                        Each team will be given a specific case linked to the theme.
                    </li>
                    <li>
                        Each finalist will be given a case to answer in the presentation.
                    </li>
                    <li>
                        The presentation will be done in front of professionals 1 (one) day after the case is given.
                    </li>
                    <li>
                        Technical guide will be sent via email to the finalists.
                    </li>
                </ol>
            </div>
        </div>

        <div class="row" >
            <div class="offset-lg-2 col-lg-8 my-4" id='essay-criteria'>
                <h2>Essay Criteria</h2>
                <ol>
                    <li>
                        The essay is original.
                    </li>
                    <li>
                        The theme of the essay is “Post Disaster Health Issues”.
                    </li>
                    <li>
                        Maximum of 2 (two) pages, excluding the bibliography, attachment, reference, and appendix..
                    </li>
                    <li>
                        The essay does not contain hate speech, pornography, or other demeaning content.
                    </li>
                </ol>
            </div>
        </div>

        <div class="row" >
            <div class="offset-lg-2 col-lg-8 my-4" id='scoring'>
                <h2>Scoring</h2>
                <ol>
                    <li>
                        Feasibility
                    </li>
                    <li>
                        Implementation
                    </li>
                    <li>
                        Writing structure
                    </li>
                </ol>
            </div>
        </div>

        <div class="row" >
            <div class="offset-lg-2 col-lg-8 my-4" id='registration'>
                <h2>How to Join the Competition</h2>
                <ol>
                    <li>
                        <a href='/login' style='color: #00629B'>Login </a> to IEEE ITB Student Branch website as a team leader.<br>
                        if you don't have an account, <a href='/register' style='color: #00629B'>Register Here</a>
                    </li>
                    <li>
                        Create your team in <a href='/dashboard/team-info' style='color: #00629B'>manage team</a> by adding more team member(s)
                    </li>
                    <li>
                        <a href='/essay' style='color: #00629B'>Upload your essay</a>
                    </li>
                    <li>
                        Wait for the announcement
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

@endsection