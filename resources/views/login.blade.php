<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.subsection.head')
</head>
<body class='overflowx-hidden'>
	<main>
        <section class='registration-container' >
            <div class="registration-content" style='background-color:#fff'>

                <div class="registration-content__header">
					<a href='{{URL::asset("")}}'>	
						<img class='register-icon' src='{{URL::asset("assets/images/LogoIEEEbiru-min.png")}}'>
					</a>
				</div>

                <div class="registration-content__body">
                    <h1>Login</h1>
					
					{{ Session::get('wrong')}}
					<form method="POST" action="login" >
                    @csrf

                        <div class="registration-content__body-mandatory">
                            <div class="row">
                                <div class="col-8">
                                    <div class="group" data-validate="Username is required">
                                        <input type="email" id="email" name="email" placeholder=' ' autocomplete="username" required />
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-8">
                                    <div class="group" data-validate="Password is required">
                                        <input type="password" id="password" name="password" placeholder=' ' autocomplete="current-password" required />
                                        <span class="bar"></span>
                                        <label>Password</label>
                                        <p><a href="/forget">Forgot your password?</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="registration-content__body-mandatory">
                            <div class="row">
                                <div class="col-6">
                                    <a class='optional-button' href="register">Register</a>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <div class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="primary-button" value="Sign In" />
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
	</main>

	<script src="vendor/jquery/jquery.min.js"></script>
</body>
</html>
	
