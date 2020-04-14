$(document).ready( function (){
   $('.menu-expandido').click(function () {
     $("#div-navigation").toggle();
     $("#arrow-up").toggle();

     if($(".menu-expandido span").hasClass("glyphicon-menu-hamburger")){
       $(".menu-expandido span").removeClass("glyphicon-menu-hamburger");
       $(".menu-expandido span").addClass("glyphicon-remove");
     } else {
       $(".menu-expandido span").addClass("glyphicon-menu-hamburger");
       $(".menu-expandido span").removeClass("glyphicon-remove");
     }
   });
   $('.div-icon-menu-single').click(function () {
     $("#menu-navigation-single").toggle();
     $("#arrow-up-single").toggle();
     if($("#icon-menu-single").hasClass("glyphicon-menu-hamburger")){
       $("#icon-menu-single").removeClass("glyphicon-menu-hamburger");
       $("#icon-menu-single").addClass("glyphicon-remove");
     } else {
       $("#icon-menu-single").addClass("glyphicon-menu-hamburger");
       $("#icon-menu-single").removeClass("glyphicon-remove");
     }

   });
});
