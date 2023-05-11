<style type="text/css">
  
  .check-up-laboral {
    padding: 0% 45% 0% 5%;
    list-style: none;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    margin-top: 3%;
  }

  .check-up-laboral > li {
      width: 20%;
      text-align: center;
      font-weight: bold;
      font-size: 22px;
      letter-spacing: 0.5px
    }

  .check-up-laboral > li > i{
        font-size: 53px;
    color: #28a745;
    background: #fff;
    border-radius: 50px;
    border: 3px solid #f9f9f9
  }

  }
</style>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <!----><div class="carousel-item ">
      <img class="d-block w-100" src="images/slide/banner-1.jpg" alt="First slide">

        <div class="titles"> 
          <h1>Te ayudamos a cumplir la NOM 035</h1>
          <p>
            Apoyo digital para la gestión RH,<br> agregando valor al <strong>capital humano</strong> y <br> a la <strong>organización</strong> .<br>
            <button data-toggle="modal" data-target="#modal-1" class="cta-01">Contáctanos</button>
          </p>
      </div>

    </div>

    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slide/banner-2.jpg" alt="Second slide">

        <div class="titles">
          <h1>Check up Laboral</h1>
          <ol class="check-up-laboral">
            <li><i class="fas fa-check-circle"></i><br>Ambiente <br>Laboral</li>
            <li><i class="fas fa-check-circle"></i><br>Desempeño y <br>Relaciones <br>Laborales</li>
            <li><i class="fas fa-check-circle"></i><br>Norma <br>035</li>
            <li><i class="fas fa-check-circle"></i><br>E-Learning y <br>Evaluación de <br>Conocimiento</li>
            <li><i class="fas fa-check-circle"></i><br>Sociometría</li>
          </ol>
          <p>
            <button data-toggle="modal" data-target="#modal-1" class="cta-01">Contáctanos</button>
          </p>
      </div>

    </div>
  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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