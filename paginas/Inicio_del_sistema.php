




<!DOCTYPE html>
<html lang="es ">
<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Inicio del sistema</title>

  <!-- Esto es bootstrap -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <script src="plugins/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Este es mi estilo -->
  <link rel="stylesheet" href="../paginas/styles/system.css">
  

</head>

<body>

  <main >

    <!-- SIDE BARD -->
    <div class=" d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 320px;">
      <a href="../paginas/Inicio_del_sistema.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white">
          <img src="../media/logo/Isologoinstitutoclei.png"  height="95">
      </a>
      <hr>

      <!-- Modulos del sistema -->
      <ul class="nav nav-pills flex-column mb-auto" >
        <!-- Modulo de Inicio -->
        <li class="nav-item " width="85" height="85">
          <a href="../paginas/Inicio_del_sistema.php" class="nav-link text-white active" aria-current="page">
            <img src="../media/iconos/home.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50">
            Inicio
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Gestión -->
        <li>
          <a href="../paginas/gestion.php" class="nav-link text-white">
            <img src="../media/iconos/Management.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50">
            Gestión
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Financiero -->
        <li>
          <a href="../paginas/financiero.php" class="nav-link text-white">
            <img src="../media/iconos/Financiero.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50">
            Financiero
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Novedades -->
        <li>
          <a href="../paginas/novedades.php" class="nav-link text-white">
            <img src="../media/iconos/Novedad.ico"class="img-fluid" style="padding-inline-end: 10px;" width="50" height="50">
            Novedades
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Administrador -->
        <li>
          <a href="../paginas/systemadministrador.php" class="nav-link text-white">
            <img src="../media/iconos/Administrador .ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50">
            Administrador
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Estudiantes -->
        <li>
          <a href="../datatables/estudiantes.php" class="nav-link text-white">
            <img src="../media/iconos/Estudiante.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50">
            Estudiantes
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="../index.html"><button type="button" class="btn btn-danger" style="background-color: rgb(168, 4, 4);">Salir del sistema</button></a>
        
      </div>
    </div>
    <div class="b-example-divider"></div>

    <!-- END SIDE BARD -->


    <!-- CONTENIDO DE INICO -->
    
    <div class="container my-5 hijo">
      <div class="row p-5 pb-5 pe-lg-5 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div>
          <!-- Contenido de gestión estudiantel sitio informativo (Sin definir contenido) -->
          <h1 class="display-4 fw-bold lh-1">Bienvenidos a nuestro sistema de gestión del Instituto CLEI</h1>
          <br>
          <p class="lead">Aqui se relaizará una breve explicación de cada uno de los modulos y algunas recomendaciones.
          </p>
        </div>
      </div>
    </div>
    <div class="b-example-divider"></div>
      
  </main>

</body>

</html>
