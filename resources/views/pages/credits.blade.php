@extends('layouts.app')

@section('content')
<section class='generic-container'>
    <div class="generic-content__text">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <h1>Credits</h1>
                        <h2>Sponsorship</h2>
                        <p>This section is dedicated to the companies that support our events.</p>

                        <div class="container-sponsor"> <!-- IEEE FUSION -->
                            <h1>IEEE FUSION 2019</h1>
                            <hr>
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <img src='assets/images/Sponsor - Platina/Astra.jpg' class='img-sponsor-platina img-fluid'>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h2>Vendor Assets</h2>
                        <p>
                            More than half of images in this website are coming from free icon databases such as flaticon and fontawesome. We listed all of the unmodified icons that we use in the link (Google Docs) below. We are truly grateful for the hardworking authors responsible for it.
                        </p>
                        <p>
                            The list of icons used for this website will be regularly updated as soon as the website itself updated to a newer version.
                        </p>
                        <div style="text-align:center">
                            <a href='https://docs.google.com/document/d/178pCAwU5J1-kTM7Fa_Q51R9qq9192R2cTEZnnk5CHk0/edit?usp=sharing' class='primary-button' target="_blank">
                                <i class="fas fa-scroll"></i> List of Vendor Icons
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection