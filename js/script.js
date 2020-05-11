$(document).ready( function (){
   $('.menu-expandido').click(function () {
     $("#div-navigation").toggle();
     $("#arrow-up").toggle();

     if($(".menu-expandido span").hasClass("fa-bars")){
       $(".menu-expandido span").removeClass("fa-bars");
       $(".menu-expandido span").addClass("fa-times");
     } else {
       $(".menu-expandido span").addClass("fa-bars");
       $(".menu-expandido span").removeClass("fa-times");
     }
   });
   $('.div-icon-menu-single').click(function () {
     $("#menu-navigation-single").toggle();
     $("#arrow-up-single").toggle();
     if($("#icon-menu-single").hasClass("fa-bars")){
       $("#icon-menu-single").removeClass("fa-bars");
       $("#icon-menu-single").addClass("fa-times");
     } else {
       $("#icon-menu-single").addClass("fa-bars");
       $("#icon-menu-single").removeClass("fa-times");
     }

   });
});
