@extends('layouts.front-master')

@section('title') Digital Lagos TV @stop

@section('content')
  
  {{ HTML::style(asset('public/css/evoslider/css/default/reset.css')) }}
  {{ HTML::style(asset('public/css/evoslider/css/evoslider.css')) }}
  {{ HTML::style(asset('public/css/evoslider/css/default/default.css')) }}  
  
  {{ HTML::script(asset('public/js/evoslider/js/jquery-1.7.1.min.js')) }}
  {{ HTML::script(asset('public/js/evoslider/js/jquery.easing.1.3.js')) }}
  {{ HTML::script(asset('public/js/evoslider/js/jquery.evoslider.lite-1.1.0.js')) }}
 <!--  // <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  // <script type="text/javascript" src="js/jquery.evoslider.lite-1.1.0.js"></script> -->
<style type="text/css">
  .evoslider.default .evoText.overlay {
    color: #3e3e3e;
    font-family: Tahoma,Geneva,sans-serif;
    font-size: 16px;
    height: 90px;
    left: 20px;
    line-height: 20px;
    margin-left: 378px;
    margin-top: 0;
    opacity: 0.9;
    padding: 10px 20px;
    top: 10px;
    width: 275px;
  }
  </style>

  <div class="container-fluid">
    <div class="container content">
     
      <div class="row-fluid spader_2">

        <div class="span12">
          
          <!-- Slider Starts -->

          <div id="mySlider" class="evoslider default"> <!-- start evo slider -->

    <dl>
    
      <dt>slide one</dt>
      <!-- <dd>
         slide one content          
      </dd> -->
      <dd data-src="{{{ URL::to('public/img/slide_1.jpg') }}}" data-text="overlay">
        <img class="attachment-post-thumbnail wp-post-image" width="481" height="439" alt="slide_1" src="http://digitallagos.tv/wp-content/uploads/2013/11/slide_1.jpg">
        <div class="evoText">
          <h3>Collaborating </h3>
          <p></p><p>Promoting business growth through the power of our collaboration, partnerships, mentoring and enterprise initiatives.</p>
          <p></p>
        </div>
      </dd>
  
      <dt>slide two</dt>
      <dd>
         slide two content        
      </dd>
  
      <dt>slide three</dt>
      <dd>          
         slide three content     
      </dd>
  
      <dt>slide four</dt>
      <dd>        
         slide four content       
      </dd> 
      
      <dt>slide five</dt>
      <dd>
         slide five content       
      </dd>
        
    </dl>

</div> <!-- end evo slider -->

<script type="text/javascript">
            
    $("#mySlider").evoSlider({
        mode: "accordion",                  // Sets slider mode ("accordion", "slider", or "scroller")
        width: 960,                         // The width of slider
        height: 360,                        // The height of slider
        slideSpace: 5,                      // The space between slides
    
        mouse: true,                        // Enables mousewheel scroll navigation
        keyboard: true,                     // Enables keyboard navigation (left and right arrows)
        speed: 500,                         // Slide transition speed in ms. (1s = 1000ms)
        easing: "swing",                    // Defines the easing effect mode
        loop: true,                         // Rotate slideshow
    
        autoplay: true,                     // Sets EvoSlider to play slideshow when initialized
        interval: 5000,                     // Slideshow interval time in ms
        pauseOnHover: true,                 // Pause slideshow if mouse over the slide
        pauseOnClick: true,                 // Stop slideshow if playing
        
        directionNav: true,                 // Shows directional navigation when initialized
        directionNavAutoHide: false,        // Shows directional navigation on hover and hide it when mouseout
    
        controlNav: true,                   // Enables control navigation
        controlNavAutoHide: false           // Shows control navigation on mouseover and hide it when mouseout 
    });                                
    
</script>

          <!-- Slider Ends -->

          <div class="about user">
            <h2>Membership</h2>              
              <div class="row-fluid formrow">
                <div class="span12">
                  <p>Digital Lagos welcome individuals members of organisation or agency. We are a dynamic industry led organisation and we aspire to be one of the largest high calibre creative networks in Nigeria. Our main focus is profiling, growth, regular events, and workshops.</p>
                </div>
              </div>
          </div>

          <div class="about user span4" style="margin-left:0px">
            <h4>Why Join Digital Lagos.tv</h4>
            <div class="row-fluid formrow">  
                <div class="span12">
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                </div>
              </div>
            </div>
            <div class="about user span4" style="margin-left:23px">
            <h4>A showcase of your work</h4>
            <div class="row-fluid formrow">  
                <div class="span12">
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                </div>
              </div>
            </div>
            <div class="about user span4" style="margin-left:23px">
            <h4>Your own web page</h4>
            <div class="row-fluid formrow">  
                <div class="span12">
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                </div>
              </div>
            </div>
            <div class="about user span4" style="margin-left:0px">
            <h4>Cost-effective</h4>
            <div class="row-fluid formrow">  
                <div class="span12">
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                </div>
              </div>
            </div>
            <div class="about user span4" style="margin-left:23px">
            <h4>Online registration</h4>
            <div class="row-fluid formrow">  
                <div class="span12">
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                </div>
              </div>
            </div>
            <div class="about user span4" style="margin-left:23px">
            <h4>Continuous, national promotion to a wide audience</h4>
            <div class="row-fluid formrow">  
                <div class="span12">
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                </div>
              </div>
            </div>


            <div class="row-fluid formrow">
                <div class="span12 profilearea">
                 
                </div>
              </div>

              <div class="row-fluid formrow">
                <div class="span12 profilearea">
                  <a class="btn btn-lg btn-success" href="package">Join Now</a> 
                </div>
              </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
  @stop