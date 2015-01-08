<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Digitall.tv
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->
        <!-- {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css') }}
        {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }} -->
        {{ HTML::style(asset('public/css/bootstrap.css')) }}
        <!-- {{ HTML::style(asset('public/css/bootstrap.min.css')) }} -->
        {{ HTML::style(asset('public/css/style.css')) }}
        {{ HTML::style(asset('public/css/jquery-ui-1.10.4.custom.min.css')) }}

        <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <div class="navbar navbar-fixed-top bg-color">
            <div class="navbar-inner">
                <div class="container">
                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    
                    

                    <img src="{{{ URL::to('public/img/logo.png') }}}"/>

                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="{{{ URL::to('') }}}">Home</a></li>
                        </ul> 
                    </div>

                    @if(Auth::check())
                        <div class="float-right"><img height="50" src="{{{ URL::to('public/img/avatar.png') }}}"></div>
                        <div class="float-right">
                            <div class="float-left"><span style="color:#FFFFFF">You logged in as</span> <span style="color:#3DB0FC"> {{ucfirst(Auth::user()->username)}} </span></div><br>
                            <div class="float-right"><img height="20" src="{{{ URL::to('public/img/lock.png') }}}">
                                <a class="logout" href="{{{ URL::to('admin/logout') }}}">Logout</a>
                            </div>
                                                
                        </div>

                    @endif

                </div>
            </div>
        </div> 

        <!-- Container -->
        <div class="container">
        @if(Auth::check())
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-2 col_border_right">         

                        <div>
                            <div id="main-search">
                            <div id="search-arrow" style="float:left;margin-top:10px"><img src="{{{ URL::to('public/img/down-arrow.png') }}}"></div>
                            <div id="search-menu" style="position:absolute;border:1px black;height:270px; width:150px; background-color:black; display:none;padding:15px;margin-top:35px">
                                <span><img height="30" src="{{{ URL::to('public/img/all.png') }}}"> All</span><br/>
                                <span><img height="30" src="{{{ URL::to('public/img/avatar.png') }}}"> Members</span><br/>
                                <span><img height="30" src="{{{ URL::to('public/img/sub-admin.png') }}}"> Sub-Admin</span><br/>
                                <span><img height="30" src="{{{ URL::to('public/img/listing.png') }}}"> Listing</span><br/>
                                <span><img height="30" src="{{{ URL::to('public/img/blog.png') }}}"> Blog</span><br/>
                                <span><img height="30" src="{{{ URL::to('public/img/gallery.png') }}}"> Gallery</span><br/>
                                <span><img height="30" src="{{{ URL::to('public/img/content.png') }}}"> Content</span><br/>
                                <span><img height="30" src="{{{ URL::to('public/img/message.png') }}}"> Message</span><br/>
                            </div>
                            </div>
                            <div style="float:left; padding-right:2px;"><input type="text" name="search" value="" class="form-control searchbox" placeholder="Enter Keywords to Search"></div>
                            <div style="float:left; margin-top:5px"><img width="30" height="30" src="{{{ URL::to('public/img/search.png') }}}"></div>
                        </div>

                    </div>
                    <div class="col-sm-10 col_border_left">
                        <h3 class="h3_bold">@yield('pagetitle')</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-2 col_border_line">
                        
                        <ul id="nav">
                            <li> <a href="{{{ URL::to('admin/dashboard') }}}">Dashboard</a></li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Sub-Admin</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Sub-Admin</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Sub-Admin</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Sub-Admin</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Members</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Member</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Member</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Listing</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Listing</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Testimonials</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Testimonial</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Testimonial</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Testimonial</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Blog</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Blog</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Blog</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Blog</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Content</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Page</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Page</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage FAQ</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add FAQ</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit FAQ</a>
                                    <li><a href="{{{ URL::to('#') }}}">View FAQ</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Help</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Help</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Help</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Help</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Email Templates</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Email Template</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Email Template</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Email Template</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Category</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Category</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Category</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Category</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Sub-Category</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Sub-Category</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Sub-Category</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Sub-Category</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Banner</a>
                                <ul>
                                    <li><a href="{{{ URL::to('#') }}}">Add Banner</a>
                                    <li><a href="{{{ URL::to('#') }}}">Edit Banner</a>
                                    <li><a href="{{{ URL::to('#') }}}">View Banner</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Setting</a></li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Payment</a>
                                <ul>
                                        <li><a href="{{{ URL::to('#') }}}">View Payment</a>
                                </ul>
                            </li>
                            <li> <a href="{{{ URL::to('#') }}}">Manage Contacts</a>
                                <ul>
                                        <li><a href="{{{ URL::to('#') }}}">View Contact</a>
                                        <li><a href="{{{ URL::to('#') }}}">Reply Contact</a>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <div class="col-sm-10">
                        <!-- Content -->
                        @yield('content')

                    </div>
                </div>
            </div>
            @else
                    <!-- Content -->
                    @yield('content')
            @endif




        </div>

        <div class="footer">
            <span>&copy; 2013 digitallagos.tv. All Rights Reserved</span>    
        </div>

        <!-- Scripts are placed here -->
        {{ HTML::script(asset('public/js/jquery-1.10.2.js')) }}
        {{ HTML::script(asset('public/js/jquery-ui-1.10.4.custom.min.js')) }}
        {{ HTML::script(asset('public/js/bootstrap.min.js')) }}


        <script>
            $(document).ready(function() {
            $( "#accordion" ).accordion();
            });


             function initMenu() {
                 $('#nav ul').hide();
                 $('#nav li a').click(

                 function () {
                    
                     var checkElement = $(this).next();
                     if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                         $('#nav ul:visible').slideToggle('normal');
                          //$(this).addClass("line-strait");
                         //alert('1');
                     }
                     if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                        //alert('2');
                         removeActiveClassFromAll();
                         $(this).addClass("active");
                         //$(this).addClass("line-style");
                         $('#nav ul:visible').slideToggle('normal');
                         checkElement.slideToggle('normal');
                         return false;
                     }
                     
                     if($(this).siblings('ul').length==0 && $(this).parent().parent().attr('id')=='nav')
                     { //alert('3');
                         removeActiveClassFromAll();
                         $(this).addClass("active");
                         $('#nav ul:visible').slideToggle('normal');
                         
                         return false;
                     }
                 });
            }

 function removeActiveClassFromAll() {
     $('#nav li a').each(function (index) {
         $(this).removeClass("active");
     });
 }


 $(document).ready(function () {
    /*if($(this).siblings('ul').length==0 && $(this).parent().parent().attr('id')=='nav')
     {
         //$(this).addClass("remov-line-style");         
         return false;
     }else{
        $(this).addClass("line-strait");
     }*/
     initMenu();
    $("#main-search").mouseover(function(){
        $("#search-menu").css('display', 'block');
    });
    $("#main-search").mouseout(function(){
        $("#search-menu").css('display', 'none');
    });
 });

 $('#nav').click(function (e)

 {
     e.stopPropagation();


 })




 $(document).click(function () {
     $('#nav').children('li').each(function () {
         if ($(this).children('ul').css('display') == 'block') {
             $(this).children('ul').slideToggle('normal')
             $(this).children('a').removeClass('active')
         }
     })
 })

        </script>

    </body>
</html>
