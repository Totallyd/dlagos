@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
  <div class="container-fluid">
    <div class="container content">
     
      <div class="row-fluid spader_2">

        <div class="span12">
          
          <div class="about user">
            <h2>Reset Password</h2>

            @if (Session::get("error"))
              <div class='bg-danger alert'>{{ Session::get("error") }}</div>
            @endif
            
            <form action="" method="post" id="userdata">
             <br/> 
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="email">Email Address*</label>
                </div>
                <div class="span9">
                  <input type="text" id="email" name="email" value="" />
                </div>
              </div>

               
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="password"> Password*</label>
                </div>
                <div class="span9">
                  <input type="password" id="password" name="password" value="" />
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="password_confirmation">Confirm Password*</label>
                </div>
                <div class="span9">
                  <input type="password" id="password_confirmation" name="password_confirmation" value="" />
                </div>
              </div>  
              
              
              <div class="row-fluid formrow">
                <div class="span3 required_fields"></div>
                <div class="span9 required_fields">
                  * Required Fields
                </div>
              </div>  
              
              <div class="row-fluid formrow">
                <div class="span3 required_fields"></div>
                <div class="span9 required_fields">
                  <button type="submit" class="btn btn-lg btn-success">Submit</button> 
                  <button type="button" class="btn btn-lg btn-success">Cancel</button>
                </div>
              </div>
                
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>

   <script type="text/javascript">
  $(document).ready(function(){
    $("#userdata").validate({
      rules: {
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
        }
      },
      messages: {
        email: {
          required: "Please enter email address",
          email: "Please enter a valid email address",
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
      },
      tooltip_options: {
        email: {trigger:'focus', placement:'right'},
        password: {trigger:'focus', placement:'right'},
        password_confirmation: {placement:'right'}
      },
    });
  });
  </script>
  
  @stop