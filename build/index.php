<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Therappy</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

<!-- Header  -->
    <header>
      <section class="logo">
        <a href="index.php"><img class="logo-header" src="img/logo-therappy.png" ></a>
      </section>

      <section class="menu-bar">
        <ul class="list-content">
          <a href="html/quien.php"><li class="list-item"><span >Quiénes somos</span></li></a>
          <a href="html/servicios.php"><li class="list-item"><span >Servicios</span></li></a>
          <a href="html/interes.php"><li class="list-item"><span >De tu interés</span></li></a>
          <a href="html/eventos.php"><li class="list-item"><span >Eventos</span></li></a>
          <a href="html/galeria.php"><li class="list-item"><span >Galería</span></li></a>
          <a href="html/contacto.php"><li class="list-item"><span >Contacto</span></li></a>
        </ul>
      </section>

      <span class="nav-icon" >&#9776;</span>
        <ul class="mobile-nav animated">
          <a href="index.php"><li class="selected">Inicio</li></a>
          <a href="html/quien.php"><li>Quiénes somos</li></a>
          <a href="html/servicios.php"><li>Servicios</li></a>
          <a href="html/interes.php"><li>De tu interés</li></a>
          <a href="html/eventos.php"><li>Eventos</li></a>
          <a href="html/galeria.php"><li>Galería</li></a>
          <a href="html/contacto.php"><li>Contacto</li></a>
        </ul>

    </header>

    <!-- Barra de color con degradado -->
    <section class="bar-color">
      <div class="banner-color"></div>
    </section>


<!-- Fin de Header -->

<!-- Banner  -->
    <section class="banner">
      <div class="touch-slider">

        <span style="touch-action: manipulation" class="arrow-left" href="#"> < </span>
        <span style="touch-action: manipulation" class="arrow-right" href="#"> > </span>

        <div class="swiper-container">
          <div class="swiper-wrapper">


            <div class="swiper-slide">
              <img src="img/banner-1-01.png">
            </div>

            <div class="swiper-slide">
              <img src="img/banner-2-01.png">
            </div>

            <div class="swiper-slide">
              <img src="img/banner-3-01.png">
            </div>


          </div>
        </div>

        <div class="pagination"></div>

      </div>

    </section>


<!-- Seccion menu con circulos -->
    <section class="menu-opt">
      <div class="circle green-circle">
        <span>Evaluación</span>
      </div>

      <div class="circle pink-circle">
        <span>Diagnóstico</span>
      </div>

      <div class="circle blue-circle">
        <span>Tratamiento</span>
      </div>

      <div class="circle gradient-circle">
        <span>De tu interés</span>
      </div>
    </section>

<!-- Banner  -->
    <section class="banner">
      <div class="banner-image  bottom-banner">
        <img src="img/banner-2-01.png" >
      </div>
    </section>

    <!-- Footer -->
    <section class="footer">
      <div class="footer-top">
        <div class="footer-top-right">
          <a href="index.php"><img class="Logo_Footer" src="img/logo-white.svg"/></a>  <br><br>

          <a href=""><img class="social_icon" src="img/twitter.svg"/></a>
          <a href=""><img class="social_icon" src="img/instagram.svg"/></a>
          <a href=""><img class="social_icon" src="img/facebook.svg"/></a>
          <br><br>

          <span>Calle Toltecas 3543. Col. Monraz. Guadalajara, Jal.</span> <br>
          <span>Guadalajara, Jal, México C.P. 44069 </span> <br>
          <span>Teléfonos consultorio​: <a style="color:white" href="tel:2003​8213">2003​-​8213</a> - <a style="color:white" href="tel:1730​5996">1730​-​5996</a> </span> <br>
          <span>info@therappy.com </span> <br>
        </div>

        <div class="footer-top-left">
            <ul class="menu-footer">
              <a href="html/quien.php"><li><span class="footer-menu-item">Quiénes somos</span></li></a>
              <a href="html/servicios.php"><li><span class="footer-menu-item">Servicios</span></li></a>
              <a href="html/interes.php"><li><span class="footer-menu-item">De tu interés</span></li></a>
              <a href="html/galeria.php"><li><span class="footer-menu-item">Galería</span></li></a>
              <a href="html/contacto.php"><li><span class="footer-menu-item">Contacto</span></li></a>
            </ul>
        </div>
      </div>
    </section>

  </section>

    <footer>
      <p class="footer-text">TODOS LOS DERECHOS RESERVADOS Therappy™ 2016</p>
    </footer>

    <!-- JQuery  -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/slider.js"></script>

    <!-- Responsive Menu Script -->
    <script type="text/javascript">
      var icon=document.querySelector(".nav-icon"),show=!1;icon.onclick=function(){show?($(".mobile-nav").removeClass("fadeInDown"),$(".mobile-nav").addClass("fadeOutUp")):($(".mobile-nav").addClass("is-show"),$(".mobile-nav").addClass("fadeInDown"),$(".mobile-nav").removeClass("fadeOutUp")),show=!show};
    </script>

    <!-- Slider settings -->
    <script type="text/javascript">
      var mySwiper = new Swiper('.swiper-container',{
        pagination: '.pagination',
        loop:true,
        grabCursor: false,
        paginationClickable: true,
        autoplay:false,
        speed:500
      })
      $('.arrow-left').on('click', function(e){
        mySwiper.swipePrev()
      })
      $('.arrow-right').on('click', function(e){
        mySwiper.swipeNext()
      })
    </script>

  </body>
</html>
