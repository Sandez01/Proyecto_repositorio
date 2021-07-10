<?php
  session_start();

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $_SESSION['usuario']=$usuario;  
    $_SESSION['clave']=$clave;
    
    $conexion = mysqli_connect("localhost", "root", "", "repositorio"); //conexión a la base de datos.
    $consulta = "SELECT * FROM registro_usuario WHERE Usuario = '$usuario' and Password = '$clave'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas>0){
        header('location:../registro/registro.php');
    }
    else{
        echo "error en la autenticación.";
        header('location:../index.html');
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>
<html>
    <head>
        <title>
            
        </title>
       <meta charset="utf-8">
    </head>
    <body>
            <a href="../index.html"> Iniciar sesión nuevamente</a> 
    </body>
</html>


