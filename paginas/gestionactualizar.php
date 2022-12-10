<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <title>Actualizar</title>

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
          <a href="../paginas/gestion.php" class="nav-link text-white active" aria-current="page">
            <img src="../media/iconos/Management.ico" class="img-fluid" style="padding-inline-end: 10px;" width="50" height="50" alt="">
            Gestión - Editar
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
          <a href="../paginas/systemadministrador.php" class="nav-link text-white">
            <img src="../media/iconos/Administrador .ico" class="img-fluid" style="padding-inline-end: 10px;" width="50" height="50" alt="">
            Administrador
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Estudiantes -->
        <li>
          <a href="../paginas/estudiantes.php" class="nav-link text-white ">
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
    <?php
    require_once '../conexion/conexion.php';                      /*LLama la conexión*/
    $db = new db_conexion();     /*Abre la base de datos*/
    $id = $_GET['id'];

    $sql = "SELECT * FROM estudiantes WHERE id_estudiante='$id'";
    $query = mysqli_query($db->conectar(), $sql);           /*pasa la query a la variable resultado*/

    $row = mysqli_fetch_array($query);
    ?>
    <div class="container mt-5">
      <form action="gestionupdate.php" method="POST">

        <input type="hidden" name="id_estudiante" value="<?php echo $row['id_estudiante'] ?>">

        <div class="row align-items-center">          
          <h1 class="display-4 fw-bold lh-2 text-center">Editar datos del estudiante</h1><br>
          </p><br>
          <div class="col">
            <input type="hidden" name="id_estudiante" value="<?php echo $row['id_estudiante'] ?>">
            <td>Número de documento:<input type="text" class="form-control mb-3" name="documento" placeholder="Número de docuemento" value="<?php echo $row['documento_estudiante'] ?>"></td>

            <td>Nombre:<input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre_estudiante'] ?>"></td>
            <td>Apellido:<input type="text" class="form-control mb-3" name="apellido" placeholder="Apellidos" value="<?php echo $row['apellido_estudiante'] ?>"></td>
            <td>Correo electrónico:<input type="text" class="form-control mb-3" name="email" placeholder="Email" value="<?php echo $row['email_estudiante'] ?>"></td>
            <td>Fecha de nacimiento:<input type="text" class="form-control mb-3" name="fecha" placeholder="" value="<?php echo $row['fechadenacimiesto_estudiante'] ?>"></td>
            <td>Numero de teléfono:<input type="text" class="form-control mb-3" name="numero_estudiante" placeholder="Número de telefono" value="<?php echo $row['numerocontacto_estudiante'] ?>"></td>
          </div>
          <div class="col">
            <td>Ciudad de residencia:<input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad de residencia" value="<?php echo $row['ciudad_estudiante']?>"></td>
                                                                                                                            
            <td>Discapacidad:<input type="text" class="form-control mb-3" name="discapacidad" placeholder="¿Tiene alguna discapacidad?" value="<?php echo $row['discapacidad_estudiante']?>"></td>
                                                                          

            <td>Programa en curso:<input type="text" class="form-control mb-3" name="curso" placeholder="Curso" value="<?php echo $row['curso_estudiante']?>" >
            <td>Horario de estudio<input type="text" class="form-control mb-3" name="horario" placeholder="Horario de estudio" value="<?php echo $row['horario_estudiante']?>"></td>
                                                                                                                           
            <td>Número de acudiente<input type="text" class="form-control mb-3" name="acudiente" placeholder="Telefono acudiente" value="<?php echo $row['acudiente__estudiante'] ?>"></td>
          </div>

        </div>

        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
      </form>

    </div>
</body>

</html>