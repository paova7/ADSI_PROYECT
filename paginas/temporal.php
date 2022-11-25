<form  action="temporal.php" method="post" enctype="multipart/form-data">
        <label for="fileTest">Selecciona una imagen/archivo:</label>
        <input id="fileTest" name="fileTest" type="file">
        <button type="submit" >Guardar</button>
    </form>



<?php

$file = $_FILES["fileTest"]["name"]; //Nombre de nuestro archivo

$validator = 1; //Variable validadora

$file_type = strtolower(pathinfo($file,PATHINFO_EXTENSION)); //Extensión de nuestro archivo

$url_temp = $_FILES["fileTest"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

//dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
$url_insert = dirname(__FILE__) . "/files"; //Carpeta donde subiremos nuestros archivos

//Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
$url_target = str_replace('\\', '/', $url_insert) . '/' . $file;

//Si la carpeta no existe, la creamos
if (!file_exists($url_insert)) {
    mkdir($url_insert, 0777, true);
};

//Validamos el tamaño del archivo
$file_size = $_FILES["fileTest"]["size"];
if ( $file_size > 1000000) {
  echo "El archivo es muy pesado";
  $validator = 0;
}

//Validamos la extensión del archivo
if($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png" && $file_type != "gif" ) {
  echo "Solo se permiten imágenes tipo JPG, JPEG, PNG & GIF";
  $validator = 0;
}

//movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
if($validator == 1){
    if (move_uploaded_file($url_temp, $url_target)) {
        echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
    } else {
        echo "Ha habido un error al cargar tu archivo.";
    }
}else{
    echo "Error: el archivo no se ha cargado";
}
?>



iv class="col-md-6 mb-3">
                  <label for="inputEmail4" class="form-label">Monto pagado</label>
                  <input type="text" name="monto_pagado_form" class="form-control" id="inputEmail4" placeholder="Valor en números">
                  </div>

                  <div class="col-md-6 mb-3">
                  <label for="inputEmail4" class="form-label">Fecha de cuando el pago fue realizado</label>
                  <input type="date" name="fecha_pago_form" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="col-md-6 mb-3">
                  <label for="inputEmail4" class="form-label">Referencia del pago</label>
                  <input type="text" name="referencia_form" class="form-control" id="inputEmail4" placeholder="Valor en números">
                  </div>

                  <div class="col-md-6 mb-3">
                  <label for="inputState" class="form-label">Metodo de pago</label>
                  <select name="metodo_form" id="inputState" class="form-select">
                    <option selected>Selecione uno</option>
                    <option value="Bancolombia">Bancolombia</option>
                    <option value="Nequi">Nequi</option>
                    <option value="Payu">Payu</option>
                    <option value="Efectivo">Efectivo</option>
                  </select>
                  </div>

                  <div class="col-md-6 mb-3">
                  <label for="formFile" class="form-label">Subir comprobante de pago</label>
                  <input class="form-control" type="file" id="formFile">
                  </div>

                  <div class="form-group col-md-4">
                  <label for="fechadenacimiento" class="form-label">Persona a cargo de subir el pago</label>
                  <select name="empleado_form" class="form-select" aria-label="Default select example">
                    <option selected>Seleccione su nombre</option>
                    <option value="Julian Paez">Julian Paez</option>
                    <option value="Laura Vanegas">Laura Vanegas</option>
                    <option value="Sofia Torres">Sofia Torres</option>
                    <option value="Mateo López">Mateo López</option>
                  </select>
                  </div>
                  <br>    
                  <div class="col-12">
                      <button type="submit" name="btn_pago" class="btn btn-primary btn-lg">Subir pago</button>
                  </div>
                 </div>
               </div>
             </div>
            </form> 



            <?php
      #if (isset($_POST['btn_pago'])) {

      #documento();

      #$consultaestudiante;            /*pide los datos por POST desde el formulario*/
      #echo $consultaestudiante;
      #}
      $contadorvacio  = "";                                  /*Variables de control para validar si está vacio y si existe la consulta*/
      $contadorexiste = "";

     if (isset($_POST['btn_pago'])) {

      $contadorvacio  = 0;                              /*Inicializa las variables en 0 para trabajar*/
      $contadorexiste = 0;



      $documento = $_POST["documento_form"]; 
      $montoPagado = $_POST["monto_pagado_form"];
      $fechaPago = $_POST["fecha_pago_form"];
      $referenciaPago = $_POST["referencia_form"];
      $metodoPago = $_POST["metodo_form"];
      $empleado = $_POST["empleado_form"];
     # $comprobante = $_POST["formFile"];


      if ($documento    == "" ||
          $montoPagado        == "" ||
          $fechaPago        == "" ||
          $referenciaPago        == "" ||
          $metodoPago       == "" ||
          $empleado      == ""
          #$comprobante == ""
          ) {                                     /*si está alguno de los campos vacios*/
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
          $sql = "SELECT * FROM financiero       /*Realiza la consuta*/ 
                  WHERE documentoestudiante_financiero ='$documento'";

          $resultado = mysqli_query($db->conectar(), $sql);           /*pasa la query a la variable resultado*/
          while ($registro = mysqli_fetch_array($resultado)) {        /*pasa a vector*/
          $db->db_cerrar();

          $contadorexiste ++;                       /*Este acumulador se marca cuando el número existe en la DB*/
          
          }
        }


      if ($contadorvacio == 0 or $contadorexiste == 0) {             /*Si no se acumuló ninguna de las variables de control, se debe hacer el Insert a la DB */ 

        require_once '../conexion/conexion.php';                      /*LLama la conexión*/ 

        $db = new db_conexion();                                      /*Abre la base de datos*/
        mysqli_query($db->conectar(), "INSERT INTO financiero
                                  (documentoestudiante_financiero,
                                  fechadepago_financiero,
                                  valorcancelado_financiero,
                                  metododepago_financiero,
                                  referenciadepago_financiero,
                                  empleado_financiero,
                                  -- comprobante_financiero
                                  ) 
                                  VALUES 
                                  ('$documento',
                                  '$montoPagado',
                                  '$fechaPago',
                                  '$referenciaPago ',
                                  '$metodoPago',
                                  '$empleado')");
          
                                  $db->db_cerrar();
        echo "<div class='container formulario'>
          <center>
          <div class='alert alert-success' role='alert'>
          <strong>Completado!</strong> Ingreso Con exito.
          </div>
          </center>";
      };
    }
  
  
  ?>

  