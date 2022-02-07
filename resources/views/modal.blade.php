<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="signin-form profile">
                    <h3 class="agileinfo_sign">Submit Admission Enquiry</h3> 
                    <div class="login-form">
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
                                        <input name="state" type="text" >
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
        </div>
    </div>
</div>
<div class="clearfix"> </div> 
<!-- //Modal2 -->   