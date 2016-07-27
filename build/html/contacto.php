<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <title>Therappy - Contacto</title>

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
          <a href="eventos.php"><li class="list-item"><span  >Eventos</span></li></a>
          <a href="galeria.php"><li class="list-item"><span  >Galería</span></li></a>
          <a href="contacto.php"><li class="list-item selected"><span  class="hvr-bob selected">Contacto</span></li></a>
        </ul>
      </section>

      <span class="nav-icon">&#9776;</span>
        <ul class="mobile-nav animated">
          <a href="../index.php"><li>Inicio</li></a>
          <a href="quien.php"><li>Quiénes somos</li></a>
          <a href="servicios.php"><li>Servicios</li></a>
          <a href="interes.php"><li>De tu interés</li></a>
          <a href="eventos.php"><li>Eventos</li></a>
          <a href="galeria.php"><li>Galería</li></a>
          <a href="contacto.php"><li class="selected">Contacto</li></a>
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
        <img src="../img/banner-contacto-01.png" >
      </div>
    </section>

<!-- Seccion "Contacto" (reutilizando parte de quien.php) -->

  <section class="quien contacto-quien">

    <!-- Acerca de -->

    <div class="quien-top contacto-top">
      <h2>Contacto</h2>
    </div>

    <!-- Formulario de contacto -->
    <section class="content_contact">
      <form class="form">
        <input type="text" name="firstname" placeholder="Nombre:" required>
        <br>
        <input type="email" name="email" required placeholder="Email">
        <br>
        <input type="tel" pattern="[0-9]*" inputmode="numeric" name="phone" placeholder="Teléfono:"  onkeypress='validate(event)' required>
  	  	<p class="message_form"><textarea name="name" rows="8" cols="40" placeholder="Mensaje:" required></textarea> </p>
        <input type="submit" value="Enviar" class="hvr-grow">
      </form>

      <div class="info_contact">

        <span class="contact-text">Citas</span>
        <br><br>
        <p class="info_text">
        Calle Toltecas 3543. Col. Monraz.<br>
        Guadalajara, Jalisco, México  C.P. 44069 <br>
        Teléfonos consultorio​: <a style="color:#2fc1c1" href="tel:2003​8213">2003​-​8213</a> - <a style="color:#2fc1c1" href="tel:1730​5996">1730​-​5996</a> <br>
        info@therappy.com <br>
        </p>
        <a href="" target="_blank"><img class="social_icon hvr-grow" src="../img/tw-icon.svg"/></a>
        <a href="" target="_blank"><img class="social_icon hvr-grow" src="../img/ig-icon.svg"/></a>
        <a href="" target="_blank"><img class="social_icon hvr-grow" src="../img/fb-icon.svg"/></a>
      </div>
    </section>

    <!-- Google Maps -->
    <section class="map">
      	<div class="map" id="googleMap" >	</div>
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


          <span>Calle Toltecas 3543. Col. Monraz. Guadalajara, Jal.</span> <br>
          <span>Guadalajara, Jal, México C.P. 44069 </span> <br>
          <span>Teléfonos consultorio​: <a style="color:white" href="tel:2003​8213">2003​-​8213</a> - <a style="color:white" href="tel:1730​5996">1730​-​5996</a> </span> <br>
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

    <!-- Scripts  -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- Responsive Menu Script -->
    <script type="text/javascript">
      var icon=document.querySelector(".nav-icon"),show=!1;icon.onclick=function(){show?($(".mobile-nav").removeClass("fadeInDown"),$(".mobile-nav").addClass("fadeOutUp")):($(".mobile-nav").addClass("is-show"),$(".mobile-nav").addClass("fadeInDown"),$(".mobile-nav").removeClass("fadeOutUp")),show=!show};
    </script>

    <!-- Validar numeros en el formulario -->
    <script type="text/javascript">
      function validate(e){var t=e||window.event,r=t.keyCode||t.which;r=String.fromCharCode(r);var a=/[0-9]|\./;a.test(r)||(t.returnValue=!1,t.preventDefault&&t.preventDefault())}
    </script>

    <!-- Google API -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDYC7ZQMvFXYMjseH9iR1P30rqKBo7SOFc"></script>
    <script type="text/javascript" src="../js/google_api.js"></script>

  </body>
</html>
