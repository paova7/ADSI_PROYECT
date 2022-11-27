#<?php
#session_start();

#$db = new db_conexion();                                      /*Abre la base de datos*/


#$usuario = $_POST['usuario'];
#$pass = $_POST['contrasena'];
#$q = "SELECT COUNT(*) AS contar FROM empleados WHERE usuario = '$usuario' and contrasena = '$pass'";

#$consulta = mysqli_query($db->conectar(), $q);           /*pasa la query a la variable resultado*/

#$array = mysqli_fetch_array($consulta);

#if ($array['contar']>0){
  # $SESSION['usarname'] = $usuario;
   # header("location: ../empleado.php");
#}else{
    #echo "DATOS MAL";
#}

?>