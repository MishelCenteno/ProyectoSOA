<?php

echo "<html>";
echo '<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Vehiculos Tech Car</title>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/1-col-portfolio.css" rel="stylesheet">
</head>';

    ?>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Vehiculos Tech-Car</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Vehiculos
                <span class="sr-only">(current)</span>
              </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reservaciones.php">Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <div class="container">
        <!-- Page Heading -->
        <h1 class="my-4"  style="text-align:center;">Listado de Vehiculos</h1>
        <div class="row">
            <?php 
            //$url = 'https://raw.githubusercontent.com/MishelCenteno/ProyectoSOA/master/vehiculos.xml';
            //$url = 'vehiculosL.xml';
            $url = 'https://jersonpruebas1997.000webhostapp.com/SOA/vehiculosL.xml';
            echo "<script>console.log( 'URL ORIGEN DATOS: " . $url . "' );</script>";
            //xml = simplexml_load_file("resultados.xml");
            $xml = simplexml_load_file($url);
            foreach ($xml->vehiculos as $carro) 
                {
                    echo '<div class="col-md-7">';
                    echo '<a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" style="padding: 10px;" src='. '"' . $carro->url. '" alt="">
                </a>';
                echo '</div>';
                echo '<div class="col-md-5">';
                echo '<h3 style="text-align:center;"> ' . $carro->nombre. '</h3>';
                echo '<h4>Caracteristicas</h4>';
                echo "<ul>";
                echo "<li>" . "Marca: " .  $carro->marca . "</li>";
                echo "<li>" . "Modelo: " .  $carro->modelo . "</li>";
                echo "<li>" . "Año: " .  $carro->año . "</li>";
                echo "<li>" . "Color: " .  $carro->color . "</li>";
                echo "<li>" . "Placa: " .  $carro->placa . "</li>";
                echo "<li>" . "Precio: " .  $carro->precio. "</li>";
                echo "</ul>";
                echo "<h4>Descripcion: </h4>";
                echo "<p>" . $carro->descripcion . "</p>";
                echo ' </div>';
            }             
            ?>            
        </div>
    </div>
      <!-- Begin Footer -->
    <footer class="page-footer font-small teal pt-4">
    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Stalin Maza</h5>
          <p>Analisis de Sistemas Informáticos - EPN Ecuador</p>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none pb-3">
        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">
          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">Mishel Centeno</h5>
          <p>Analisis de Sistemas Informáticos - EPN Ecuador</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Text -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        <p>© 2018 Derechos Reservados:</p>      
    </div>
    <!-- Copyright -->
    </footer>
  <!-- End Footer -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <?
    /**/
    ?>
        </body>
    </html>
    <?
?>
    