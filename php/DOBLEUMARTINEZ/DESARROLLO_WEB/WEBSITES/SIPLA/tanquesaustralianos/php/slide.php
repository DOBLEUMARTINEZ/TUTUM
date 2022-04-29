<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">

      <img class="d-block w-100 desktop-slider" src="./images/slide/banner-2.jpg" alt="First slide">
      <img class="d-block w-100 mobil-slider" src="./images/slide/mobil-0.png" alt="First slide">

      <h1 class="ml12">
        FABRICACIÓN DE TANQUES
      </h1>
      <span class="notes-slider" >De almacenamiento / Tanques australianos</span>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    </div>
  
  </div>
  <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script type="text/javascript">
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml12');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml12 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: '.ml12 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });
</script>        