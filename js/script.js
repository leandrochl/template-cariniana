$(document).ready( function (){
   $('.menu-expandido').click(function () {
     $("#div-navigation").toggle();
     $("#arrow-up").toggle();
   });
   $('#icon-menu-single').click(function () {
     $("#menu-navigation-single").toggle();
     $("#arrow-up-single").toggle();
   });
});
