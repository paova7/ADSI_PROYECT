<?php

require_once '../conexion/conexion.php';                      /*LLama la conexión*/
$db = new db_conexion();                                      /*Abre la base de datos*/

$id_login=$_GET['id'];

$sql="DELETE FROM empleados  WHERE id_login='$id_login'";
$query = mysqli_query($db->conectar(), $sql);           /*pasa la query a la variable resultado*/

    if($query){
        Header("Location: administrador.php");
    }
?>
