<?php
//    $mysqli = new mysqli("localhost", "root","", "repositorio");
 //   if ($mysqli->connect_errno) {
  //      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
   // }
   // echo "Conexión exitosa :)";
   $conexion = mysqli_connect("localhost", "root","", "repositorio");
 /*  if (!$conexion){
       echo 'error al conectarse en la base de datos.';
   }
   else{
       echo 'Conectado correctamente a la base de datos.';
   }
   */
?>