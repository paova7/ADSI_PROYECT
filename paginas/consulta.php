<!DOCTYPE html>
<html lang="es" class="h-100 ">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Inicio</title>

    <!-- Esto es bootstrap -->
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    <script src="../plugins/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Este es mi estilo -->
    <link rel="stylesheet" href="../paginas/styles/mainstyles.css">

    <!-- Fondo del LOGIN -->
    <style>
        body {
            background-image: url('../media/imagenes/fondoprincipal.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center center;
        }
    </style>

</head>

<body background="../media/imagenes/fondoprincipal.jpg" ;>

    <!-- MENÚ -->
    <header>

        <!-- Navbar desplegable al dar click y contenido-->
        <div id="navbarHeader" class="collapse bg-dark ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Acercar de nosotros</h4>
                        <p class="text-muted">Somos una institución que facilita soluciones educativas tanto para personas como para colegios y otras instituciones; nos enfocamos en facilitar procesos educativos y brindar cursos de preparación especializados.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contactanos</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">WhatsApp</a></li>
                            <li><a href="#" class="text-white">Vísitanos en Facebook</a></li>
                            <li><a href="#" class="text-white">Correo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar botones de los modulos de inicio, estidiante e ingreso a personal -->
        <div class="navbar fixed-top navbar-dark bg-dark shadow-sm">
            <div class="container">
                <!-- logo en el navbar -->
                <a href="../index.html" class="navbar-brand d-flex align-items-center">
                    <img src="../media/logo/logoinstitutoclei.png" class="me-2" wsidth="40" height="40">
                    <strong>Instituto CLEI</strong>
                </a>
                <nav class="fw-bold nav nav-masthead nav-pills nav-fill justify-content-center float-md-end">
                    <ul class="nav nav-pills">
                        <!-- Boton de inicio -->
                        <a class="nav-link" style="margin-left: 20px" href="../index.html">Inicio</a>
                        <!-- Boton de Estudiante -->
                        <a class="nav-link active" aria-current="page" style="margin-left: 20px" href="../paginas/consultaestudiante.html">Estudiante</a>
                        <!-- Boton de ingreso al sistema -->
                        <a class="nav-link" style="margin-left: 20px" href="../paginas/empleado.php">Ingreso de personal</a>
                    </ul>
                </nav>
                <!-- Boton del navbar -->
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- CONTENIDO DEL MÓDULO DE CONSULTA ESTUDIANTES-->

<

    <main style="padding-top: 120px;">
<?php


$consultaestudiante = $_GET["documento"];

require_once '../conexion/conexion.php';  /*LLama la conexión*/
$db = new db_conexion();               /*Abre la base de datos*/

$sql = "SELECT * FROM estudiantes
      WHERE documento_estudiante ='$consultaestudiante'";

        $resultado = mysqli_query($db->conectar(), $sql);         /*pasa la query a la variable resultado*/
        while ($registro = mysqli_fetch_array($resultado)) {      /*pasa a vector*/

            $db->db_cerrar();
?>
        </div>
        <br>
            <div class="container p-4 p-md-12 border rounded-4 border bg-light bg-gradient p-2 border-5 text-center" style="padding: 100px;">
                <p class="fs-2 fw-bolder">Bienveniedo <?php echo $registro['nombre_estudiante']; ?></p>
                <p>Podrás visiualizar tu estado en la institución </p>
                <br>
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
                                    <td>NUMERO DE TELEFONO:<?php echo " " . $registro['numerocontacto_estudiante']; ?></td>
                                    <td>ciudad de residencia:<?php echo " " . $registro['ciudad_estudiante']; ?> </td>
                                </tr>
                                <tr>
                                    <td scope="col">Email:<?php echo " " . $registro['email_estudiante']; ?></td>
                                    <td scope="col">Numero del acudiente: <?php echo  " " . $registro['acudiente__estudiante']; ?></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="fs-8 fw-bolder" ;>Datos del curso</p>
                    <div class="bd-example">
                        <table class="table table-sm table-bordered">
                            <tbody>
                                <tr>
                                    <td scope="col"> Curso:<?php echo " " . $registro['curso_estudiante']; ?></td>
                                    <td scope="col">Horario de clases: <?php echo  " " . $registro['horario_estudiante']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="fs-8 fw-bolder" ;>Pagos realizados</p>
                    <div class="bd-example">
                        <table class="table table-sm table-bordered">
                            <tbody>
                                <tr>
                                    <td scope="col"> Fecha del pago:<?php echo " " . $registro['curso_estudiante']; ?></td>
                                    <td scope="col">Horario de clases: <?php echo  " " . $registro['horario_estudiante']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="dropdown">
                        <a href="../paginas/consultaestudiante.php"><button type="button" class="btn btn-danger" style="background-color: rgb(168, 4, 4);">Realizar otra consulta</button></a>

                    </div>
                </div>

                <small class="text-muted"> Año 2022</small>
            </div>

 <?php
        }
    
 ?>           
</body>

</html>