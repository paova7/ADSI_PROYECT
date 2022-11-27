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

  <main >
    <!-- SIDE BARD -->
    <div class=" d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 320px;">
      <a href="../paginas/Inicio_del_sistema.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <img src="../media/logo/Isologoinstitutoclei.png"  height="95">
      </a>
      <hr>

      <!-- Modulos del sistema -->
      <ul class="nav nav-pills flex-column mb-auto" >
        <!-- Modulo de Inicio -->
        <li class="nav-item " width="85" height="85">
          <a href="../paginas/Inicio_del_sistema.html" class="nav-link text-white">
            <img src="../media/iconos/home.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50">
            Inicio
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Gestión Activo -->
        <li>
          <a href="../paginas/gestion.php" class="nav-link text-white active" aria-current="page">
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
    <!-- END SIDE BARD -->

    <!-- Espacio entre el menú y la página del contenido de gestión -->
    <div class="b-example-divider"></div>

    <!-- Formulario de gestión estudiantil para realizar la consulta si el estudiante existe o si no-->
    <div class="container my-5 hijo-2">
      <div class="row p-5 pb-5 pe-lg-5 pe-lg-5 rounded-3 border shadow-lg">
        <div class="text-center">
          <h1 class="display-4 fw-bold lh-2 text-center" >Gestión estudiantil</h1><br>
          <p class="lead text-center" > Ingresa el número de documento del estudiante sin espacios ni puntos
          </p><br>
          <div class="hijo">
            <!-- Formulario de consulta -->
            <form class="row g-6" method="POST" action="gestion.php">
            <div class="col-auto">
              <label for="inputPassword2" class="visually-hidden">Número de consulta</label>
              <input type="text" name="documento" class="form-control" id="floatingPassword" placeholder="Número de documento">
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3" value="Consultar"  name="btn_consultar">Consultar</button>
            </div>
            </form>  
          </div>
          <br>
          <!-- Ventana emergente para conectarla con php -->
          <?php

            $consultaestudiante = "";
            $contadornoexiste = "";
            $contadorvacio = "";

            if (isset($_POST['btn_consultar'])) {

              $contadornoexiste = 0;
              $contadorvacio = 0;
              $consultaestudiante = $_POST["documento"];   /*Pide la cedula por POST*/

              if ($consultaestudiante == "") {             /*si la cedula esta en blanco informa mensaje, sino hace la consulta*/
                // Imprime una alerta cuando el campo está vacio
                $contadorvacio ++;
                echo '
                <br>
                <br>        
                  <div class="container formulario"></div>
                    <center>
                      <div class="alert alert-danger" role="alert">
                      <strong>Error!</strong> El numero de Cedula es Obligatorio.
                      </div>
                    </center>
                  </div>';
              }

              if ($consultaestudiante <> 0) { 
              
              require_once '../conexion/conexion.php';                      /*LLama la conexión*/
              $db = new db_conexion();                                      /*Abre la base de datos*/

              $sql = "SELECT * FROM estudiantes                             /*Realiza la consuta*/ 
                      WHERE documento_estudiante ='$consultaestudiante'";

                $resultado = mysqli_query($db->conectar(), $sql);           /*pasa la query a la variable resultado*/
                while ($registro = mysqli_fetch_array($resultado)) {        /*pasa a vector*/
                $db->db_cerrar();

                  if ($consultaestudiante == $registro['documento_estudiante']) { 
                    $contadornoexiste ++;                                 //Si existe realiza la consulta e informa que puede ver el informe
                    ?>
                      <br>
                      <br>
                    <div class="container p-4 p-md-12 border rounded-4 border bg-light bg-gradient p-2 border-5 text-center" style="padding: 100px;">
                      <div class="bd-example-snippet bd-code-snippet text-start">
                        <p class="fs-8 fw-bolder" ;>Datos personales</p>
                          <div class="bd-example">
                            <table class="table table-sm table-bordered">
                              <tbody>
                                <tr>
                                  <td scope="col">Nombres :<?php echo " " . $registro['nombre_estudiante']; ?></td>
                                  <td scope="col">Apellidos: <?php echo  " " . $registro['apellido_estudiante']; ?></td>
                                </tr>
                                <tr>
                                  <td>Número de documento:<?php echo  " " . $registro['documento_estudiante']; ?></td>
                                  <td>Fecha de nacimiento:<?php echo " " . $registro['fechadenacimiesto_estudiante']; ?></td>
                                </tr>
                                <tr>
                                  <td>Número de celular:<?php echo " " . $registro['numerocontacto_estudiante']; ?></td>
                                  <td>ciudad de residencia:<?php echo " " . $registro['ciudad_estudiante']; ?> </td>
                                </tr>
                                <tr>
                                  <td scope="col">Email:<?php echo " " . $registro['email_estudiante']; ?></td>
                                  <td scope="col">Numero del acudiente: <?php echo  " " . $registro['acudiente__estudiante']; ?></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                    <div class="dropdown">
                        <a href="../paginas/gestion.php"><button type="button" class="btn btn-primary">Limpiar</button></a>
                        <a href="../paginas/gestionactualizar.php"><button type="button" class="btn btn-warning" >Modificar</button></a>
                        <a href="../paginas/gestionborrar.php"><button type="button" class="btn btn-danger" name="btn_eliminar">Eliminar</button></a>
                        
                    </div>
                </div>

                <small class="text-muted"> Año 2022</small>
            </div>
                    
                    <?php 

                  }
                }
              }
            } 
              if ($contadornoexiste == 0 and $contadorvacio == 0) { 
                ?>
                  <div class="alert alert-danger" role="alert"> 
                    <strong>Estudiante no encontrado en el sistema.</strong>
                      <br>
                    <!-- (Si no existe en la base de datos) Boton para crear un nuevo estudiante -->
                    
                  </div>
                  <br>
                  <a href="../paginas/gestioncrear.php"> <button type="button"  class="btn btn-success"> Crear estudiante</button></a> 
                  <br>
                  
                <?php
                }        
                ?>

        </div>
  <?php
?>
      </div>
    </div>



    <div class="b-example-divider"></div>

  </main>
    
</body>

</html>
