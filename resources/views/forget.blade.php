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
                    <h1>Account Recovery</h1>
					
					{{ Session::get('wrong')}}
					<form method="POST" action="forget" >
                    @csrf

                        <div class="row">
                            <div class="col-12">
                                <p>
                                    Please fill your IEEE ITB SB Account email. We will send a new password to the corresponding email immediately.
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="group" data-validate="Email is required">
                                    <input type="email" id="email" name="email" placeholder=' ' autocomplete="email" required />
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-6">
                                <a href='/login' class="optional-button"> Back to Login </a> 
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <div class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="primary-button"  value="Send" />
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
	
