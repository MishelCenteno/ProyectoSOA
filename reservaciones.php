<?php

echo "<html>";
echo '<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Reservaciones CM</title>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/1-col-portfolio.css" rel="stylesheet">
</head>';

    ?>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Reservaciones CM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Vehiculos
                
              </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="reservaciones.php">Reservaciones</a>
                        <span class="sr-only">(current)</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <div class="container">
        <!-- Page Heading -->
        <h1 class="my-4"  style="text-align:center;">Listado de Reservaciones</h1>
        <div class="row">
            <?php 
            //$url = 'https://raw.githubusercontent.com/MishelCenteno/ProyectoSOA/master/reservacion.xml';
            //$url = 'reservacionesL.xml';
            $url = 'https://jersonpruebas1997.000webhostapp.com/SOA/reservacionesL.xml';
            echo "<script>console.log( 'URL ORIGEN DATOS: " . $url . "' );</script>";
            //xml = simplexml_load_file("resultados.xml");
            $xml = simplexml_load_file($url);
            foreach ($xml->reservacion as $reservar) 
                {
                    echo '<div class="col-md-7">';
                    echo '<a href="#">
                    <img class="img-fluid rounded mb-2 mb-md-0" style="padding: 10px;" src='. '"' . $reservar->url. '" alt="">
                </a>';
                echo '</div>';
                echo '<div class="col-md-5">';
                echo '<h3 style="text-align:center;"> ' . $reservar->nombreCliente. '</h3>';
                echo '<h4>Caracteristicas</h4>';
                echo "<ul>";
                echo "<li>" . "Tipo: " .  $reservar->tipoHabitacion . "</li>";
                echo "<li>" . "Codigo: " .  $reservar->codigoHabitacion . "</li>";
                echo "<li>" . "Precio: " .  $reservar->precio . "</li>";
                echo "<li>" . "Fecha Ingreso: " .  $reservar->fechaIngreso . "</li>";
                echo "<li>" . "Fecha Salida: " .  $reservar->fechaSalida . "</li>";
                echo "</ul>";
                echo "<h4>Comentarios: </h4>";
                echo "<p>" . $reservar->Comentarios . "</p>";
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
    