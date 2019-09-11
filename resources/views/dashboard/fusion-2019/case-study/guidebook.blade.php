@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    &larr; <a href='/dashboard'>Dashboard</a>&ensp;/&ensp;<a href='/dashboard/case-study'>Case Study</a>
    <h1>Guidebook for Case Study</h1>

    <div class="guidebook-container">
        <div class="container-widgets">
            <div class="container-widgets__header">
                <h2>Guidebook Navigation</h2>
            </div>
            <div class="container-widgets__body">
                <div class="row">
                    <div class="col-4 widget-icon">
                        <a href='/dashboard/case-study/guidebook'>
                            <img src="{{URL::asset('assets/images/Vendor Assets/casestudy-icon.svg')}}">
                            <p>Case Study</p>
                        </a>
                    </div>
                    <div class="col-4 widget-icon">
                        <a href='/dashboard/invest/guidebook'>
                            <img src="{{URL::asset('assets/images/Vendor Assets/invest-icon.svg')}}">
                            <p>Innovation Contest</p>
                        </a>
                    </div>
                    <div class="col-4 widget-icon">
                        <a href='/dashboard/short-movie/guidebook'>
                            <img src="{{URL::asset('assets/images/Vendor Assets/shortmovie-icon.svg')}}">
                            <p>Short Movie</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-of-content">
            <h1>Table of Contents</h1>
            <a href="#a">Description and Purpose</a>
            <a href="#b">Theme</a>
            <a href="#c">Venue and Date</a>
            <a href="#d">General Rules</a>
            <a href="#e">Registration</a>
            <a href="#f">Competition Format</a>
            <a href="#g">Structure Format</a>
            <a href="#h">Judging Criteria</a>
            <a href="#i">Key Dates</a>
            <a href="#j">Results</a>
            <a href="#k">Prizes</a>
            <a href="#l">Contact Person</a>
            <a href="#m">External Links</a>
        </div>
        <div class="row">
            <div class=" col-lg-9 my-4" id='a'>
                <h2>Description and Purpose</h2>
                <p>
                    The Case Study Competition is a brand-new event of IEEE ITB Student Branch. It is an international competition participated by student of various major, mainly electrical and computer science engineering, all around the world. The competition focuses on analysis of a real case related to industries, identification of main problems and proposition of best solution to solve the problem. The competition consists of two main stages, which are preliminary phase (Storyboard selection) and final phase (presentation). 
                </p>
                <p>
                    This competition is made as a platform for students all around the world to apply and sharpen their knowledge and analytical skills. By this competition, IEEE ITB SB are willing to bring out innovative ideas for the future challenge of human life.
                </p>
            </div>
        </div>

        <div class="row" >
            <div class=" col-lg-9 my-4" id='b'>
                <h2>Theme</h2>
                <p class='quote'>
                    “TECHNOLOGICAL DEVELOPMENTS IN LINE WITH THE PRINCIPLES OF HUMAN LIFE”
                </p>
                <p>
                    Our present lives has technology existing in every aspect while it is still broadening in development. Some implementations have the fundamental purpose to flourish civilization and humanity, yet some technological approaches also harm human lives either directly or indirectly. Participants are required to analyze the issue about this theme based on the context given in the case and propose appropriate solutions to it.
                </p>
            </div>
        </div>

        <div class="row" >
            <div class=" col-lg-9 my-4" id='c'>
                <h2>Venue and Date</h2>
                <ol >
                    <li>
                        <b>Technical Meeting</b>
                        <ul>
                            <li>Venue: Multimedia Room</li>
                            <li>Date: Thursday, October 10<sup>th</sup>, 2019</li>
                            <li>Time: 07.30 PM – end (GMT + 7)</li>
                        </ul>
                    </li>
                    <li>
                        <b>Competition Day (Final)</b>
                        <ul>
                            <li>Venue: Bandung Institut Of Technology</li>
                            <li>Date: Friday, October 11<sup>th</sup>, 2019</li>
                            <li>Time: 07.30 PM – end (GMT + 7)</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row" >
            <div class=" col-lg-9 my-4" id='d'>
                <h2>General Rules</h2>
                <ol>
                    <li>All participants must be an undergraduate student of their university until October 2019.</li>
                    <li>Each team consist of 3 students from the same university, 1 of them should be the team leader.</li>
                    <li>Each participant may only participate in one team.</li>
                    <li>Each participant may not participate in other competition held by IEEE SB ITB 2019.</li>
                    <li>Every university may send more than one team.</li>
                    <li>Each team may only send one Storyboard.</li>
                    <li>The Storyboard must be related to the case given from IEEE SB ITB.</li>
                    <li>The submitted work must be new and original.</li>
                    <li>All submission of Storyboard and final presentation materials should be typed, submitted, and presented in formal English.</li>
                    <li>Top 10 teams will be chosen as the finalists and will be invited to Institut Teknologi Bandung, Bandung, West Java, Indonesia to solve the new case that given from the judges to solve.</li>
                    <li>Each team that have been proceed to IEEE SB ITB STUDY CASE COMPETITION final round must attend the Technical Meeting at October 11<sup>th</sup>, 2019.</li>
                    <li>There is one case in this competition, first case for preliminary phase and the second case for Final phase. The preliminary case can be accessed at Website IEEE ITB SB.</li>
                    <li>Judge’s decisions are final and absolute.</li>
                    <li>Any purposeful act of dishonesty observed by any IEEE SB ITB official, will be considered as a cause for disqualification.</li>
                    <li>All regulations of IEEE SB ITB STUDY CASE COMPETITION are subjected to change. All changes will be informed on technical meeting or days before the competition via team leader’s email.</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-9 my-4" id='e'>
                <h2>Registration</h2>
                <div class="table-responsive-xl">
                    <table class="table my-3">
                        <thead>
                            <tr>
                                <th scope="col">Wave</th>
                                <th scope="col">Period</th>
                                <th scope="col">Fee (National)</th>
                                <th scope="col">Fee (International)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">First</th>
                                <td>July 15<sup>th</sup>, 2019 to August 15<sup>th</sup>, 2019</td>
                                <td>IDR 100.000</td>
                                <td>8 USD</td>
                            </tr>
                            <tr>
                                <th scope="row">Second</th>
                                <td>August 16<sup>th</sup>, 2019 to September 7<sup>th</sup>, 2019</td>
                                <td>IDR 150.000</td>
                                <td>12 USD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <ol>
                    <li>
                        Participants must create a team account at our website.
                        Registration will be conducted in IEEE ITB SB 2019 website at 
                        <a href='/register'> http://www.ieee-itb-sb.com/register</a>
                        on July 15<sup>th</sup>, 2019 until, August 31<sup>th</sup>, 2019 at 23.59 (GMT + 7).
                    </li>
                    <li>
                    Participants must complete the registration payment and should wait for confirmation from the competition committee. Fees have to be paid to
                        <ul>
                            <li><b>National</b></li>
                            <ul>
                                <li>Number:&ensp;0820764576</li>
                                <li>Bank:&ensp;BNI</li>
                                <li>Person Name:&ensp;IEEE STUDENT BRANCH</li>
                            </ul>
                            <li><b>International</b></li>
                            <ul>
                                <li>Paypal Email : ieee.sbitb@gmail.com</li>
                            </ul>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-9 my-4" id='f'>
                <h2>Competition Format</h2>
                <ol>
                    <li>
                        <b>Preliminary Phase (Storyboard)</b>
                        <ul>
                            <li>
                                Participants will be given a preliminary case at Website that has to be solved in Storyboard format
                            </li>
                            <li>
                                Full Storyboard submission will be held:
                                <ul>
                                    <li>
                                        July 15<sup>th</sup>, 2019 to August 15<sup>th</sup>, 2019 (First wave)
                                    </li>
                                    <li>
                                        August 16<sup>th</sup>, 2019 to September 7<sup>th</sup>, 2019 (Second wave)
                                    </li>
                                </ul>
                            </li>
                            <li>
                                The submission of Full Storyboard along with payment receipt must be uploaded before August 15<sup>th</sup>, 2019 at 23.59 (GMT + 7) for first wave and before September 7<sup>th</sup>, 2019 at 23.59 (GMT + 7) for second wave to <a href='/dashboard/case-study/upload-files'>here</a>.
                            </li>
                            <li>
                                Participants then upload the Storyboard to the website using the team account before September 7<sup>th</sup>, 2019 at 23.59 (GMT + 7). Submission of the Storyboard must in .pdf form with file name: IEEEITBSB2019_CaseStudyCompetition_Preliminary_(Team Name).pdf and then submit to our website using team account. After submitting your Storyboard, please verify immediately to our contact person.
                            </li>
                        </ul>
                    </li>

                    <li>
                        <b>Final Phase (Presentation)</b>
                        <ul>
                            <li>
                                The best 10 teams will be announced on September 21<sup>st</sup>, 2019
                            </li>
                            <li>
                                The presentation will be held at Institut Teknologi Bandung, West Java, Indonesia, for 3 days: 
                                <ul>
                                    <li>October 10<sup>th</sup>, 2019: Technical meeting</li>
                                    <li>October 11<sup>th</sup>, 2019: Presentation and Exhibition</li>
                                    <li>October 12<sup>th</sup>, 2019 : Grand Seminar and Winner Announcement.</li>
                                </ul>
                                Those teams will present their solution in front of judges at the Final day
                            </li>
                            <li>
                                Each team will have 25 minutes for their presentation at the competition day, as the following:
                                <ul>
                                    <li>Presentation: 15 minutes</li>
                                    <li>QnA: 10 minutes</li>
                                </ul>
                                Those teams will present their solution in front of judges at the Final day
                            </li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-9 my-4" id='g'>
                <h2>Structure Format</h2>
                
                <p>
                    <b>Storyboard Structure</b><br>
                    The Storyboard in preliminary phase follow the IEEE Storyboard Format and Structure can be accessed in our website: http://ieee-itb-sb.com/
                </p>
                
                <p>
                    <b>Presentation Structure</b><br>
                    Each team can present their solution the best they can do as long as it is in .ppt or .pptx form
                </p>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-9 my-4" id='h'>
                <h2>Judging Criteria</h2>
                <p>The assessment will be based on the portion below.</p>
                
                <ol>
                    <li>
                        <b>Preliminary (Storyboard):</b>
                        <ul>
                            <li>
                                <b>Originality (40%)</b><br> 
                                Originality of contribution to knowledge with an emphasis on the Storyboard’s innovativeness in one or more of; 
                                <ol type='i'>
                                    <li>theoretical development</li>
                                    <li>empirical results or,</li>
                                    <li>development</li>
                                </ol>
                                <p></p>
                            </li>
                            <li>
                                <b>Quality of Argument (30%)</b><br> 
                                Quality of argument incorporating;
                                <ol type=i>
                                        <li>Analysis of concepts, theories and findings</li>
                                        <li>Consistency and coherency of debate</li>
                                </ol> 
                                <p></p>
                            </li>
                            <li>
                                <p>
                                    <b>Positioning (15%)</b><br>
                                    Clear positioning of Storyboard in existing international literature with a conclusion(s) that is both convincing and of significant potential 
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Writing Style (15%)</b><br> 
                                    Quality of writing style in term of accuracy, clarity, readability, and organization of the Storyboard 
                                </p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <b>Final (Presentation):</b>
                        <ul>
                            <li>
                                <p>
                                    <b>Originality and Creativity (20%)</b><br>
                                    Theoretical or clinical significance of research; (i) Creativity and originality of logic; (ii) Timeliness and uniqueness of ideas
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Organization (Logical presentation of ideas) (25%) </b><br> 
                                    Objectives/goals are clearly stated; (i) Methods are appropriate for achieving goals; (ii) Results are clearly presented; (iii) Thoughts and ideas flow in a logical manner; (iv) Results accomplish the purposes of the project.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Presentation (Oral presentation and delivery) (20%) </b><br>
                                    Exhibits good body posture; (i) Maintains good eye contact with audience; (ii) Good diction; (iii) good articulation
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Writing Style (15%)</b><br> 
                                    Exhibits knowledge of subject matter; (i) Answers questions with confidence
                                </p>
                            </li>
                            <li>
                                <p>
                                    <b>Neatness (Neatness of charts and graphs) (10%) </b><br> 
                                    Neat slides and/or transparencies; (i) free of marks and smudges; (ii) Visual materials are easy to read.
                                </p>
                            </li>
                        </ul>
                    </li>
                </ol>

                <div class="row">
                    <div class="col-12">
                        <div class='alert alert-dismissible fade show alert-warning'>
                            <i class='fas fa-exclamation-circle'></i>&ensp; Please note that the preliminary phase score is <b>accumulated</b> to the Final phase.
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class=" col-lg-9 my-4" id='i'>
                <h2>Key Dates</h2>
                <div class="table-responsive-xl">
                    <table class="table table-striped my-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Event</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Open Registration</td>
                                <td>July 15<sup>th</sup>, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>First Wave Period</td>
                                <td>July 15<sup>th</sup>, 2019 to August 15<sup>th</sup>, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Second Wave Period</td>
                                <td>July 23<sup>rd</sup>, 2019 to September 7<sup>th</sup>, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Close Registration</td>
                                <td>September 7<sup>th</sup>, 2019 at 23.59 (GMT + 7)</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Finalist Announcement</td>
                                <td>September 21<sup>st</sup>, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Technical Meeting</td>
                                <td>October 10<sup>th</sup>, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Final Competition</td>
                                <td>October 11<sup>th</sup>, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Grand Seminar and Winners Announcement</td>
                                <td>October 12<sup>th</sup>, 2019</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-9 my-4" id='j'>
                <h2>Results</h2>
                <ol>
                    <li>
                        The result of full Storyboard submission will be announced at IEEE ITB SB website.
                    </li>
                    <li>
                        The result of the competition will be announced at the Grand Seminar.
                    </li>
                    <li>
                        Judges’ decisions are final and absolute.
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-9 my-4" id='k'>
                <h2>Prize</h2>
                <div class="table-responsive-xl">
                    <table class="table my-3">
                        <thead>
                            <tr>
                                <th scope="col">Rank</th>
                                <th scope="col">Cash Prize</th>
                                <th scope="col">Certificate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='table-gold'>
                                <th scope="row">1<sup>st</sup></th>
                                <td>IDR 5,000,000</td>
                                <td>✔</td>
                            </tr>
                            <tr class='table-silver'>
                                <th scope="row">2<sup>nd</sup></th>
                                <td>IDR 4,000,000</td>
                                <td>✔</td>
                            </tr>
                            <tr class='table-bronze'>
                                <th scope="row">3<sup>rd</sup></th>
                                <td>IDR 3,000,000</td>
                                <td>✔</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-9 my-4" id='l'>
                <h2>Contact Person</h2>
                <p>
                    <b>RADHIN - Public Relation Dept.</b><br>
                    LINE: radhin03 <br>
                    WhatsApp: 081322113232 <br>
                    Email: radhinghaida03@gmail.com
                </p>
                <p>
                    <b>ABEL - Public Relation Dept.</b><br> 
                    LINE: annisabeliaf <br>
                    WhatsApp: 081910366282 <br>
                    Email: annisabelia09@gmail.com
                </p>
                <p>
                    <b>HARDY - Website Dept.</b><br> 
                    LINE: hardyvalen <br>
                    WhatsApp: 08111011402 <br>
                    Email: hardyvalen@gmail.com
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 my-4" id='m'>
                <h2>External Files</h2>
                <ul>
                    <li>
                        <a href="{{URL::asset('assets/fusion2019/case-study/guidebook_casestudy.pdf')}}">Guidebook <sup><i class="fas fa-file-download"></i></sup></a>
                    </li>
                    <li>
                        <a href="https://bit.ly/StoryboardExp">Storyboard Format <sup><i class="fas fa-link"></i></sup></a>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
@endsection