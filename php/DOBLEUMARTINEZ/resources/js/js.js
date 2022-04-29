
function modalCliente($a){
  //alert('modal cliente'+$a);
  $(".content-modal").addClass("content-modal-active");
  $(".modal").addClass("modal-active");
  $("#modal-"+$a).addClass("active-modal-info");
}

function closeModal(){
  $(".content-modal").removeClass("content-modal-active");
  $(".modal").removeClass("modal-active");
}


$( "#btn-login" ).click(function() {

  $("#btn-login").addClass("login-btn-active");
  $("#btn-register").removeClass("login-btn-active");

  $("#login").addClass("active-form");
  $("#register").removeClass("active-form");

});

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml11 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700
  })
  .add({
    targets: '.ml11 .line',
    translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
    easing: "easeOutExpo",
    duration: 700,
    delay: 100
  }).add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 34 * (i+1)
  }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });