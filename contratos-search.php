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
  <header>
    <?php include 'navbar.php' ?>
  </header>
  <main>
    <div class="body-content">
      <div class="row document-header">
        <div class="col-3 col-m-3">
          <h2 class="document-title">Contratos</h2>
        </div>
        <div class="col-9 col-m-9">
          <p class="document-description">Explora los importes, años, dependencias, empresas proveedoras y otras características de más de un millón de contratos de México.</p>
        </div>
      </div>
      <div class="row document-body">
        <div class="col-3 col-m-3">
          <?php include 'search-bar-contratos.php' ?>
        </div>
        <div class="col-9 col-m-9">
          <p class="search-terms-text">Búsqueda para: <span class="blob">Comisión Federal de electricidad</span> <span class="blob">Fecha inicio: 21/09/2009, Fecha fin: 21/09/2012</span> <span class="blob">Licitación</span> 5,908 resultados</p>

          <div class="search-card">
            <div class="row search-results-header">
              <div class="col-m-9 col-9">
                <h3 class="search-result-title">Construccion del edificio terminal del nuevo aeropuerto internacional de la ciudad de méxico</h3>

              </div>
              <div class="col-m-3 col-3">
                <h3 class="search-result-emph">12,200</h3>
                <p class="search-result-emph-complementary">millones de pesos</p>
              </div>
            </div>
            <div class="row">
              <div class="col-m-9 col-9">
                <img src="images/calendar.png" alt="calendario">
                <p class="search-result-mono-gray">Vigencia de contrato del 21/03/2012 al 21/04/2014</p>
              </div>
              <div class="col-m-3 col-3">
                <p class="search-result-mono-gray">$12,239,987.09 MXN</p>
              </div>
            </div>
            <div class="row search-results-last-row">
              <div class="col-m-5 col-5">
                <p>Dependencia</p>
                <p>Comisión Federal de Electricidad</p>
              </div>
              <div class="col-m-5 col-5">
                <p>Proveedor</p>
                <p>Petroquímicos Balbuena SA y otros 5 más</p>
              </div>
              <div class="col-m-2 col-2">
                <a href="/contrato/id" class="see-contract">Ver contrato</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <?php include 'footer.php' ?>
  <script type="text/javascript">
    document.getElementById('navbar').classList.add('shrink');
  </script>
  </html>
