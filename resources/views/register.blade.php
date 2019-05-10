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

                    <input type="hidden" name="id_lomba" value="1" id="id_lomba">
                        <div class="registration-content__body-mandatory">
                            <div class="group">
                                <input type="text" name="name" id="name" placeholder=' ' required />
                                <span class="bar"></span>
                                <label>Name</label>
                            </div>
                            
                            <div class="group">
                                <input type="text" name="nim" id="nim" placeholder=' ' required />
                                <span class="bar"></span>
                                <label>Student ID Number</label>
                            </div>

                            <div class="group">
                                <input type="email" name="email" id="email" placeholder=' ' required />
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>

                            <div class="group">
                                <input type="text" name="afiliasi" id="afiliasi" placeholder=' ' required />
                                <span class="bar"></span>
                                <label>Institution</label>
                            </div>
                        </div>
                            
                        <p>Your password shall be sent to corresponding email.</p>
                        
                        <div class="form-submit">
                            <input type="submit" name="submit" id="submit" class="submit" value="Create Account" />
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