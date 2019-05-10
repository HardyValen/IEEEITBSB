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
                            <div class="group" data-validate="Username is required">
                                <input type="email" id="email" name="email" placeholder=' ' autocomplete="username" required />
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>

                            <div class="group" data-validate="Password is required">
                                <input type="password" id="password" name="password" placeholder=' ' autocomplete="current-password" required />
                                <span class="bar"></span>
                                <label>Password</label>
                            </div>
                        </div>
                        
                        <a href="/forget">Forget Password?</a>

                        <div class="form-submit">
                            <input type="submit" name="submit" id="submit" class="submit" value="Sign In" />
                        </div>  
                    </form>
                </div>
            </div>
        </section>
	</main>

	<script src="vendor/jquery/jquery.min.js"></script>
</body>
</html>
	
