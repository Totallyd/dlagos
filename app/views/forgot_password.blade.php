@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
  <div class="container-fluid">
    <div class="container content">
     
      <div class="row-fluid spader_2">

        <div class="span12">
          
          <div class="about user">
            <h2>Forgot Password</h2>

              @if (Session::get("error"))
                <div class='bg-danger alert'>{{ Session::get("error") }}</div>
              @endif
              @if (Session::get("status"))
                <div class='alert alert-success'>{{ Session::get("status") }}</div>
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
        }
      },
      messages: {
        email: {
          required: "Please enter email address",
          email: "Please enter a valid email address",
        }       
      },
      tooltip_options: {
        email: {trigger:'focus', placement:'right'}
      },
    });
  });
  </script>
  
  @stop