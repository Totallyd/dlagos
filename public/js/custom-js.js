/*!
 * Custom JS for Digitall
 * Copyright 2014 
 * Developed by Kashif
 */

/**** Code Starts for Sidebar Accordion Menu ****/

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

 /**** Code Ends for Sidebar Accordion Menu ****/