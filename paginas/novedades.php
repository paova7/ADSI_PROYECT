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
          <a href="../paginas/Inicio_del_sistema.html" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none " >
              <img src="../media/logo/Isologoinstitutoclei.png"  height="95">
          </a>
          <hr>
    
          <!-- Modulos del sistema -->
          <ul class="nav nav-pills flex-column mb-auto" >
            <!-- Modulo de Inicio -->
            <li class="nav-item " width="85" height="85">
              <a href="../paginas/Inicio_del_sistema.html" class="nav-link text-white">
                <img src="../media/iconos/home.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50"  alt="">
                Inicio
              </a>
            </li>
            <div class="b-divider"></div>
    
            <!-- Modulo de Gestión -->
            <li>
              <a href="../paginas/gestion.php" class="nav-link text-white">
                <img src="../media/iconos/Management.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50"  alt="">
                Gestión
              </a>
            </li>
            <div class="b-divider"></div>
    
            <!-- Modulo de Financiero -->
            <li>
              <a href="../paginas/financiero.php" class="nav-link text-white">
                <img src="../media/iconos/Financiero.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50"  alt="">
                Financiero
              </a>
            </li>
            <div class="b-divider"></div>
    
            <!-- Modulo de Novedades Activo-->
            <li>
              <a href="../paginas/novedades.php" class="nav-link text-white active" aria-current="page">
                <img src="../media/iconos/Novedad.ico"class="img-fluid" style="padding-inline-end: 10px;" width="50" height="50" alt="">
                Novedades
              </a>
            </li>
            <div class="b-divider"></div>
    
            <!-- Modulo de Administrador -->
            <li>
              <a href="../paginas/systemadministrador.php" class="nav-link text-white">
                <img src="../media/iconos/Administrador .ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50"  alt="">
                Administrador
              </a>
            </li>
            <div class="b-divider"></div>
    
            <!-- Modulo de Estudiantes -->
            <li>
              <a href="../datatables/estudiantes.php" class="nav-link text-white">
                <img src="../media/iconos/Estudiante.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50"  alt="">
                Estudiantes
              </a>
            </li>
          </ul>
          <hr>
          <!-- Direcciona al index -->
          <div class="dropdown">
            <a href="../index.html"><button type="button" class="btn btn-danger" style="background-color: rgb(168, 4, 4);">Salir del sistema</button></a>
            
          </div>
        </div>    
      <!-- END SIDE BARD -->

      <!-- Espacio entre el menú y la página del contenido de gestión -->
      <div class="b-example-divider"></div>
      
      <!-- CONTENIDO DE NOVEDADES -->
      <div class="container my-4 hijo-2">
        <div class="row p-5 pb-5 pe-lg-5 pt-lg-5  rounded-3 border shadow-lg">
          <div>
            <h1 class="display-5 fw-bold lh-2 text-center" > CREAR NOVEDAD  </h1>
            <br>
            <p class="lead"></p><br>
              <!-- Formulario para escribir el documnto de quien se creará el anexo -->
            <form class="row" action="novedades.php" method="POST">
              <div class="col-6 ">
                  <label for="inputAddress" class="form-label">Número de documento:</label>
                  <input type="text" class="form-control " id="inputAddress" placeholder="Escriba número de documento" name="documento_form">
                  <div id="emailHelp" class="form-text">Escribir número de documento sin puntos ni espacios</div>
              </div>
              <div class="col-md-6">
                  <label for="inputState" class="form-label">Tipo de novedad</label>
                  <!-- Lista desplegable -->
                  <select id="inputState" class="form-select" name="novedad_form">
                    <option selected>Tipo de novedad</option>
                    <option value="Acuerdo de pago">Acuerdo de pago</option>
                    <option value="Retiro">Retiro</option>
                    <option value="Suspención">Suspención</option>
                    <option value="Reactivación">Reactivación</option>
                    <option value="Cambio de horario">Cambio de horario</option>
                    <option value="Certificado">Certificado</option>
                  </select>
              </div>
              
              <div class="col-md-6 mb-3">
              
                <label for="fecha de nacimiento" class="form-label">Fecha de anexo</label>
                <input type="date" class="form-control" name="fecha_form">
              </div>
              <div class="col-md-6">
                  <label for="inputState" class="form-label">Empleado encargado</label>
                  <!-- Lista desplegable -->
                  <select id="inputState" class="form-select" name="empleado_form">
                  <option value="Julian Paez">Julian Paez</option>
                    <option value="Laura Vanegas">Laura Vanegas</option>
                    <option value="Sofia Torres">Sofia Torres</option>
                    <option value="Mateo López">Mateo López</option>
                  </select>
              </div>
              <div class="mb-3">

                <label for="exampleFormControlTextarea" class="form-label">Descripción del anexo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="anexo_form"></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-lg" name="btn_anexo">Subir anexo</button>
            </div>
            <br>
            <!-- Ventana emergente que se conectará con PHP para que avise cuando el anexo se suba -->
            
            </form>
            
            <br>
            <!-- Area para el texto que describre el anexo -->


<?php

$contadorvacio  = "";                                  /*Variables de control para validar si está vacio y si existe la consulta*/
$contadorexiste = "";

if (isset($_POST['btn_anexo'])) {

$contadorvacio  = 0;                              /*Inicializa las variables en 0 para trabajar*/
$contadorexiste = 0;

$documento = $_POST["documento_form"];            /*pide los datos por POST desde el formulario*/
$novedad = $_POST["novedad_form"];
$fecha = $_POST["fecha_form"];
$anexo = $_POST["anexo_form"];
$empleado = $_POST["empleado_form"];

if ( $documento   == "" ||
     $novedad     == "" ||   
     $fecha       == "" ||
     $anexo       == "" ||     
     $empleado    == "" ) {  
                                         /*si está alguno de los campos vacios*/
  echo "
  <div class='container'>
    <center>
      <div class='alert alert-danger' role='alert'>
      <strong>Error!</strong> Los Campos con * son Obligatorios.
      </div>
    </center>
  </div>";

  $contadorvacio ++;                          /*Este acumulador se marca cuando el campo está vacio*/
} 
  else {

    require_once '../conexion/conexion.php';                    /*LLama la conexión*/

    $db = new db_conexion();                                    /*Abre la base de datos*/
    $sql = "SELECT documento_estudiante FROM estudiantes        /*Realiza la consuta*/ 
            WHERE documento_estudiante ='$documento'";

    $resultado = mysqli_query($db->conectar(), $sql);           /*pasa la query a la variable resultado*/
    while ($registro = mysqli_fetch_array($resultado)) {        /*pasa a vector*/
    $db->db_cerrar();

    $contadorexiste ++;                       /*Este acumulador se marca cuando el número existe en la DB*/
  
    }
  }

if ($contadorexiste == 1) {                                     /*Este IF imprime la alerta si existía y CREA LA NOVEDAD*/
  require_once '../conexion/conexion.php';                      /*LLama la conexión*/ 

  $db = new db_conexion();                                      /*Abre la base de datos*/
  mysqli_query($db->conectar(), "INSERT INTO novedades
                            (documentoestudiante_novedades,
                            anexo_novedades,
                            fecha_novedades,
                            tipo_novedades,
                            empleado_novedades) 
                            VALUES 
                            ('$documento',
                            '$anexo',
                            '$fecha',
                            '$novedad',
                            '$empleado')");

  $db->db_cerrar();
  echo "<div class='container formulario'>
    <center>
    <div class='alert alert-success' role='alert'>
    <strong>Completado!</strong> Ingreso Con exito.
    </div>
    </center>";
}

if ($contadorvacio == 0 and $contadorexiste == 0) { 
  ?>
  <div align="center" class="alert alert-danger" role="alert"> 
    <strong>Estudiante no encontrado en el sistema.</strong>
  <!-- (Si no existe en la base de datos) Boton para crear un nuevo estudiante -->
  </div>
  <a href="../paginas/gestioncrear.php"> <button type="button"  class="btn btn-success mx-auto" > Crear estudiante</button></a> 
  <br>
  
<?php
} 
}
?>
            


          </div>
        </div>
      </div>     
  </main>
    
</body>

</html>
