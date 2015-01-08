@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
   <div class="container-fluid">
    <div class="container content">
      <div class="row-fluid">
        <div class="span12">
          <h1>Register</h1>
        </div>
      </div>
     
      <div class="row-fluid spader_2">
        <div class="span12">
          <div class="about user">
            <h2>User Information</h2>
            <!-- <h2 class="orange_font">Thank you for choosing DigitalLagos TV <br/> <span>Please fill in the form below</span></h2> -->
            <form action="" method="post" id="userdata">
              <h3>Personal Details</h3>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                  <div class="span3">
                    <label for="first_name">First Name*</label>
                  </div>
                <!-- </div> -->
                <!-- <div class="form-group"> -->
                  <div class="span9">
                    <input type="text" id="first_name" name="first_name" value="" />
                  </div>
                <!-- </div> -->
              </div>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                  <div class="span3">
                    <label for="last_name">Last Name*</label>
                  </div>
                <!-- </div> -->
                <!-- <div class="form-group"> -->
                  <div class="span9">
                    <input type="text" id="last_name" name="last_name" value="" />
                  </div>
                <!-- </div> -->
              </div>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span3">
                  <label for="role">Select Roles*</label>
                </div>
                <!-- </div> -->
                <!-- <div class="form-group"> -->
                <div class="span9">
                  <select name="role" id="role">
                    <option value="">Please Chose Role*</option>
                    <option value="2">Digital Entertainment</option>
                    <option value="3">Broadcast Media</option>
                    <option value="4">Content production</option>
                    <option value="5">3D Game Animation</option>
                    <option value="6">Motion graphics</option>
                    <option value="7">Music, Video production/report</option>
                    <option value="8">Publishing</option>
                    <option value="9">Communications</option>
                    <option value="10">Graphic Design</option>
                    <option value="11">Web Design</option>
                    <option value="12">Web Development</option>
                    <option value="13">Multimedia Producer Creative</option>
                    <option value="14">Advertising</option>
                    <option value="15">Marketing PR</option>
                    <option value="16">Sales/Marketing</option>
                    <option value="17">Production co-ordinator</option>
                    <option value="18">Artist management</option>
                    <option value="19">Artist</option>
                    <option value="20">Performing artist</option>
                    <option value="21">Photography</option>
                    <option value="22">Producer</option>
                    <option value="23">Club /artist promotion</option>
                    <option value="24">Film/video production</option>
                    <option value="25">Music production</option>
                    <option value="26">Student</option>
                    <option value="27">Other</option>
                  </select>
                </div>
                <!-- </div> -->
              </div>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span3">
                  <label for="job_title">Job Title</label>
                </div>
                <!-- </div> -->
                <!-- <div class="form-group"> -->
                <div class="span9">
                  <input type="text" id="job_title" name="job_title" value="" />
                </div>
                <!-- </div> -->
              </div>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span3">
                  <label for="mobile">Mobile</label>
                </div>
                <!-- </div>
                <div class="form-group"> -->
                <div class="span9">
                  <input type="text" id="mobile" name="mobile" value="" />
                </div>
                <!-- </div> -->
              </div>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span3">
                  <label for="phone">Telephone</label>
                </div>
                <!-- </div>
                <div class="form-group"> -->
                <div class="span9">
                  <input type="text" id="phone" name="phone" value="" />
                </div>
                <!-- </div> -->
              </div>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span3">
                  <label for="address">Address</label>
                </div>
                <!-- </div>
                <div class="form-group"> -->
                <div class="span9">
                  <input type="text" id="address" name="address" value="" />
                </div>
                <!-- </div> -->
              </div>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span3">
                  <label for="city">City</label>
                </div>
                <!-- </div>
                <div class="form-group"> -->
                <div class="span9">
                  <input type="text" id="city" name="city" value="" />
                </div>
                <!-- </div> -->
              </div>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span3">
                  <label for="state">State</label>
                </div>
                <!-- </div>
                <div class="form-group"> -->
                <div class="span9">
                  <input type="text" id="state" name="state" value="" />
                </div>
                <!-- </div> -->
              </div>
              
              <h3>Account Details</h3> 
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span3">
                  <label for="email">Email Address*</label>
                </div>
                <!-- </div>
                <div class="form-group"> -->
                <div class="span9">
                  <input type="text" id="email" name="email" value="" />
                  <div id="email-check"></div>
                </div>
                <!-- </div> -->
              </div>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span3">
                  <label for="password"> Password*</label>
                </div>
                <!-- </div>
                <div class="form-group"> -->
                <div class="span9">
                  <input type="password" id="password" name="password" value="" />
                </div>
                <!-- </div> -->
              </div>
              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span3">
                  <label for="password_confirmation">Confirm Password*</label>
                </div>
                <!-- </div>
                <div class="form-group"> -->
                <div class="span9">
                  <input type="password" id="password_confirmation" name="password_confirmation" value="" />
                </div>
                <!-- </div> -->
              </div>  
              
              <div class="row-fluid formrow">
                <div class="span3 required_fields">
                  * Required Fields
                </div>
              </div>
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                <div class="span12 required_fields">
                  <input type="checkbox" id="agreement" name="agreement" value="Y" /> By clicking checkbox, you have to read and accept <span class="organe_font"><a href="{{{ URL::to('terms-conditions') }}}">user agreement and privacy policy</a></span> and consent to the <span class="organe_font">Terms and User Agreement Policy.</span>
                </div>
                <!-- </div> -->
              </div>              
              <div class="row-fluid formrow">
                <!-- <div class="form-group"> -->
                  <div class="span12 required_fields">
                    <button type="submit" class="btn btn-lg btn-success">Register</button> 
                    <button type="button" class="btn btn-lg btn-success">Cancel</button>
                  </div>
                <!-- </div> -->
              </div>
                
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
$(document).ready(function() {


// $('#userdata').bootstrapValidator({
//         feedbackIcons: {
//             valid: 'glyphicon glyphicon-ok',
//             invalid: 'glyphicon glyphicon-remove',
//             validating: 'glyphicon glyphicon-refresh'
//         },
//         fields: {
//             email: {
//                 validators: {
//                     notEmpty: {
//                         message: '<div style="display: block;" class="bg-danger alert" id="error-msg">Please enter email address</div>'
//                     },
//                     emailAddress: {
//                         message: '<div style="display: block;" class="bg-danger alert" id="error-msg">Please enter a valid email address</div>'
//                     }
//                 }
//             },
//             password: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The password is required'
//                     }
//                 }
//             }
//         }
//     });

    $("#userdata").validate({
      rules: {
        first_name: "required",
        last_name: "required",
        role: "required",
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 6
        },
        password_confirmation: {
          required: true,
          minlength: 6,
          equalTo: "#password"
        },
        agreement: {
          required: true
        }
      },
      messages: {
        first_name: "Please enter first name",
        last_name: "Please enter last name",
        role: "Please select role",
        email: {
          required: 'Please enter email address',
          email: 'Please enter a valid email address',
        },
        password: {
          required: "Please enter a password",
          minlength: "Your password must be at least 6 characters long"
        },
        password_confirmation: {
          required: "Please re-enter password",
          minlength: "Password must be at least 6 characters long",
          equalTo: "Password doesn't match"
        },
        agreement: 'Please read terms and conditions before proceeding',        
      },
      tooltip_options: {
        email: {trigger:'focus', placement:'right'},
        password: {trigger:'focus', placement:'right'},
        first_name: {placement:'right'},
        last_name: {placement:'right'},
        role: {placement:'right'},
        password_confirmation: {placement:'right'},
        agreement: {placement:'right',html:true}
      },
    });

    // Login form Submit

    $("#email").focusout(function(e)
    {
        var postData = $("#email").val();
        if(postData !=""){
          var URL = "email-check";
          $.ajax(
          {
              url : URL,
              type: "POST",
              data : { email: postData },
              success:function(data, textStatus, jqXHR)
              {
                  if(data=='1'){
                    $( "#email-check" ).css( "color", "red" );
                    $( "#email-check" ).html( "Email already exists" );
                    e.preventDefault();
                  }
                  if(data=='0'){
                    $( "#email-check" ).css( "color", "green" );
                    $( "#email-check" ).html( "Email available for registration" );
                  }
              },
              error: function(jqXHR, textStatus, errorThrown)
              {
                     alert(errorThrown);  
              }
          });
          e.preventDefault(); //STOP default action
          //e.unbind(); //unbind. to stop multiple form submit.
      }else{
        $( "#email-check" ).css( "display", "none" );
      }
    });
  });
  </script>
  
  @stop