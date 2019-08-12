@extends('layouts.app')

@section('content')

<section class='generic-container'>
    <div class="generic-content__text">
        <div class="row">
            <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8">
                <div class="generic-header">
                    <h1>IEEE FUSION 2019</h1>
                </div>
                <div class='generic-body' id='a'>
                    <h1>Competitions</h1>
                    <div class="media">
                        <object class='logo-competitions' data="{{URL::asset('assets/images/Vendor Assets/casestudy-icon.svg')}}" type="image/svg+xml"></object>
                        <div class="media-body">
                            <h2>Case Study</h2>
                            <p>
                                A brand-new event of IEEE ITB Student Branch. It is an international competition participated by student of various major, mainly electrical and computer science engineering, all around the world. The competition focuses on analysis of a real case related to industries, identification of main problems and proposition of best solution to solve the problem. The competition consists of two main stages, which are preliminary phase (paper selection) and final phase (presentation). 
                                [<a href='/guidebook/case-study'>guidebook</a>] 
                                [<a href='/register'>register</a>]
                            </p>
                        </div>
                    </div>

                    <div class="media">
                    <object class='logo-competitions' data="{{URL::asset('assets/images/Vendor Assets/invest-icon.svg')}}" type="image/svg+xml"></object>
                        <div class="media-body">
                            <h2>Innovation Contest</h2>
                            <p>
                                A competition held by IEEE ITB Student Branch to find the best innovation among participants from all around Asia. Innovation must be a real invention that can be directly implemented in the form of prototypes, systems, products, or platforms. Participants should make their creation according to the themes and subthemes specified.
                                [<a href='/guidebook/invest'>guidebook</a>] 
                                [<a href='/register'>register</a>]
                            </p>
                        </div>
                    </div>

                    <div class="media">
                    <object class='logo-competitions' data="{{URL::asset('assets/images/Vendor Assets/shortmovie-icon.svg')}}" type="image/svg+xml"></object>
                        <div class="media-body">
                            <h2>Short Movie</h2>
                            <p>
                                A competition for high school students in Indonesia to further explore ideas, create a story, implement and show off the ability to make a movie, acting, and cinematography skills, and share their work not only as a competition submission but also as a creation that can affect and improve people’s awareness concerning the impact of technology on humanity through a work of short movie.
                                [<a href='/guidebook/short-movie'>guidebook</a>] 
                                [<a href='/register'>register</a>]
                            </p>
                        </div>
                    </div>
                </div>

                <div class='generic-body' id='b'>
                    <h1>How to Register</h1>
                    <h2>Account Creation</h2>
                    <ol>
                        <b><li>
                            Create IEEE ITB SB Account <a href='/register' target='_blank'>Here</a><br></b>
                            You are required to register on IEEE ITB SB Account in order to participate on IEEE FUSION 2019 Competitions. On that page, the team leader are required to fill the fields:
                            <ul>
                                <li>Full Name</li>
                                <li>Student ID number / NIM</li>
                                <li>Affiliation / School / University</li>
                                <li>Contactable team leader email</li>
                                <li>Contactable team leader phone number / WhatsApp number</li>
                                <li>Contactable team leader line ID</li>
                            </ul>
                        </li>
                        <b><li>
                            You'll Recieve an email that informs you the account's password<br></b>
                            Check on the junk section if you didn't found the mail on your inbox, this case is very unlikely to occur.
                        </li>
                        <b><li>
                            <a href='/login' target='_blank'>Log in</a> with your email and password that has been sent to your email earlier</b><br>
                            In case of forgotten password, you can restore your account [<a href='/forget' target=_blank>here</a>]. We also provide the link on the login page. On that page, the team leader/account owner is required to fill the email field. We shall send the recovery password afterwards to the corresponding email.
                        </li>
                        <li>
                            After logged in, you are redirected to the dashboard page. There are several options provided on the dashboard page, such as:
                            <ul>
                                <li><b>Landing Page</b>, Redirects you back to the <a href='/' target='blank'>main page</a></li>
                                <li><b>Guidebook</b>, Redirect you to the guidebook page of IEEE FUSION</li>
                                <li><b>External Files</b>, Redirects you to the page that contains downloadable IEEE FUSION guidebooks, Letter of Recommendation for Short Movie, essay format for Case Study, and paper format for Innovation Contest</li>
                            </ul>
                        </li>
                    </ol>
                        
                </div>
                <div class='generic-body' id='c'>
                    <h2>Case Study</h2>
                    <ol>
                        <li>
                            On the account dashboard, select <b>Case Study</b>. Caution, you cannot undo your appliance to case study competition afterwards.
                        </li>
                        <li>
                            Insert your team name on the field provided. Caution, you cannot change your team name once filled
                        </li>
                        <li>
                            After successfully registered your team as a Case Study participant, you are redirected to case study page filled with options such as:
                            <ul>
                                <li><b>Guidebook</b>, views case study guidebook and the essay format</li>
                                <li>
                                    <b>Manage Team</b>, views team info and status. You can add more team members here. You can also add your 3x4 photo (pas foto 3x4) and student ID Card. On the manage team, there were team status. Here are the description of each status provided:
                                    <ul>
                                        <li>
                                            Essay Submission: Shows that your essay's existence in our database, possible cases:
                                            <ol style='list-style-type: none;'>
                                                <li class='text-danger'><i class="fas fa-exclamation-circle"></i>&ensp;<b>None</b>, indicates that you haven't sent your essay to the database</li>
                                                <li class='text-success'><i class="fas fa-check"></i>&ensp;<b>Submitted</b>, indicates that your have sent your essay to the database</li>
                                            </ol>
                                        </li>
                                        <li>
                                            Essay Verification: Shows that your essay has been verified by the administrator or not, possible cases:
                                            <ol style='list-style-type: none;'>
                                                <li class='text-danger'><i class="fas fa-exclamation-circle"></i>&ensp;<b>No Essay</b>, your essay doesn't exist in our database</li>
                                                <li class='text-warning'><i class="far fa-clock"></i>&ensp;<b>Waiting for Verification</b>, your essay exists in our database. But, the administrator hasn't checked the registration invoice</li>
                                                <li class='text-success'><i class="fas fa-check"></i>&ensp;<b>Verified</b>, your essay exists in our database and your payment status has been approved</li>
                                            </ol>
                                        </li>
                                        <li>
                                            Payment Status: Shows the registration invoice status of your team, possible cases:
                                            <ol style='list-style-type: none;'>
                                                <li class='text-danger'><i class="fas fa-exclamation-circle"></i>&ensp;<b>Unpaid</b>, your registration invoice doesn't exist in our database</li>
                                                <li class='text-warning'><i class="far fa-clock"></i>&ensp;<b>Waiting for Verification</b>, your registration invoice exists in our database. But, the administrator hasn't checked yet/li>
                                                <li class='text-success'><i class="fas fa-check"></i>&ensp;<b>Paid</b>, your registration invoice exists in our database and your payment status has been approved by the administrator</li>
                                            </ol>
                                        </li>
                                    </ul>
                                </li>
                                <li><b>Upload Files</b>, redirects you to the upload page. Here you can upload your preliminary essay and invoice.</li>
                            </ul>
                        </li>
                        <li>After you upload the files (Photos and ID Card of each member, Registration Invoice, and Preliminary Essay) provided to the server, the team status shall change. Your team shall wait until the finalist announcement</li>
                    </ol>
                </div>
                <div class='generic-body' id='d'>
                    <h2>Innovation Contest</h2>
                    <ol>
                        <li>
                            On the account dashboard, select <b>Innovation Contest</b>. Caution, you cannot undo your appliance to case study competition afterwards.
                        </li>
                        <li>
                            Insert your team name and the subtheme on the provided field. Caution, you cannot change your team name once filled.
                        </li>
                        <li>
                            After successfully registered your team as an Innovation Contest participant, you are redirected to the competition page filled with options such as:
                            <ul>
                                <li><b>Guidebook</b>, views innovation contest guidebook and the paper format</li>
                                <li>
                                    <b>Manage Team</b>, views team info and status. You can add more team members here. You can also add your 3x4 photo (pas foto 3x4) and student ID Card. On the manage team, there were team status. Here are the description of each status provided:
                                    <ul>
                                        <li>
                                            Essay Submission: Shows that your essay's existence in our database, possible cases:
                                            <ol style='list-style-type: none;'>
                                                <li class='text-danger'><i class="fas fa-exclamation-circle"></i>&ensp;<b>None</b>, indicates that you haven't sent your essay to the database</li>
                                                <li class='text-success'><i class="fas fa-check"></i>&ensp;<b>Submitted</b>, indicates that your have sent your essay to the database</li>
                                            </ol>
                                        </li>
                                        <li>
                                            Essay Verification: Shows that your essay has been verified by the administrator or not, possible cases:
                                            <ol style='list-style-type: none;'>
                                                <li class='text-danger'><i class="fas fa-exclamation-circle"></i>&ensp;<b>No Essay</b>, your essay doesn't exist in our database</li>
                                                <li class='text-warning'><i class="far fa-clock"></i>&ensp;<b>Waiting for Verification</b>, your essay exists in our database. But, the administrator hasn't checked the registration invoice</li>
                                                <li class='text-success'><i class="fas fa-check"></i>&ensp;<b>Verified</b>, your essay exists in our database and your payment status has been approved</li>
                                            </ol>
                                        </li>
                                        <li>
                                            Payment Status: Shows the registration invoice status of your team, possible cases:
                                            <ol style='list-style-type: none;'>
                                                <li class='text-danger'><i class="fas fa-exclamation-circle"></i>&ensp;<b>Unpaid</b>, your registration invoice doesn't exist in our database</li>
                                                <li class='text-warning'><i class="far fa-clock"></i>&ensp;<b>Waiting for Verification</b>, your registration invoice exists in our database. But, the administrator hasn't checked yet/li>
                                                <li class='text-success'><i class="fas fa-check"></i>&ensp;<b>Paid</b>, your registration invoice exists in our database and your payment status has been approved by the administrator</li>
                                            </ol>
                                        </li>
                                    </ul>
                                </li>
                                <li><b>Upload Files</b>, redirects you to the upload page. Here you can upload your preliminary paper and invoice.</li>
                            </ul>
                        </li>
                        <li>After you upload the files (Photos and ID Card of each member, Registration Invoice, and Preliminary Paper) provided to the server, the team status shall change. Your team shall wait until the finalist announcement</li>
                    </ol>
                </div>
                <div class='generic-body' id='e'>
                    <h2>Short Movie</h2>
                    <ol>
                        <li>
                            On the account dashboard, select <b>Short Movie</b>. Caution, you cannot undo your appliance to short movie competition afterwards.
                        </li>
                        <li>
                            Insert your team name and the subtheme on the provided field. Caution, you cannot change your team name once filled.
                        </li>
                        <li>
                            After successfully registered your team as a short movie  participant, you are redirected to short movie  page filled with options such as:
                            <ul>
                                <li><b>Guidebook</b>, views short movie guidebook and the letter of recommendation</li>
                                <li>
                                    <b>Manage Team</b>, views team info and status. You can add registration invoice on this page. Here are the description of each status provided:
                                    <ul>
                                        <li>
                                            Letter of Recommendation: Shows the existence of the letter of recommendation in our database, possible cases:
                                            <ol style='list-style-type: none;'>
                                                <li class='text-danger'><i class="fas fa-exclamation-circle"></i>&ensp;<b>No Photo</b>, indicates that you haven't sent the Letter of Recommendation</li>
                                                <li class='text-success'><i class="fas fa-check"></i>&ensp;<b>Uploaded</b>, indicates that your have sent the Letter of Recommendation</li>
                                            </ol>
                                        </li>
                                        <li>
                                            Payment Status: Shows the registration invoice status of your team, possible cases:
                                            <ol style='list-style-type: none;'>
                                                <li class='text-danger'><i class="fas fa-exclamation-circle"></i>&ensp;<b>Unpaid</b>, your registration invoice doesn't exist in our database</li>
                                                <li class='text-warning'><i class="far fa-clock"></i>&ensp;<b>Waiting for Verification</b>, your registration invoice exists in our database. But, the administrator hasn't checked yet/li>
                                                <li class='text-success'><i class="fas fa-check"></i>&ensp;<b>Paid</b>, your registration invoice exists in our database and your payment status has been approved by the administrator</li>
                                            </ol>
                                        </li>
                                        <li>
                                            URL Submission: Shows the status about submittance of Youtube URL link of assigned short movie, possible cases:
                                            <ol style='list-style-type: none;'>
                                                <li class='text-danger'><i class="fas fa-exclamation-circle"></i>&ensp;<b>None</b>, you haven't send the short movie URL</li>
                                                <li class='text-warning'><i class="far fa-clock"></i>&ensp;<b>Waiting for Verification</b>, you have send the short movie URL. But, the administrator hasn't checked yet</li>
                                                <li class='text-success'><i class="fas fa-check"></i>&ensp;<b>Verified</b>, your short movie URL has been approved</li>
                                            </ol>
                                        </li>
                                    </ul>
                                </li>
                                <li><b>Submit URL</b>, redirects you to the submit URL page. Here you can submit the Youtube URL Short Movie.</li>
                            </ul>
                        </li>
                        <li>After you submit the URL and upload the files required, the team status shall change. Your team shall wait until the finalist announcement</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection