<!DOCTYPE html>
<html lang="es ">

<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Inicio</title>

  <!-- Esto es bootstrap -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <script src="plugins/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Este es mi estilo -->
  <link rel="stylesheet" href="../paginas/styles/system.css">


</head>

<body>

  <main>
    <!-- SIDE BARD -->
    <div class=" d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 320px;">
      <a href="../paginas/Inicio_del_sistema.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none ">
        <img src="../media/logo/Isologoinstitutoclei.png" height="95">
      </a>
      <hr>

      <!-- Modulos del sistema -->
      <ul class="nav nav-pills flex-column mb-auto">
        <!-- Modulo de Inicio -->
        <li class="nav-item " width="85" height="85">
          <a href="../paginas/Inicio_del_sistema.php" class="nav-link text-white">
            <img src="../media/iconos/home.ico" class="img-fluid" style="padding-inline-end: 10px;" width="50" height="50" alt="">
            Inicio
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Gestión -->
        <li>
          <a href="../paginas/gestion.php" class="nav-link text-white">
            <img src="../media/iconos/Management.ico" class="img-fluid" style="padding-inline-end: 10px;" width="50" height="50" alt="">
            Gestión
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Financiero -->
        <li>
          <a href="../paginas/financiero.php" class="nav-link text-white">
            <img src="../media/iconos/Financiero.ico" class="img-fluid" style="padding-inline-end: 10px;" width="50" height="50" alt="">
            Financiero
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Novedades -->
        <li>
          <a href="../paginas/novedades.php" class="nav-link text-white">
            <img src="../media/iconos/Novedad.ico" class="img-fluid" style="padding-inline-end: 10px;" width="50" height="50" alt="">
            Novedades
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Administrador Activo -->
        <li>
          <a href="../paginas/systemadministrador.php" class="nav-link text-white active" aria-current="page">
            <img src="../media/iconos/Administrador .ico" class="img-fluid" style="padding-inline-end: 10px;" width="50" height="50" alt="">
            Administrador
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Estudiantes -->
        <li>
          <a href="../datatables/estudiantes.php" class="nav-link text-white ">
            <img src="../media/iconos/Estudiante.ico" class="img-fluid" style="padding-inline-end: 10px;" width="50" height="50" alt="">
            Estudiantes
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="../index.html"><button type="button" class="btn btn-danger" style="background-color: rgb(168, 4, 4);">Salir del sistema</button></a>

      </div>
    </div>
    <!-- END SIDE BARD -->

    <!-- Espacio entre el menú y la página del contenido de gestión -->
    <div class="b-example-divider"></div>

    <div class="container my-4 hijo-3">
      <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
        <img class="me-3 align-items-center" src="../media/logo/logoinstitutoclei.png" alt="" width="52" height="48">
        <div class="lh-1">
          <h1 class="h6 mb-0 text-white lh-1">Instituto CLEI</h1>
          <small>Administrador</small>
        </div>
      </div>

      <!-- Vista de los integrantes del perosnal de la institución -->

      <?php
      require_once '../conexion/conexion.php';                      /*LLama la conexión*/
      $db = new db_conexion();                                      /*Abre la base de datos*/

      $sql = "SELECT *  FROM empleados";
      $query = mysqli_query($db->conectar(), $sql);           /*pasa la query a la variable resultado*/

      $row = mysqli_fetch_array($query);
      ?>
      <div class="container mt-5">
        <div class="row">

          <div class="col-md-3">
            <h1>Ingrese datos</h1>
            <form action="adminsertar.php" method="POST">

              <input type="hidden" class="form-control mb-3" name="id_login" placeholder="id_login">
              <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
              <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
              <input type="text" class="form-control mb-3" name="documento" placeholder="Documento">
              <input type="text" class="form-control mb-3" name="usuario" placeholder="Usuario">
              <input type="text" class="form-control mb-3" name="contrasena" placeholder="Passport">
              <input type="text" class="form-control mb-3" name="cargo" placeholder="Cargo">

              <input type="submit" class="btn btn-primary">
            </form>
          </div>
          <br>
          <div class="col-md-8">
            <table class="table">
              <!-- se asigna el nombre de cabecera de la columna -->
              <thead class="table-success table-dark table-bordered">
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Documento</th>
                  <th>Usuario</th>
                  <th>Contraseña</th>
                  <th>Cargo</th>            
                  <th></th>
                 <th></th>

                </tr>
              </thead>

              <tbody class="table-bordered">
                <?php
                while ($row = mysqli_fetch_array($query)) {
                ?>
                <!-- Vistas de los datos de los empleados -->
                  <tr>
                    <th><?php echo $row['id_login'] ?></th>
                    <th><?php echo $row['nombreempleado_login'] ?></th>
                    <th><?php echo $row['apellidoempleado_login'] ?></th>
                    <th><?php echo $row['documentoempleado_login'] ?></th>
                    <th><?php echo $row['usuario_login'] ?></th>
                    <th><?php echo $row['passport_login'] ?></th>
                    <th><?php echo $row['cargoempleado_login'] ?></th>

                    <!-- Me redirige a el modulo de madificar y por POST lleva el identificador para saer a quien se le dabe realizar el cambio -->
                    <th><a href="admiactualizar.php?id=<?php echo $row['id_login'] ?>" class="btn btn-info">Editar</a></th>
                    <!-- Realiza de inmediata la acción de elimina -->
                    <!-- Se va implementar una alerta, está en proceso -->
                    <th><a href="admieliminar.php?id=<?php echo $row['id_login'] ?>" class="btn btn-danger">Eliminar</a></th>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>

        </div>



  </main>

</body>

</html>