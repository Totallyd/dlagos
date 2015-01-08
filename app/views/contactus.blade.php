@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
  <div class="container-fluid">
    <div class="container content">
     
      <div class="row-fluid spader_2">

        <div class="span12">
          
          <div class="about user">
            <h2>Get In Touch</h2>

            @if (Session::has('error'))
                <div class="flash bg-danger alert">
                  <p>{{ Session::get('error') }}</p>
                </div>
              @endif
              @if (Session::has('success'))
                <div class="flash alert alert-success">
                  <p>{{ Session::get('success') }}</p>
                </div>
              @endif

            <form action="" method="post" id="userdata">
             <br/> 
              <div class="row-fluid formrow">
                <div class="span3">
                  
                </div>
                <div class="span9">
                  <label for="name">Name*</label>
                  <input type="text" id="name" name="name" value="" />
                </div>
              </div>

               
              <div class="row-fluid formrow">
                <div class="span3">
                  
                </div>
                <div class="span9">
                  <label for="phone"> Phone Number*</label>
                  <input type="text" id="phone" name="phone" value="" />
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  
                </div>
                <div class="span9">
                  <label for="email">Email Address*</label>
                  <input type="text" id="email" name="email" value="" />
                </div>
              </div> 

              <div class="row-fluid formrow">
                <div class="span3">
                  
                </div>
                <div class="span9">
                  <label for="subject"> Subject*</label>
                  <input type="text" id="subject" name="subject" value="" />
                </div>
              </div>
              
              <div class="row-fluid formrow">
                <div class="span3">
                  
                </div>
                <div class="span9">
                  <label for="message">Message*</label>
                  <textarea id="message" name="message"></textarea>
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
        name: "required",
        phone: {
          required: true,
          digits: true,
        },
        email: {
          required: true,
          email: true
        },
        subject: {
          required: true,
        },
        message: {
          required: true,
        }
      },
      messages: {
        name: "Please enter your name",
        phone: {
          required: "Please enter phone number",
          digits: "Please enter valid phone number",
        },
        email: {
          required: "Please enter email address",
          email: "Please enter a valid email address",
        },
        subject: "Please enter email subject",
        message: "Please enter email message",  
      },
      tooltip_options: {
        name: {trigger:'focus', placement:'right'},
        phone: {trigger:'focus', placement:'right'},
        email: {trigger:'focus',placement:'right'},
        subject: {trigger:'focus', placement:'right'},
        message: {trigger:'focus',placement:'right'}
      },
    });
  });
  </script>
  
  @stop