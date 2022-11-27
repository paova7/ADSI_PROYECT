<?php

session_start();

session_destroy();

header("location: ../empleado.php");
exit (); 
?>
