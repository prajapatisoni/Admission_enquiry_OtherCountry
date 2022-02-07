@extends('includes.master')
@section('main-container')
<!-- banner -->
<div class="about-bottom">
    <div class="col-md-6 w3l_about_bottom_left">
        <div class="video-grid-single-page-agileits">
            <div data-video="E91gAjunqOM" id=""> <img src="{{url('assets/images/medical.jpg')}}" alt="" class="img-responsive" /> </div>
        </div>
        <!-- <div class="w3l_about_bottom_left_video">
            <h4>watch our video</h4>
        </div> -->
    </div>
    <div class="col-md-6 w3l_about_bottom_right one">
        <div class="abt-w3l">
            <div class="header-w3l">
                <h2>Admission Form</h2>
                <h4>Enter the Following Details</h4>
                @if(Session::has('admission_msg'))
                    <div class="alert {!! Session('status') !!}" role="alert">
                        <strong>Thank You!</strong> {!! Session('admission_msg') !!}
                    </div>
                @endif
                <form action="{{url('/admission')}}" method="post" class="mod2">
                    @csrf
                    <div class="col-md-6 col-xs-6 w3l-left-mk">
                        <ul>
                            <li class="text">Name of Applicant :  </li>
                            <li class="agileits-main">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                                <input name="name" type="text" >
                                @if($errors->has('name'))
                                    <span style="color: red;">{{ $errors->first('name') }}</span>
                                @endif
                            </li>
                            <li class="text">mobile no  :  </li>
                            <li class="agileits-main">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input name="mobile" type="text" >
                                @if($errors->has('mobile'))
                                    <span style="color: red;">{{ $errors->first('mobile') }}</span>
                                @endif
                            </li>
                            <li class="text">Email Id  :  </li>
                            <li class="agileits-main">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input name="email" type="text" >
                                @if($errors->has('email'))
                                    <span style="color: red;">{{ $errors->first('email') }}</span>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-6 w3l-right-mk">
                        <ul>
                            <li class="text">Courses  :  </li>
                            <li class="agileits-main"><i class="fa fa-book" aria-hidden="true"></i>
                                <select name="course">
                                    <option value="" selected disabled>Select Course</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="BAMS">BAMS</option>
                                    <option value="BDS">BDS</option>
                                    <option value="BHMS">BHMS</option>
                                    <option value="other">other</option>
                                </select>
                                @if($errors->has('course'))
                                    <span style="color: red;">{{ $errors->first('course') }}</span>
                                @endif
                            </li>
                            <li class="text">Neet Score  :  </li>
                            <li class="agileits-main">
                                <i class="fa fa-percent" aria-hidden="true"></i>
                                <input name="score" type="text" >
                                @if($errors->has('score'))
                                    <span style="color: red;">{{ $errors->first('score') }}</span>
                                @endif
                            </li>
                            <li class="text">State  :  </li>
                            <li class="agileits-main">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <select name="state">
                                    <option value="" selected disabled>Select State</option>
                                    <option value="Andaman and Nicobar Island">Andaman and Nicobar Island (UT)</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                                @if($errors->has('state'))
                                    <span style="color: red;">{{ $errors->first('state') }}</span>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="agile-submit">
                        <input type="submit" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div> 
</div>
<!-- //banner -->

@include('modal')
<!-- about -->
<div class="about-top" id="about">
    <div class="container">
        <h3 class="w3l-title">About Us</h3>
        <div class="w3layouts_header">
            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
        </div>
        <div class="col-md-7 wthree-services-bottom-grids">
            <div class="wthree-services-left">
                <img src="{{url('assets/images/ab1.jpg')}}" alt="">
            </div>
            <div class="wthree-services-right">
                <img src="{{url('assets/images/laptop1.jpg')}}" alt="">
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-5 wthree-about-grids">
            <p>iKnowledge, a prominent educational consultancy in the North-Eastern Region of India, came to formation in the year 2013,15th January. Since then, it took upon the role and challenges of bringing education within the reach of every deserving individual. With its main office located in Guwahati, Assam, We have certainly gained a lot of recognition through our continuous dedication towards guiding the students. We are a great assistant in building up your career. We can help you with complete details of the courses that you want to pursue in the future. We are the best career guide for you!</p>
            <a href="#" class="trend-w3l" data-toggle="modal" data-target="#myModal"><span>Read More</span></a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
            </div> 
            <div class="modal-body">
                <img src="{{url('assets/images/neet.jpeg')}}" alt=""> 
                <p>iKnowledge, a prominent educational consultancy in the North-Eastern Region of India, came to formation in the year 2013,15th January. Since then, it took upon the role and challenges of bringing education within the reach of every deserving individual. With its main office located in Guwahati, Assam, We have certainly gained a lot of recognition through our continuous dedication towards guiding the students. We are a great assistant in building up your career. We can help you with complete details of the courses that you want to pursue in the future. We are the best career guide for you!!</p>
            </div> 
        </div>
    </div>
</div>
<!-- //modal --> 
<!-- //about -->
<!--stats-->
<div class="stats" id="stats">
    <div class="container">
        <div class="stats-info">
            <div class="col-md-3 col-xs-3 stats-grid slideanim">
                <i class="fa fa-users" aria-hidden="true"></i>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='12760' data-delay='.5' data-increment="1">12760</div>
                
                <h4 class="stats-info">FOREIGN FOLLOWERS</h4>
            </div>
            <div class="col-md-3 col-xs-3 stats-grid slideanim">
                <i class="fa fa-book" aria-hidden="true"></i>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='31000' data-delay='.5' data-increment="1">31000</div>
                
                <h4 class="stats-info">CLASSES COMPLETE</h4>
            </div>
            <div class="col-md-3 col-xs-3 stats-grid slideanim">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='79000' data-delay='.5' data-increment="10">79000</div>
                
                <h4 class="stats-info">STUDENTS ENROLLED</h4>
            </div>
            <div class="col-md-3 col-xs-3 stats-grid slideanim">
                    <i class="fa fa-user" aria-hidden="true"></i>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='600' data-delay='.5' data-increment="1">600</div>
            
                <h4 class="stats-info">CERTIFIED TEACHERS</h4>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//stats-->
<!-- services -->
<div class="services" id="services" >
    <div class="container">  
        <h3 class="w3l-title">iknowledge</h3>
        <div class="w3layouts_header">
            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
        </div>
        <div class="services-w3ls-row">
            <div class="col-xs-4 services-grid agileits-w3layouts">
                <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                <h6>01</h6>
                <h4>Career consultancy</h4>
                <p>Find your passion and purpose with specialized assistance. Know more about colleges, Gain clarity on all its processes!</p>
            </div>
            <div class="col-xs-4 services-grid agileits-w3layouts">
                <h6>02</h6>
                <h4>Admissions in India</h4>
                <p>Pursue a career that excites you in India. With us, you don’t just finalize your course and college but also get assistance with application and grabbing a yielding scholarship.</p>
                <span class="fa fa-user-o grid-w3l-ser" aria-hidden="true"></span>
            </div>
            <div class="col-xs-4 services-grid agileits-w3layouts">
                <span class="fa fa-book" aria-hidden="true"></span>
                <h6>03</h6>
                <h4>Admissions in other Country</h4>
                <p>Grab the most suitable career option for you in Bangladesh. Explore all the magnificent career paths available for professional growth and development before you make a choice.</p>
            </div> 
            <div class="clearfix"> </div>
        </div>  
    </div>
</div>
<!-- //services -->
<!-- Gallery -->
<section class="portfolio-w3ls" id="Colleges">
        <h3 class="w3l-title">Colleges</h3>
        <div class="w3layouts_header">
            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
        </div>
                <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                    <a href="{{url('assets/images/college/br.jpg')}}" class="swipebox"><img src="{{url('assets/images/college/br1.jpg')}}" class="img-responsive" alt=" BR.Ambedkar Medical College & Hospital Banglore">
                        <div class="textbox">
                        <h4>
                            BR Ambedkar Medical College & Hospital Banglore
                            <br>
                            <a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Enquiry Now</a>
                        </h4>
                            <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                    <a href="{{url('assets/images/college/gs.jpg')}}" class="swipebox"><img src="{{url('assets/images/college/gs2.jpg')}}" class="img-responsive" alt="GS Medical college Hapur">
                        <div class="textbox">
                        <h4>
                            GS Medical college Hapur
                            <br>
                            <a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Enquiry Now</a>
                        </h4>
                            <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                    <a href="{{url('assets/images/college/Rama.jpg')}}" class="swipebox"><img src="{{url('assets/images/college/Rama1.jpg')}}" class="img-responsive" alt="RAMA Medical Collega">
                        <div class="textbox">
                        <h4>
                            RAMA Medical Collega
                            <br>
                            <a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Enquiry Now</a>
                        </h4>
                            <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                    <a href="{{url('assets/images/college/savita.jpg')}}" class="swipebox"><img src="{{url('assets/images/college/savita1.jpg')}}" class="img-responsive" alt="Saveetha medical college">
                        <div class="textbox">
                        <h4>
                            Saveetha medical college
                            <br>
                            <a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Enquiry Now</a>
                        </h4>
                            <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                    <a href="{{url('assets/images/college/shree-balaji-medical-college.jpg')}}" class="swipebox"><img src="{{url('assets/images/college/sri balaji.jpg')}}" class="img-responsive" alt=" Shree Balaji medical college">
                        <div class="textbox">
                        <h4>
                            Shree Balaji medical college
                            <br>
                            <a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Enquiry Now</a>
                        </h4>
                            <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                    <a href="{{url('assets/images/college/smc.jpg')}}" class="swipebox"><img src="{{url('assets/images/college/smc.png')}}" class="img-responsive" alt="Saraswati Medical College">
                        <div class="textbox">
                        <h4>
                            Saraswati Medical College
                            <br>
                            <a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Enquiry Now</a>
                        </h4>
                            <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                    <a href="{{url('assets/images/college/sri ram chandar.jpg')}}" class="swipebox"><img src="{{url('assets/images/college/sri ramchandra.jpg')}}" class="img-responsive" alt="Sri RamChandra Medical College">
                        <div class="textbox">
                        <h4>
                           Sri RamChandra Medical College
                            <br>
                            <a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Enquiry Now</a>
                        </h4>
                            <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-3 gallery-grid gallery1">
                    <a href="{{url('assets/images/college/srm.jpg')}}" class="swipebox"><img src="{{url('assets/images/college/srm2.jpg')}}" class="img-responsive" alt=" SRM Institute of Medical & Science">
                        <div class="textbox">
                        <h4>
                           SRM Institute of Medical & Science
                            <br>
                            <a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#myModal3">Enquiry Now</a>
                        </h4>
                            <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </section>
<!-- //gallery -->
<!-- contact -->
<div id="Contact-Us" class="contact">
    <div class="container">
        <h3 class="w3l-title">Contact Us</h3>
        <div class="w3layouts_header">
            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
        </div>
        <div class="agile_banner_bottom_grids">
            <div class="col-md-4 col-xs-4 w3_agile_contact_grid">
                <div class="agile_contact_grid_left">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class="agile_contact_grid_right agilew3_contact">
                    <h4>Address</h4>
                    <p>#1,2nd Floor,Bora</p>                
                    <p>service, Assam, Guwahati – 781007</p>
                </div>
            </div>
            <div class="col-md-4 col-xs-4 w3_agile_contact_grid">
                <div class="agile_contact_grid_left agileits_w3layouts_left">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                </div>
                <div class="agile_contact_grid_right agileits_w3layouts_right">
                    <h4>Phone</h4>
                    <p><a href="tel:+9198642 68229">(+91) 98642 68229</span></p>
                </div>
            </div>
            <div class="col-md-4 col-xs-4 w3_agile_contact_grid">
                <div class="agile_contact_grid_left agileits_w3layouts_left1">
                     <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <div class="agile_contact_grid_right agileits_w3layouts_right1">
                    <h4>Email</h4>
                    <p><a href="mailto:care@iknowledge.co.in">care@iknowledge.co.in</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3l-form">
            <h3 class="w3l-title">Get In Touch</h3>
            @if(Session::has('contact_msg'))
                    <div class="alert {!! Session('status') !!}" role="alert">
                        <strong>Thank You!</strong> {!! Session('contact_msg') !!}
                    </div>
                @endif
            <div class="contact-grid1">
                <div class="contact-top1">
                    <form action="{{url('/contact')}}" method="post">
                        @csrf
                        <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                            <label>Name*</label>
                            <input type="text" name="name" placeholder="Name" required="">
                            @if($errors->has('name'))
                                <span style="color: red;">{{ $errors->first('name') }}</span>
                            @endif
                            <label>E-mail*</label>
                            <input type="email" name="email" placeholder="E-mail" required="">
                            @if($errors->has('email'))
                                <span style="color: red;">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6 col-xs-6 wthree_contact_left_grid">
                            <label>Mobile Number*</label>
                            <input type="text" name="mobile" placeholder="Phone Number" required="">
                            @if($errors->has('mobile'))
                                <span style="color: red;">{{ $errors->first('mobile') }}</span>
                            @endif
                            <label>Subject*</label>
                            <input type="text" name="subject" placeholder="Subject" required="">
                            @if($errors->has('subject'))
                                <span style="color: red;">{{ $errors->first('subject') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Message*</label>
                            <textarea placeholder name="message" required=""></textarea>
                            @if($errors->has('message'))
                                <span style="color: red;">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                            <input type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

