@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
   <div class="container-fluid">
    <div class="container content">
     
      <div class="row-fluid spader_2">

        <div class="span12">
          
          <div class="about user">
            <h2>Hi <?php ucfirst(Session::get('name'));?>!</h2>
           
              <h3>Thank you for choosing DigitalLagos TV</h3> 
              
              <div class="row-fluid formrow">
                <div class="span12">
                  <p>
                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.<br/><br/>

                    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, <span class="organe_font">Link goes here</span> and consent to This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,<br/><br/>

                    Regards,<br/>
                    Matt Barne<br/>
                    Chief Lorem Ipsum<br/> 
                    <span class="organe_font">Digitallagos.tv</span>
                    
                  </p>

                </div>
              </div> 
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
  @stop