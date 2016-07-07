<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <title>Therappy - Eventos</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">

  </head>
  <body>

<!-- Header  -->
    <header>
      <section class="logo">
        <a href="../index.php"><img class="logo-header" src="../img/logo-therappy.png" ></a>
      </section>

      <section class="menu-bar">
        <ul class="list-content">
          <a href="quien.php"><li class="list-item"><span  >Quiénes somos</span></li></a>
          <a href="servicios.php"><li class="list-item"><span  >Servicios</span></li></a>
          <a href="interes.php"><li class="list-item"><span  >De tu interés</span></li></a>
          <a href="eventos.php"><li class="list-item selected"><span  >Eventos</span></li></a>
          <a href="galeria.php"><li class="list-item"><span  >Galería</span></li></a>
          <a href="contacto.php"><li class="list-item"><span  >Contacto</span></li></a>
        </ul>
      </section>

      <span class="nav-icon">&#9776;</span>
        <ul class="mobile-nav animated">
          <a href="../index.php"><li>Inicio</li></a>
          <a href="quien.php"><li>Quiénes somos</li></a>
          <a href="servicios.php"><li>Servicios</li></a>
          <a href="interes.php"><li>De tu interés</li></a>
          <a href="eventos.php"><li class="selected">Eventos</li></a>
          <a href="galeria.php"><li>Galería</li></a>
          <a href="contacto.php"><li>Contacto</li></a>
        </ul>

    </header>

    <!-- Barra de color con degradado -->
    <section class="bar-color">
      <div class="banner-color"></div>
    </section>
  <!-- Fin de Header -->

  <!-- Banner  -->
    <section class="banner">
      <div class="banner-image">
        <img src="../img/banner-eventos-01.png" >
      </div>
    </section>

<!-- Seccion "Eventos" (reutilizando parte de quien.php) -->

  <section class="quien">

    <!-- Acerca de -->

    <div class="quien-top event-title-top">
      <h2>Eventos</h2>

      <!-- POPUP -->
      <div class="popup-events animated">
        <div class="popup-events-wrapper">
          <h3><b>Nombre del evento</b></h3>

          <p class="popup-events-content" style="text-align: justify; display:block;">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt u
             t labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi u
          </p>

          <div class="popup-events-img">
              <img src="../img/bg-1-01.png" alt="">
          </div>

          <br>
          <div class="ver-mas quien-button event-button hvr-shrink" id="close-popup">
            <span>CERRAR < </span>
          </div>
        </div>
      </div>

    </div>


    <div class="events-content animated">

      <div class="event-elem hvr-box-shadow-outset">
              <div class="event-img">
                <img src="../img/bg-1-01.png" alt="">
              </div>

              <div class="event-title">
                <span> <b>NOMBRE DEL EVENTO</b></span>
              </div>

              <div class="event-info">
                <div class="event-info-wrapper">

                  <div class="event-info-date">
                    <span>- Fecha / - Hora</span> <br>
                    <span>+ info</span> <br>
                    <span>+ info</span> <br>
                    <span>+ info</span> <br>
                    <span>+ info</span> <br>
                  </div>

                  <div class="ver-mas  hvr-shrink">
                    <span>VER MÁS</span>
                  </div>
                </div>
              </div>
         </div>

      <div class="event-elem hvr-box-shadow-outset">
              <div class="event-img">
                <img src="../img/bg-2-01.png" alt="">
              </div>

              <div class="event-title">
                <span> <b>NOMBRE DEL EVENTO</b></span>
              </div>

              <div class="event-info">
                <div class="event-info-wrapper">

                  <div class="event-info-date">
                    <span>- Fecha / - Hora</span> <br>
                    <span>+ info</span> <br>
                    <span>+ info</span> <br>
                    <span>+ info</span> <br>
                    <span>+ info</span> <br>
                  </div>

                  <div class="ver-mas  hvr-shrink">
                    <span>VER MÁS</span>
                  </div>
                </div>
              </div>
         </div>

      <div class="event-elem hvr-box-shadow-outset">
             <div class="event-img">
               <img src="../img/bg-3-01.png" alt="">
             </div>

             <div class="event-title">
               <span> <b>NOMBRE DEL EVENTO</b></span>
             </div>

             <div class="event-info">
               <div class="event-info-wrapper">

                 <div class="event-info-date">
                   <span>- Fecha / - Hora</span> <br>
                   <span>+ info</span> <br>
                   <span>+ info</span> <br>
                   <span>+ info</span> <br>
                   <span>+ info</span> <br>
                 </div>

                 <div class="ver-mas  hvr-shrink">
                   <span>VER MÁS</span>
                 </div>
               </div>
             </div>
        </div>

  </section>


  <!-- Footer -->
  <section class="footer">
    <div class="footer-top">
      <div class="footer-top-right">
        <a href="../index.php"><img class="Logo_Footer" src="../img/logo-white.svg"/></a>  <br><br>

        <a href=""><img class="social_icon" src="../img/twitter.svg"/></a>
        <a href=""><img class="social_icon" src="../img/instagram.svg"/></a>
        <a href=""><img class="social_icon" src="../img/facebook.svg"/></a>
        <br><br>

        <span>Dirección #234 Col. Providencia</span> <br>
        <span>Guadalajara, Jal, México C.P. 44069 </span> <br>
          <span>Tel. <a style="color:white" href="tel:33 44 77 33">33 44 77 33</a> - <a style="color:white" href="tel:33 77 22 88">33 77 22 88</a> </span> <br>
        <span>info@therappy.com </span> <br>
      </div>

      <div class="footer-top-left">
        <ul class="menu-footer">
          <a href="html/quien.php"><li><span class="footer-menu-item">Quiénes Somos</span></li></a>
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
  <!-- Responsive Menu Script -->
  <script type="text/javascript">
    var icon=document.querySelector(".nav-icon"),show=!1;icon.onclick=function(){show?($(".mobile-nav").removeClass("fadeInDown"),$(".mobile-nav").addClass("fadeOutUp")):($(".mobile-nav").addClass("is-show"),$(".mobile-nav").addClass("fadeInDown"),$(".mobile-nav").removeClass("fadeOutUp")),show=!show};
  </script>

  <!-- PopUp Events -->
  <script type="text/javascript">
    $( ".event-elem,.ver-mas" ).click(function() {
        $('.popup-events').css( "display", "flex" );
        $( ".events-content" ).removeClass( "fadeIn" );
        $( ".events-content" ).addClass( "fadeOut" );
        $( ".events-content" ).css( "display","none");
        $( ".popup-events" ).removeClass( "fadeOut" );
        $( ".popup-events" ).addClass( "fadeIn" );
        $('html, body').animate({
            scrollTop: $(".quien-top").offset().top
        }, 500);
    });
    $( ".event-button,.close-lightbox" ).click(function() {
        $('html, body').animate({
            scrollTop: $(".quien-top").offset().top
        }, 300);
        $( ".popup-events" ).removeClass( "fadeIn" );
        $( ".popup-events" ).addClass( "fadeOut" );
          setTimeout(function(){
          $('.popup-events').css( "display", "none" );
          $( ".events-content" ).css( "display","block");
          $( ".events-content" ).addClass( "fadeIn" );
          $( ".events-content" ).removeClass( "fadeOut" );
        }, 600);
    });
  </script>

  </body>
</html>
