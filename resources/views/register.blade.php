<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.subsection.head')
</head>
<body>

    <main>
        <section class='registration-container' >
            <div class="registration-content" style='background-color:#fff'>

                <div class="registration-content__header">
                    <a href='{{URL::asset("")}}'> <!-- Jangan lupa kasih Hover buat ada teks biar orang tau klo ngeklik ini bisa balik ke home page-->
                        <img class='register-icon' src='{{URL::asset("assets/images/LogoIEEEbiru-min.png")}}'>
                    </a>
                </div>

                <div class="registration-content__body">
                    <h1>Create your Account</h1>

                    <form method="POST" class="appointment-form" id="registration-form" action="register">
                    @csrf

                    <!--<input type="hidden" name="id_lomba" value="1" id="id_lomba">-->
                        <div class="registration-content__body-mandatory">
                            <h2>Identity</h2>
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="group">
                                        <input type="text" name="name" id="name" placeholder=' ' required />
                                        <span class="bar"></span>
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="offset-lg-1 col-lg-4">
                                    <div class="group">
                                        <input type="text" name="nim" id="nim" placeholder=' ' required />
                                        <span class="bar"></span>
                                        <label>ID Number (NIM)</label>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="group">
                                <input type="text" name="afiliasi" id="afiliasi" placeholder=' ' required />
                                <span class="bar"></span>
                                <label>Afilliation</label>
                                <p><b><i class="fas fa-info-circle"></i> Note: </b>Don't use abbreviation (ex. ITB, UGM) | Insert your High School / University there</p>
                            </div>

                            <div class="group">
                                <input type="email" name="email" id="email" placeholder=' ' required />
                                <span class="bar"></span>
                                <label>Email</label>
                                <p><b><i class="fas fa-info-circle"></i> Note: </b>Your password shall be sent to corresponding email.</p>
                            </div>
                        </div>

                        <div class="registration-content__body-mandatory">
                            <h2>Contact</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="group">
                                        <input type="text" name="phoneNumber" id="phoneNumber" placeholder=' ' required/>
                                        <span class="bar"></span>
                                        <label>Phone Number</label>
                                    </div>
                                </div>

                                <div class="offset-lg-1 col-lg-4">
                                    <div class="group">
                                        <input type="text" name="lineID" id="lineID" placeholder=' ' required/>
                                        <span class="bar"></span>
                                        <label>Line ID</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-6">
                                    <a class='optional-button' href="login">Sign in instead</a>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <input type="submit" name="submit" id="submit" class="primary-button" value="Create Account" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
</body>
</html>