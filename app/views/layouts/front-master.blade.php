<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            @section('title')
            Digital Lagos TV
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->
        {{ HTML::style(asset('public/bootstrap/css/bootstrap.css')) }}
        {{ HTML::style(asset('public/bootstrap/css/bootstrap-responsive.css')) }}
        {{ HTML::style(asset('public/css/responsive-tabs.css')) }}
        {{ HTML::style(asset('public/css/styles.css')) }}
        {{ HTML::style(asset('public/css/jquery-ui-1.10.4.custom.min.css')) }}
        <!-- {{ HTML::style(asset('public/css/bootstrapValidator.css')) }} -->

    <!-- Include the FontAwesome CSS if you want to use feedback icons provided by FontAwesome -->
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />-->

         <!-- Scripts are placed here -->
        {{ HTML::script(asset('public/js/jquery-1.10.2.js')) }}
        {{ HTML::script(asset('public/js/jquery-ui-1.10.4.custom.min.js')) }}
        {{ HTML::script(asset('public/js/bootstrap.min.js')) }}
        {{ HTML::script(asset('public/js/jquery.lightbox_me.js')) }}
        {{ HTML::script(asset('public/js/jquery.responsiveTabs.min.js')) }}
        {{ HTML::script(asset('public/js/jquery.validate.js')) }}
        <!-- {{ HTML::script(asset('public/js/bootstrapValidator.js')) }} -->
        {{ HTML::script(asset('public/js/jquery-tooltip.js')) }}
    
        <style type="text/css">

        /* CSSTerm.com Simple Horizontal DropDown CSS menu */

                .drop_menu {
                  padding:0;
                  margin:0;
                  list-style-type:none;
                  height:30px;
                }
                .drop_menu li { float:left; }
                .drop_menu li a {
                  padding:9px 20px;
                  display:block;
                  color:#fff;
                  text-decoration:none;
                  font:12px arial, verdana, sans-serif;
                }

                /* Submenu */
                .drop_menu ul {
                  position:absolute;
                  left:-9999px;
                  top:-9999px;
                  list-style-type:none;
                }
                .drop_menu li:hover { position:relative; background:#5FD367; }
                .drop_menu li:hover ul {
                  left:0px;
                  top:30px;
                  background:#5FD367;
                  padding:0px;
                  color:#575c62;
                }

                .drop_menu li:hover ul li a {
                  padding:5px;
                  display:block;
                  width:168px;
                  text-indent:15px;
                  background-color:#5FD367;
                }
                .drop_menu li:hover ul li a:hover { background:#efefef; }

        </style>


    </head>

    <body>
        
    <div id="wrapper"> 
  
  <!-- Header Start -->
  
  <div class="container-fluid top">
    <header>
      <div class="container">
        <div class="row-fluid">
          <div class="span6"> <a href="{{{ URL::to('/') }}}"><img src="{{{ URL::to('public/img/logo.png') }}}" alt="Digital Lagos TV" border="0" /></a> </div>

          @if(Auth::check())
            <div class="span6 profile-nav">
              {{ucfirst($userProfile->first_name. ' '. $userProfile->last_name)}}!!! <a href="{{{ URL::to('/logout') }}}" class="orrange pleft">Logout</a>
              <span class="spacer_1"></span>
              You have basic Profile! <a href="#" class="orrange pleft">Upgrade It</a>
            </div>
            <div class="clear"></div>
            <nav>
              <ul class="span12">
                <li><a href="{{{ URL::to('member-home') }}}">Dashboard</a></li>
                <li><a href="#">My Listning</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Get Help</a></li>
              </ul>
            </nav>
          @else
            <div class="span6 profile-nav"> <a href="#" id="login_btn" class="orrange pleft">Login</a> </div>
            <div class="clear"></div>
            <nav>
              <ul class="span9">
                <li><a href="{{{ URL::to('/') }}}">Home</a></li>
                <li><a href="{{{ URL::to('membership') }}}">Membership</a></li>
                <li><a href="#">Community</a>
                  <ul>
                  <li><a href='#'>Sub Link 1</a></li>
                  <li><a href='#'>Sub Link 2</a></li>
                  <li><a href='#'>Sub Link 3</a></li>
                  <li><a href='#'>Sub Link 4</a></li>
                  </ul>
                </li>
                <li><a href="#">Events &amp; Training</a>
                  <ul>
                  <li><a href='#'>Sub Link 1</a></li>
                  <li><a href='#'>Sub Link 2</a></li>
                  <li><a href='#'>Sub Link 3</a></li>
                  <li><a href='#'>Sub Link 4</a></li>
                  </ul>
                </li>
                <li><a href="{{{ URL::to('agencies-support') }}}">Agencies &amp; Support</a></li>
                <li><a href="{{{ URL::to('get-in-touch') }}}">Get in Touch</a></li>
              </ul>
              <div class="span3 search">
                <form action="" method="post">
                  <input type="submit" value="" />
                  <input type="text" value="" id="search" name="search" />
                </form>
              </div>
            </nav>

            <!-- <div class="drop">
              <ul class="drop_menu">
              <li><a href='#'>Home</a></li>
              <li><a href='#'>Membership</a></li>
              <li><a href='#'>Community</a>
                <ul>
                <li><a href='#'>Sub Link 1</a></li>
                <li><a href='#'>Sub Link 2</a></li>
                <li><a href='#'>Sub Link 3</a></li>
                <li><a href='#'>Sub Link 4</a></li>
                </ul>
              </li>
              <li><a href='#'>Events &amp; Training</a>
                <ul>
                <li><a href='#'>Sub Link 1</a></li>
                <li><a href='#'>Sub Link 2</a></li>
                <li><a href='#'>Sub Link 3</a></li>
                <li><a href='#'>Sub Link 4</a></li>
                </ul>
              </li>
              <li><a href='#'>Agencies &amp; Support</a></li>
              <li><a href='#'>Get in Touch</a></li>
              </ul>
            </div> -->


          @endif

        </div>
      </div>
    </header>
  </div>
  <hr class="top" />
  
  <!-- Header End -->
  
  <!-- Content -->
    @yield('content')
  
  <!-- Footer Start -->
  
  <div class="container-fluid footer-bottom">
    <footer>
      <div class="container">
        <div class="row-fluid">
          <div class="span3">
            <h5>Company</h5>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
          <div class="span3">
            <h5>Product</h5>
            <ul>
              <li><a href="#">Overview</a></li>
              <li><a href="#">Membership</a></li>
              <li><a href="#">Business Listing</a></li>
              <li><a href="#">Event/Workshop</a></li>
              <li><a href="#">conference</a></li>
              <li><a href="#">Job Posting</a></li>
              <li><a href="#">Recruitment Analytics</a></li>
            </ul>
          </div>
          <div class="span3">
            <h5>Support</h5>
            <ul>
              <li><a href="#">Help Centre</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Cookie Policy</a></li>
              <li><a href="#">Accessibility</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <div>
            <h5>Newsletter Signup</h5>
              <ul>
                <li>Please Signup For Our Weekly Newsletter</li>
                <li><input type="text" id="phone" name="phone" value="" /></li>
                <li><button type="submit" class="btn btn-lg btn-success">Submit</button></li>
              </ul>
              <!-- <div>
                  <label for="phone"> Please Signup For Our Weekly Newsletter</label>
                  <input type="text" id="phone" name="phone" value="" />
                  <button type="submit" class="btn btn-lg btn-success">Submit</button> 
              </div> -->
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div class="container-fluid bottom">
    <footer>
      <div class="container">
        <div class="row-fluid">
          <div class="span12">&copy; 2014 <a href="#">digitallagos.tv</a> All Rights Reserved</div>
        </div>
      </div>
    </footer>
  </div>
  
  <!-- Footer End --> 
  
  <!-- Login Start -->
  
  <div id="sign_up">
    <div id="signup_outer">
      <div id="form_container">
        <!-- <form action="" method="post"> -->
        {{ Form::open(array('url' => '/login', 'id'=>'loginForm')) }}
          <h3 id="see_id" class="sprited" >Login into Website</h3>
          <div id="sign_up_form">
            <div class="form-group">
              <label>
                <!-- <input class="sprited" name="" id="" value="Enter your email" /> -->
                {{ Form::text('email',Input::old('email'), array('id'=>'email','placeholder'=>'Enter your email')) }}
              </label>
            </div>
            <div class="form-group">
              <label>
                <!-- <input class="sprited" name="" id="" value="Enter your password" /> -->
                {{ Form::password('password', array('id'=>'password', 'placeholder'=>'Enter your password')) }}
              </label>
            </div>
            <div id="error-msg" class='bg-danger alert' style="display:none; background-color=#fc3f35;">Email or Password is incorrect</div>
            <div class="form-group">
              <span>
              <input type="checkbox" id="rememberme" name="rememberme" style=" float: left; margin-right: 8px; " />
              <label for="remember">Remember Me</label>
              </span>
            </div>
            <div class="form-group">
              <div id="actions">
                <input type="submit" value="Login" id="user_login" />
              </div>
            </div>
          </div>
          <h3 class="left_out" class="sprited">
          Not a Member yet? <span><a href="membership">Register Here</a></span> <br/> <span><a href="forgotpassword">Forgot Password?</a></span>
          </h3>
          <a id="close_x" class="close sprited" href="#"><img src="{{{ URL::to('public/img/u22.png') }}}" alt="close" borer="0" /></a>
          <hr />
          <h3 class="left_out" class="sprited">
            <strong>Login With</strong>
            <a href="#">
              <img src="{{{ URL::to('public/img/google.png') }}}" alt="Social" style="margin-left:15px; position:relative; top:-5px; width:40px; height:40px;" onmouseover="this.src='{{{ URL::to('public/img/google_h.png') }}}'" onmouseout="this.src='{{{ URL::to('public/img/google.png') }}}'" />
            </a>
            
            <a href="#">
              <img src="{{{ URL::to('public/img/linkedin.png') }}}" alt="Social" style="margin-left:15px; position:relative; top:-5px; width:40px; height:40px;" onmouseover="this.src='{{{ URL::to('public/img/linkedin_h.png') }}}'" onmouseout="this.src='{{{ URL::to('public/img/linkedin.png') }}}'" />
            </a>
            
            <a href="#">
              <img src="{{{ URL::to('public/img/twitte.png') }}}" alt="Social" style="margin-left:15px; position:relative; top:-5px; width:40px; height:40px;" onmouseover="this.src='{{{ URL::to('public/img/twitter_h.png') }}}'" onmouseout="this.src='{{{ URL::to('public/img/twitte.png') }}}'" />
            </a>
            
            <a href="#">
              <img src="{{{ URL::to('public/img/facebook.png') }}}" alt="Social" style="margin-left:15px; position:relative; top:-5px; width:40px; height:40px;" onmouseover="this.src='{{{ URL::to('public/img/faceook_h.png') }}}'" onmouseout="this.src='{{{ URL::to('public/img/facebook.png') }}}'" />
            </a>
          </h3>
        <!-- </form> -->
         {{ Form::close() }}
      </div>
    </div>
  </div>
  
  <!-- Login End --> 
  
</div>

    <script type="text/javascript">
    $(function() {
      
    /////    Login PopUp Script
  
    function launch() {
         $('#sign_up').lightbox_me({centered: true, onLoad: function() { $('#sign_up').find('input:first').focus()}});
    }
    
    $('#login_btn').click(function(e) {
        $("#sign_up").lightbox_me({centered: true, preventScroll: true, onLoad: function() {
            $("#sign_up").find("input:first").focus();
        }});
        
        e.preventDefault();
    });
    
    
    $('table tr:nth-child(even)').addClass('stripe');
    
    /////    Tabs Script
    
    $('#horizontalTab').responsiveTabs({
            rotate: false,
            startCollapsed: 'accordion',
            collapsible: 'accordion',
            setHash: true,
            disabled: [3,4],
            activate: function(e, tab) {
                $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
            }
        });

        $('#start-rotation').on('click', function() {
            $('#horizontalTab').responsiveTabs('active');
        });
        $('#stop-rotation').on('click', function() {
            $('#horizontalTab').responsiveTabs('stopRotation');
        });
        $('#start-rotation').on('click', function() {
            $('#horizontalTab').responsiveTabs('active');
        });
        $('.select-tab').on('click', function() {
            $('#horizontalTab').responsiveTabs('activate', $(this).val());
        });
});

$(document).ready(function() {


// $('#loginForm').bootstrapValidator({
//         feedbackIcons: {
//             valid: 'glyphicon glyphicon-ok',
//             invalid: 'glyphicon glyphicon-remove',
//             validating: 'glyphicon glyphicon-refresh'
//         },
//         fields: {
//             email: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The email address is required'
//                     },
//                     emailAddress: {
//                         message: 'The email address is not valid'
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

//     // Validate the form manually
//     $('#user_login').click(function() {
//         $('#loginForm').bootstrapValidator('validate');
//     });


$("#loginForm").validate({
      rules: {
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          //minlength: 6
        },
      },
      messages: {
        email: {
          required: "Please enter email address",
          email: "Please enter a valid email address",
        },
        password: {
          required: "Please provide a password",
          //minlength: "Your password must be at least 6 characters long"
        },        
      },
    });
});

// Login form Submit

$("#loginForm").submit(function(e)
{
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR)
        {
            console.log(data);
            if(data.status=='1'){
              window.location.href = "member-home";
            }
            if(data.status=='0'){
              $("#error-msg").css('display', 'block');
              e.preventDefault();
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
               alert(errorThrown);  
        }
    });
    e.preventDefault(); //STOP default action
    //e.unbind(); //unbind. to stop multiple form submit.
});

</script>

    </body>
</html>
