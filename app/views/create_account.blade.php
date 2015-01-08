@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
   <div class="container-fluid">
    <div class="container content">
     
      <div class="row-fluid spader_2">

        <div class="span12">
          
          <div class="about user">
            <h2>Create Account</h2>
            <form action="" method="post" id="userdata">
              <br/>
              <div class="row-fluid formrow">
                <div class="span3">
                  <label for="username">Username*</label>
                </div>
                <div class="span9">
                  <input type="text" id="username" name="username" value="" />
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
                  <label for="repassword">Confirm Password*</label>
                </div>
                <div class="span9">
                  <input type="password" id="repassword" name="repassword" value="" />
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
  
  @stop