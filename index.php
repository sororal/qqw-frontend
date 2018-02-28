<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Quién es Quién Wiki (QQW) es una plataforma sobre empresarios, políticos, empresas y organizaciones que explica las conexiones entre estos actores y las pone a disposición de investigadores, periodistas y la ciudadanía en general."/>

    <title>Quién es Quién Wiki | Proyecto Poder</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <?php include 'jumbotron.php'; ?>
    <main>
      <?php include 'explore-data.php'; ?>

      <?php include 'proyectos.php'; ?>

      <div class="contacto">
        <div class="contacto-text">
          <p>¿Quieres hacer proyectos con nosotros?</p>
          <button class="button-link" type="button" name="button">Contáctanos</button>
        </div>
      </div>


      <?php include 'investigaciones.php'; ?>

      <div class="contacto">
        <div class="contacto-text">
          <p>¿Quieres aprender a usar QQW para tus investigaciones?</p>
          <button class="button-link" type="button" name="button">Contáctanos</button>
        </div>
      </div>
    </main>
    <?php include 'footer.php'; ?>
    <script
			  src="https://code.jquery.com/jquery-2.1.3.min.js"
			  integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM="
			  crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(window).scroll(function() {
        if ($(document).scrollTop() > 600) {
          $('nav').addClass('shrink');
        } else {
          $('nav').removeClass('shrink');
        }
      });

      $(window).scroll(function() {
        if ($(document).scrollTop() > 10) {
          $('logo').addClass('shrink');
        } else {
          $('logo').removeClass('shrink');
        }
      });
    </script>
    <script src="js/scrollme.min.js"></script>
  </body>
</html>
