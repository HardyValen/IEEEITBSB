@extends('layouts.app')

@section('content')
    <section class='generic-container'>
        <div class="generic-content__text">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <h1>About IEEE ITB SB</h1>
                    <p>
                        IEEE is the world’s largest technical professional organization dedicated to advancing technology for the benefit of humanity. IEEE will be essential to the global technical community and to technical professionals everywhere, and be universally recognized for the contributions of technology and of technical professionals in improving global conditions. IEEE's core purpose is to foster technological innovation and excellence for the benefit of humanity.<br>
                    </p>

                    <p>
                        IEEE ITB Student Branch is IEEE’s student branch that develop IEEE Student Member in ITB under IEEE Indonesia’s Section. 
                    </p>

                    <div class="table-of-content">
                        <h1>Table of Contents</h1>
                        <a href="#landing-vision">Vision</a>
                        <a href="#landing-mission">Mission</a>
                        <a href="#organogram">Organogram</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class='landing-vision' id='landing-vision'>
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <div class="landing-vision-content__text">
                    <p>vision</p>
                    <h1>Advancing engineering students to actively react to the evolution of the world’s technology</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-mission" id='landing-mission'>
        <div class="landing-mission-content__text">
            <div class="row">
                <div class="offset-lg-1 col-12 col-lg-11">
                    <p>mission</p>
                </div>
            </div> 
            <div class="row">
                <div class="offset-lg-1 col-lg-5 d-flex align-items-center order-1 order-lg-0">
                    <h1>To promote up-to-date technology development to Indonesia in general and ITB in particular.</h1>
                </div>
                <div class="col-lg-5 mission-icon-odd order-0 order-lg-1">
                    <object class='nav-item' data="assets/images/Assets/Image-Vision-1.svg" type="image/svg+xml"></object>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-mission">
        <div class="landing-mission-content__text">
            <div class="row">
                <div class="offset-lg-1 col-lg-5 mission-icon-even">
                    <object class='nav-item' data="assets/images/Assets/Image-Vision-2.svg" type="image/svg+xml"></object>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <h1>With our professional advisors, to be actively generating technological worlds in the spirit of implementing engineering knowledge comprehensively.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-mission">
        <div class="landing-mission-content__text">
            <div class="row">
                <div class="offset-lg-1 col-lg-5 d-flex align-items-center order-1 order-lg-0">
                    <h1>To collaborate with ITB’s academia for the conformity of student’s congnition of electrotechnical engineering.</h1>
                </div>
                <div class="col-lg-5 mission-icon-odd order-0 order-lg-1">
                    <object class='nav-item' data="assets/images/Assets/Image-Vision-3.svg" type="image/svg+xml"></object>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-mission">
        <div class="landing-mission-content__text">
            <div class="row">
                <div class="offset-lg-1 col-lg-5 mission-icon-even">
                    <object class='nav-item' data="assets/images/Assets/Image-Vision-4.svg" type="image/svg+xml"></object>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <h1>To involve in IEEE Indonesia Section and to bear together on the world’s greatest challenges.</h1>
                </div>
            </div>
        </div>
    </section>

    <section class='generic-container' id='organogram'>
        <div class="generic-content__text">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">

                    <h2>organogram</h2>
                    <img class='generic-poster-image img-fluid rounded' src={{URL::asset('assets/images/ORGANOGRAM-FULL-03-min.png')}}>
                    <p>
                        <b>Chairman</b><br>
                        Gregorius Arthur
                    </p>

                    <p>
                        <b>Vice Chairman</b><br>
                        Achmad Fajar
                    </p>

                    <p>
                        <b>Treasurer</b><br>
                        Firdaus Wahyu
                    </p>

                    <p>
                        <b>Secretary General</b><br>
                        Joshua Situmorang
                    </p>

                    <p>
                        <b>Commitee of Project Paper & Competition</b><br>
                        Anand Bannet<br>
                        Ignatio Senoaji
                    </p>

                    <p>
                        <b>Commitee of Marketing & Communications</b><br>
                        Ferio Brahmana<br>
                        Ignatius Enrico
                    </p>

                    <p>
                        <b>Commitee of Fundraising</b><br>
                        Claysius Dewanata<br>
                        Amirah Ayu
                    </p>

                    <p>
                        <b>Commitee of Human Resource Development</b><br>
                        Yedija Messa<br>
                        Michael Kresna
                    </p>

                    <p>
                        <b>Commitee of Design Production</b><br>
                        Adam Pramana<br>
                        Hardy Valenthio
                    </p> 
                </div>
            </div>               
        </div>
    </section>
@endsection