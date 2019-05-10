<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.subsection.head')
</head>

<body>
    <section class='registration-container' >
        <div class="registration-content" style='background-color:#fff'>

            <div class="registration-content__header">
                <a href='{{URL::asset("")}}'>	
                    <img class='register-icon' src='{{URL::asset("assets/images/LogoIEEEbiru-min.png")}}'>
                </a>
            </div>

            <div class="registration-content__body">
            <h1>One More Step</h1>
                <p>
                    We have sent the email for you to <b>{{$email}}</b>
                </p>

                <p>
                    The email contains your <b>password</b> and team details. The information should only be disclosed to team members.
                </p>

                <a href='https://ieee-itb-sb.com/login'>go to login page &rarr;</a>
            </div>
        </div>
    </section>
</body>