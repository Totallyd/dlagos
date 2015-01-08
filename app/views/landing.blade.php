<!DOCTYPE html>
<html lang="en">
<head>
<title>Digital Lagos TV</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{{ HTML::style(asset('public/bootstrap/css/bootstrap.css')) }}
{{ HTML::style(asset('public/bootstrap/css/bootstrap-responsive.css')) }}
{{ HTML::style(asset('public/css/styles.css')) }}
{{ HTML::style(asset('public/css/landing-css.css')) }}

{{ HTML::script(asset('public/js/jquery-1.10.2.js')) }}
{{ HTML::script(asset('public/js/jquery-ui-1.10.4.custom.min.js')) }}
{{ HTML::script(asset('public/js/bootstrap.min.js')) }}
{{ HTML::script(asset('public/js/jquery.lightbox_me.js')) }}
{{ HTML::script(asset('public/js/masonry.pkgd.min.js')) }}
{{ HTML::script(asset('public/js/jquery.validate.js')) }}


<script type="text/javascript">
jQuery(window).load(function() {
	jQuery(function(){
		jQuery('.masonry-container').masonry({
			itemSelector: '.work-masonry-thumb',
			columnWidth: 120
	    });
				
		
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
});
</script>
</head>
<body>
<div id="wrapper"> 
  
  <!-- Header Start -->
  
  <div class="container-fluid top">
    <header>
      <div class="container">
        <div class="row-fluid">
          <div class="span6"> <a href="#"><img src="{{{ URL::to('public/img/logo.png') }}}" alt="Digital Lagos TV" border="0" /></a> </div>
          <div class="span6 profile-nav"> <a href="#" id="login_btn" class="orrange pleft">Login</a> </div>
          <div class="clear"></div>
          <div id="getstarted_txt">
            Providing opportunity to showcase <br />
            the profiles of our member organizations and  <br />
            individuals to key local, regional and  <br />
            national audiences
            <a href="membership" class="btn btn-lg btn-success main-btn getstarted"><span>Get Started Here!</span></a>
          </div>
        </div>
      </div>
    </header>
  </div>
  <hr class="top" />
  
  <!-- Header End -->
  
  <div class="container-fluid">
    <div class="container content">
      <div class="row-fluid mainpage" style="overflow:hidden;">
        
        
        <div class="span12">
          <div class="span5"><h1>Featured Work <span>Your work, projects and team in relevant context.</span></h1></div>
          <br/>
          <br/>
          <br/>
          <div class="masonry-container" id="photos">
            <a href="#"><img class="work-masonry-thumb" src="{{{ URL::to('public/img/work/1.png') }}}" alt="img"></a>
            <a href="#"><img class="work-masonry-thumb" src="{{{ URL::to('public/img/work/2.png') }}}" alt="img"></a>
            <a href="#"><img class="work-masonry-thumb" src="{{{ URL::to('public/img/work/3.png') }}}" alt="img"></a>
            <a href="#"><img class="work-masonry-thumb" src="{{{ URL::to('public/img/work/4.png') }}}" alt="img"></a>
            <a href="#"><img class="work-masonry-thumb" src="{{{ URL::to('public/img/work/5.png') }}}" alt="img"></a>
            <a href="#"><img class="work-masonry-thumb" src="{{{ URL::to('public/img/work/6.png') }}}" alt="img"></a>
          </div>
          <h2><span style="color:#666666;">Who&rsquo;s using</span> Digitallagos.tv</h2>
          <div id="clients">
            <ul>
              <li><img src="{{{ URL::to('public/img/clients/1.jpg') }}}" alt="clients" /><span>USA Today Sports</span></li>
              <li><img src="{{{ URL::to('public/img/clients/2.jpg') }}}" alt="clients" /><span>Fast Company</span></li>
              <li><img src="{{{ URL::to('public/img/clients/3.jpg') }}}" alt="clients" /><span>MG Siegler</span></li>
              <li><img src="{{{ URL::to('public/img/clients/4.jpg') }}}" alt="clients" /><span>James Fallows</span></li>
              <li><img src="{{{ URL::to('public/img/clients/5.jpg') }}}" alt="clients" /><span>Buzzfeed</span></li>
              <li><img src="{{{ URL::to('public/img/clients/6.jpg') }}}" alt="clients" /><span>Amanda Hesser</span></li>
              <li><img src="{{{ URL::to('public/img/clients/7.jpg') }}}" alt="clients" /><span>John Gruber</span></li>
              <li><img src="{{{ URL::to('public/img/clients/8.jpg') }}}" alt="clients" /><span>Heidi N. Moore</span></li>
              <li><img src="{{{ URL::to('public/img/clients/9.jpg') }}}" alt="clients" /><span>Carl Zimmer</span></li>
              <li><img src="{{{ URL::to('public/img/clients/1.jpg') }}}" alt="clients" /><span>USA Today Sports</span></li>
              <li><img src="{{{ URL::to('public/img/clients/2.jpg') }}}" alt="clients" /><span>Fast Company</span></li>
              <li><img src="{{{ URL::to('public/img/clients/3.jpg') }}}" alt="clients" /><span>MG Siegler</span></li>
              <li><img src="{{{ URL::to('public/img/clients/4.jpg') }}}" alt="clients" /><span>James Fallows</span></li>
              <li><img src="{{{ URL::to('public/img/clients/5.jpg') }}}" alt="clients" /><span>Buzzfeed</span></li>
              <li><img src="{{{ URL::to('public/img/clients/6.jpg') }}}" alt="clients" /><span>Amanda Hesser</span></li>
              <li><img src="{{{ URL::to('public/img/clients/7.jpg') }}}" alt="clients" /><span>John Gruber</span></li>
              <li><img src="{{{ URL::to('public/img/clients/8.jpg') }}}" alt="clients" /><span>Heidi N. Moore</span></li>
              <li><img src="{{{ URL::to('public/img/clients/9.jpg') }}}" alt="clients" /><span>Carl Zimmer</span></li>
              <li><img src="{{{ URL::to('public/img/clients/1.jpg') }}}" alt="clients" /><span>USA Today Sports</span></li>
              <li><img src="{{{ URL::to('public/img/clients/2.jpg') }}}" alt="clients" /><span>Fast Company</span></li>
              <li><img src="{{{ URL::to('public/img/clients/3.jpg') }}}" alt="clients" /><span>MG Siegler</span></li>
              <li><img src="{{{ URL::to('public/img/clients/4.jpg') }}}" alt="clients" /><span>James Fallows</span></li>
            </ul>
            <div style="clear:both;"></div>
            
            <a href="#" class="btn btn-lg btn-success main-btn twitter_signup">Sign up with Twitter</a>
            
            <p>&nbsp;</p>
            
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- Login Start -->
  
  <div id="sign_up">
    <div id="signup_outer">
      <div id="form_container">
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

</body>
</html>

<script>
$(document).ready(function() {

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