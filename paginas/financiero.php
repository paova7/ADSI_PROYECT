<!DOCTYPE html>
<html lang="es ">
<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Inicio</title>

  <!-- Esto es bootstrap -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  <script src="../plugins/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Este es mi estilo -->
  <link rel="stylesheet" href="../paginas/styles/system.css">
  

</head>

<body>

  <main>
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
            <img src="../media/iconos/home.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50"  >
            Inicio
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Gestión -->
        <li>
          <a href="../paginas/gestion.php" class="nav-link text-white">
            <img src="../media/iconos/Management.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50"  >
            Gestión
          </a>
        </li>
        <div class="b-divider"></div>

        <!-- Modulo de Financiero Activo-->
        <li>
          <a href="../paginas/financiero.php" class="nav-link text-white active" aria-current="page">
            <img src="../media/iconos/Financiero.ico"class="img-fluid" style="padding-inline-end: 10px;"  width="50" height="50"  >
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
          <a href="../paginas/estudiantes.php" class="nav-link text-white">
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

    
    <!-- CONTENIDO DEL MODULO FINANCIERO -->
    <div class="container my-5 hijo">
      <div class="row p-5 pb-5 pe-lg-5 pt-lg-5  rounded-3 border shadow-lg">  
        <h1 class="display-5 fw-bold lh-2 text-center" > ANEXO DE PAGOS  </h1><br>
        <p class="lead text-center"></p><br>
        <div>
          <!-- Formulario para subir un pago -->
          <form class="row g-3">
            <div class="col-8 ">
                <label for="inputAddress" class="form-label">Número de documento:</label>
                <input type="text" class="form-control " id="inputAddress" placeholder="Escriba número de documento">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Monto pagado</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="Valor en números">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Fecha de cuando el pago fue realizado</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Referencia del pago</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Valor en números">
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Metodo de pago</label>
              <!-- Lista desplegable -->
              <select id="inputState" class="form-select">
                <option selected>Selecione uno</option>
                <option>Bancolombia</option>
                <option>Nequi</option>
                <option>Payu</option>
                <option>Efectivo</option>
              </select>
            </div>
            <div class=" mb-3 col-md-6 ">
              <label for="fecha de nacimiento" class="form-label">Tipo de pago</label>
                <select class="form-select" aria-label="Default select example">
                  <!-- Lista desplegable -->
                  <option selected>Seleccione su nombre</option>
                  <option value="1">Pago de contado</option>
                  <option value="Cuota mensual">Mensual</option>
                  <option value="Cuota quincenal">Quincenal</option>
                  <option value="2">Certificado</option>
                  <option value="1">Cambio de horario</option>
                  <option value="2">Graduación</option>
                </select>
              </div>
              <div class="mb-3 col-md-6">
                  <label for="formFile" class="form-label">Subir comprobante de pago</label>
                  <input class="form-control" type="file" id="formFile">
              </div>
              <div class=" mb-3 col-md-10  ">
                <label for="fechadenacimiento" class="form-label">Persona a cargo de subir el pago</label>
                  <select class="form-select" aria-label="Default select example">
                    <!-- Lista desplegable -->
                    <option selected>Seleccione su nombre</option>
                    <option value="1">Julian Paez</option>
                    <option value="2">Laura Vanegas</option>
                    <option value="1">Sofia Torres</option>
                    <option value="2">Mateo López</option>
                  </select>
              </div>
              <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-lg">Subir pago</button>
              </div>
           </form>    
        </div>      
      </div>     
    </div>

    <!-- Espacio entre el menú y la página del contenido de gestión -->
    <div class="b-example-divider"></div>

  </main>

</body>
</html>
