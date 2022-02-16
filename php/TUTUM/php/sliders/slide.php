<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top: -4%;">

  <div class="carousel-inner">

    <!--
    <div class="carousel-item active">

      <img class="d-block w-100 desktop-slider" src="./images/slide/banner-3.jpg" alt="First slide">
      <img class="d-block w-100 mobil-slider" src="./images/slide/mobil-0.png" alt="First slide">

        <div class="box-slider">

          <h1 class="ml11">
            <span class="text-wrapper">
              <span class="line line1"></span>
              <span class="letters">Soluciones Integrales de TI</span>
            </span>
          </h1>

          <p>
            Estamos comprometidos con el desarrollo económico y social del país, así como con nuestros clientes, socios y colaboradores.​
          </p>
          <button>
            Contactanos <i class="fas fa-chevron-right"></i>
          </button>
        </div>

    </div>-->

    <div class="carousel-item active">

      <span style="position: absolute; width: 100%; height: 100%; background: #0000007a;"></span>
      <video class="video-slide desktop-slider" loading="lazy" src="https://www.tutum.com.mx/video/SOLUCIONES.mp4" autoplay="" muted="" loop=""></video>

        <div class="box-slider">
          <h1 class="ml11">
            <span class="text-wrapper">
              <span class="line line1"></span>
              <span class="letters">Soluciones Integrales de TI</span>
            </span>
          </h1>
          <p>
            Estamos comprometidos con el desarrollo económico y social del país, así como con nuestros clientes, socios y colaboradores.​
          </p>
          <button>
            Contactanos <i class="fas fa-chevron-right"></i>
          </button>
        </div>

    </div>
  
  </div>

  <!--
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
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
</script>        