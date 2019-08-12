@section('title', 'IEEE ITB SB Dashboard')
@extends('layouts.dashboard')

@section('sidebar')
    @include('dashboard/subsection/sidebar/sidebar-landing-normal')
@endsection

@section('topbar')
    @include('dashboard/subsection/topbar/topbar-landing-normal')
@endsection

@section('content')
    &larr; <a href='/dashboard'>Dashboard</a>&ensp;/&ensp;<a href='/dashboard/invest'>Innovation Contest</a>
    <h1>Guidebook for Innovation Contest</h1>

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
            <a href="#b1">Subtheme</a>
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
                Innovation Contest is a competition held by IEEE ITB Student Branch to find the best innovation among participants from all around Asia. Innovation must be a real invention that can be directly implemented in the form of prototypes, systems, products, or platforms. Participants should make their creation according to the themes and subthemes specified.
                </p>
                <p>
                    Any undergraduate from Asia may join IEEE Fusion 2019 Innovation Contest. The purpose of this event is to improve the students’ ability to make an up-to-date innovation. Furthermore, this competition can train students to make scientific paper and to present their work to people. 
                </p>
            </div>
        </div>

        <div class="row" >
            <div class=" col-lg-9 my-4" id='b'>
                <h2>Theme</h2>
                <p class='quote'>
                    “Technology for Humanity”
                </p>
                <p>
                    Technology is developing rapidly and this is almost unstoppable. Technology development is undeniable due to human needs. Human nature that is never satisfied causes the birth of new technology to solve problems that arise. Indirectly the development of true technology for human life.
                </p>
            </div>
        </div>

        <div class="row" >
            <div class=" col-lg-9 my-4" id='b1'>
                <h2>Subtheme</h2>
                <ol>
                    <li>
                        <b>Renewable Energy</b><br>
                        Innovation is a form of a process, system or prototype in refining renewable resources (sunlight, wind, rain, tides, waves, biomass, plantation, geothermal heat, etc).
                    </li>
                    <li>
                        <b>Financial Technology</b><br>
                        Develop new technology and innovation that aims to compete with traditional financial methods in the delivery of financial services.
                    </li>
                    <li>
                        <b>Social Technology</b><br>
                        Build a way using human, intellectual and digital resources in order to influence social processes via social software or social hardware.
                    </li>
                    <li>
                        <b>Health Technology</b><br>
                        Make a health technology application of organized knowledge and skills in the form of devices, procedures and systems developed to solve a health problem and improve the quality of lives.
                    </li>
                    <li>
                        <b>Eco-Friendly Technology</b><br>
                        Build Eco-friendly technology help preserve the environment through energy efficiency and reduction of harmful waste.
                    </li>
                </ol>
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
                            <li>Date: Thursday, October 11<sup>st</sup>, 2019</li>
                            <li>Time: 07.30 PM – end (GMT + 7)</li>
                        </ul>
                    </li>
                    <li>
                        <b>Competition Day (Final)</b>
                        <ul>
                            <li>Venue: Bandung Institut Of Technology</li>
                            <li>Date: Friday, October 12<sup>nd</sup>, 2019</li>
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
                    <li>All participants must still be an undergraduate student of their university until October 2019.</li>
                    <li>Participants are in a team, consists of 3 members that are from the same university, one of the members should be the team leader.</li>
                    <li>Every participant is only allowed to be on one team.</li>
                    <li>The team is not participating in another competition in IEEE Fusion 2019.</li>
                    <li>Each campus may send more than 1 representatives.</li>
                    <li>Each team may only send one paper</li>
                    <li>Participants’ work must be based on the given theme.</li>
                    <li>Participants’ work does not contain any elements of plagiarism.</li>
                    <li>All submission of the full paper and final presentation materials should be typed, submitted, and presented in formal English.</li>
                    <li>Top 10 teams will advance to the final round.</li>
                    <li>Finalists are required to bring their works to be presented to the judges.</li>
                    <li>The committee may share any information related to participants’ work.</li>
                    <li>The decision of the judges and the committee cannot be contested.</li>
                    <li>Every participant who violates the rules will be disqualified.</li>
                    <li>Any information changes will be notified through the IEEE ITB SB website and official account, also participants’ email.</li>
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
                                <td>IDR 150.000</td>
                                <td>12 USD</td>
                            </tr>
                            <tr>
                                <th scope="row">Second</th>
                                <td>August 16<sup>th</sup>, 2019 to September 7<sup>th</sup>, 2019</td>
                                <td>IDR 200.000</td>
                                <td>16 USD</td>
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
                    Participants must complete the registration payment and should wait for confirmation from the competition committee. Fees have to be paid to:
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
                        <b>Full Paper Submission</b>
                        <ul>
                            <li>
                                Full paper submission will be held:
                                <ul>
                                    <li>
                                        July 15<sup>th</sup>, 2019 to August 15<sup>th</sup>, 2019 (First wave)
                                    </li>
                                    <li>
                                        August 16<sup>th</sup>, 2019 to September 7<sup>th</sup>, 2019 (Second wave)
                                    </li>
                                </ul>
                                The submission of Full Paper along with the invoice must be uploaded before August 15<sup>th</sup>, 2019 at 23.59 (GMT + 7) for first wave and before September 7<sup>th</sup>, 2019 at 23.59 (GMT + 7) for second wave <a href='/dashboard/invest/upload-files'>here</a>.
                            </li>
                                
                            <li>
                            Participants must submit the paper soft file to the website with format:<br> <b>IEEEITBSB2019_InnovationContest_Preliminary_(Team Name).pdf</b><br>
                            and then submit to our website using team account. After submitting your paper, please verify immediately to our contact person.
                            </li>
                        </ul>
                    </li>

                    <li>
                        <b>Final Phase (Presentation)</b>
                        <ul>
                            <li>
                                Final round team announcement will be on September 21<sup>st</sup>, 2019 and will be shared at IEEE ITB SB 2019 official account and sent directly to your leader’s email.
                            </li>
                            <li>Participants who are entitled to be the finalists are top 10 teams that have passed the Full Paper stage.</li>
                            <li>
                                The presentation will be held at Institut Teknologi Bandung, West Java, Indonesia, for 3 days: 
                                <ul>
                                    <li>October 11<sup>st</sup>, 2019: Technical meeting</li>
                                    <li>October 12<sup>nd</sup>, 2019: Presentation and Exhibition</li>
                                    <li>October 13<sup>rd</sup>, 2019 : Grand Seminar and Winner Announcement.</li>
                                </ul>
                                Those teams will present their solution in front of judges at the Final day
                            </li>
                            <li>At this stage, each team prepared a presentation for the judges.</li>
                            <li>
                                Each team will be given 10 minutes for presentation, 5 minutes for a demo, and 10 minutes for question and answer with the judges.
                            </li>
                            <li>Participants present their work to the judges.</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-9 my-4" id='g'>
                <h2>Structure Format</h2>
                
                <p>
                    <b>Paper Structure</b><br>
                    The Paper in preliminary phase follow the IEEE Paper Format and Structure can be accessed in our website: http://ieee-itb-sb.com/
                </p>
                
                <p>
                    <b>Presentation Structure</b><br>
                    Each team presents their work as a presentation with .ppt or .pptx extension.
                </p>
            </div>
        </div>

        <div class="row">
            <div class=" col-lg-9 my-4" id='h'>
                <h2>Judging Criteria</h2>
                <p>The assessment will be based on the portion below.</p>
                
                <ol>
                    <li>
                        <b>Preliminary (Paper):</b>
                        <ul>
                            <li>
                                <b>Suitability (10%)</b><br>
                                <ol type='i'>
                                    <li>The idea suits the theme of the competition
                                    <li>The essay suit IEEE format of writing 

                                </ol>
                                <p></p>
                            </li>
                            <li>
                                <b>Originality(20%)</b><br> 
                                <ol type='i'>
                                    <li>The author's originality in terms of ideas and arguments</li>
                                    <li>Is it better than any other ideas if it is similar</li>
                                </ol>
                                <p></p>
                            </li>
                            <li>
                                <b>Argumentation and Feasibility(50%)</b><br>
                                <ol type=i>
                                    <li>How the idea could solve the problems</li>
                                    <li>How the idea could be made on a larger scale and its potential to be successful</li>
                                    <li>How the idea sound realistic</li>
                                </ol>
                                <p></p>
                            </li>
                            <li>
                                <b>Writing Style (15%)</b><br>
                                <ol type=i>
                                    <li>Cost efficiency</li>
                                    <li>Market value of the idea</li>
                                </ol>
                                <p></p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <b>Final (Presentation):</b>
                        <ul>
                            <li>
                                <b>Depth of Content(50%) </b><br>
                                <ol type=i>
                                    <li> Research deals with an important issue in the field of study including goals/motivation questions that provide the audience with a sense of the project’s main idea.</li>
                                    <li> Information is accurate and questions from the judges can be answered well. </li>
                                    <li> The ideas are applicable and creative.</li>
                                </ol>
                                <p></p>
                            </li>
                            <li>
                                <b>Organization (20%)</b><br> 
                                <ol type=i>
                                    <li> Presentation is clear, logical and organized. </li>
                                    <li> The material is presented in a logical manner.</li>
                                    <li> Time management</li>
                                </ol>
                                <p></p>
                            </li>
                            <li>
                                <b>Presentation (Oral presentation and delivery) (20%)</b><br>
                                <ol type="i">
                                    <li> Clarity and directness (tone, pace, pronunciation, and volume)</li>
                                    <li> Eye contact and manners</li>
                                    <li> Grammar, fluency and word choices</li>
                                </ol>
                                <p></p>
                            </li>
                            <li>
                                <b>Visualization of the material (10%) </b><br>
                                <ol type="i">
                                    <li> Neat slides</li>
                                    <li> Visual materials are easy to read. (ex: graphics and charts)</li>
                                <p></p>
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
                                <td>August 16<sup>th</sup>, 2019 to September 7<sup>th</sup>, 2019</td>
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
                                <td>October 11<sup>st</sup>, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Final Competition</td>
                                <td>October 12<sup>nd</sup>, 2019</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Grand Seminar and Winners Announcement</td>
                                <td>October 13<sup>rd</sup>, 2019</td>
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
                        The result of full paper submission will be announced at IEEE ITB SB website.
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
                                <td>IDR 10,000,000</td>
                                <td>✔</td>
                            </tr>
                            <tr class='table-silver'>
                                <th scope="row">2<sup>nd</sup></th>
                                <td>IDR 7,500,000</td>
                                <td>✔</td>
                            </tr>
                            <tr class='table-bronze'>
                                <th scope="row">3<sup>rd</sup></th>
                                <td>IDR 5,000,000</td>
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
                        <a href="{{URL::asset('assets/fusion2019/invest/guidebook_innovcontest.pdf')}}">Guidebook <sup><i class="fas fa-file-download"></i></sup></a>
                    </li>
                    <li>
                        <a href="{{URL::asset('assets/fusion2019/invest/paperFormat.docx')}}">Paper Format <sup><i class="fas fa-file-download"></i></sup></a>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>

    
    
@endsection