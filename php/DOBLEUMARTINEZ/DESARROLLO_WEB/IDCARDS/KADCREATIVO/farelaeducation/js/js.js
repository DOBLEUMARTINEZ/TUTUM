
$("#descserv-1" ).click(function() {
  $(".descserv-1").toggle();
  $(".descserv-2,.descserv-3,.descserv-4,.descserv-5").css('display','none');
});

$("#descserv-2" ).click(function() {
  $(".descserv-2").toggle();
  $(".descserv-1,.descserv-3,.descserv-4,.descserv-5").css('display','none');
});

$("#descserv-3" ).click(function() {
  $(".descserv-3").toggle();
  $(".descserv-1,.descserv-2,.descserv-4,.descserv-5").css('display','none');
});

$("#descserv-4" ).click(function() {
  $(".descserv-4").toggle();
  $(".descserv-1,.descserv-3,.descserv-2,.descserv-5").css('display','none');
});

$("#descserv-5" ).click(function() {
  $(".descserv-5").toggle();
  $(".descserv-1,.descserv-3,.descserv-2,.descserv-4").css('display','none');
});


$( ".opc-resume" ).click(function() {

  $('.body-lateral-content').addClass('active-lateral-content');
  $('.row-lateral-content').addClass('active-row-lateral-content');

  $('.resume-content').addClass('active-content');

});

$( ".opc-services" ).click(function() {

  $('.body-lateral-content').addClass('active-lateral-content');
  $('.row-lateral-content').addClass('active-row-lateral-content');

  $('.services-content').addClass('active-content');

});


$( "#curso-1" ).click(function() {

  $('.body-lateral-content-2').addClass('active-lateral-content');
  $('.row-lateral-content-2').addClass('active-row-lateral-content');

  $('.content-curso-1').addClass('active-content');

});

$( "#curso-2" ).click(function() {

  $('.body-lateral-content-2').addClass('active-lateral-content');
  $('.row-lateral-content-2').addClass('active-row-lateral-content');

  $('.content-curso-2').addClass('active-content');

});

$( "#curso-3" ).click(function() {

  $('.body-lateral-content-2').addClass('active-lateral-content');
  $('.row-lateral-content-2').addClass('active-row-lateral-content');

  $('.content-curso-3').addClass('active-content');

});



$( ".opc-services2" ).click(function() {

  $('.body-lateral-content').addClass('active-lateral-content');
  $('.row-lateral-content').addClass('active-row-lateral-content');

  $('.services2-content').addClass('active-content');

});

$( ".curso-1" ).click(function() {

  $('.body-lateral-content').addClass('active-lateral-content');
  $('.row-lateral-content').addClass('active-row-lateral-content');

  $('.content-curso-1').addClass('active-content');

});

$( ".opc-share" ).click(function() {

  $('.body-lateral-content').addClass('active-lateral-content');
  $('.row-lateral-content').addClass('active-row-lateral-content');

  $('.share-content').addClass('active-content');
  
});

$( ".close" ).click(function() {
  $('.body-lateral-content, .body-lateral-content-2').removeClass('active-lateral-content');
  $('.row-lateral-content, .body-lateral-content-2').removeClass('active-row-lateral-content');

  $('.resume-content,.services-content,.services2-content,.share-content,.content-curso-1').removeClass('active-content');

});

$( ".close-2" ).click(function() {
  $(' .body-lateral-content-2').removeClass('active-lateral-content');
  $('.body-lateral-content-2').removeClass('active-row-lateral-content');

  $('.content-curso-1').removeClass('active-content');

});



$('.active-lang').click(function(){
   $('.lang-esp,.lang-eng').toggle('fast');
});

$('.gallery-active-1,.gall-1').click(function(){
   $('.gall-1').toggle('fast');
});

$('.gallery-active-2,.gall-2').click(function(){
   $('.gall-2').toggle('fast');
});

$('.gallery-active-3,.gall-3').click(function(){
   $('.gall-3').toggle('fast');
});

$('.gallery-active-4,.gall-4').click(function(){
   $('.gall-4').toggle('fast');
});

$('.gallery-active-5,.gall-5').click(function(){
   $('.gall-5').toggle('fast');
});

$('.gallery-active-6,.gall-6').click(function(){
   $('.gall-6').toggle('fast');
});

