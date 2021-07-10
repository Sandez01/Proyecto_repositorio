<?php

include '../conexionDB/conexionDB.php'; //incluimos la conexión a la base de datos. 

// Creamos variables para almacenar los datos que son insertados por el usuario y así mismo estas variables
// se usarán para los datos sean enviados a la BD.
    $nombre = $_POST['NombreCompleto'];
    $usuario = $_POST['Usuario'];
    $contra = $_POST['Password'];
    $carrera = $_POST['Carrera'];
    $cuatri = $_POST['Cuatrimestre'];

    //insertar datos del usuario a la base de datos.   
    $insertar = "INSERT INTO registro_usuario(NombreCompleto, Usuario, Password, Carrera, Cuatrimestre) VALUES
    ('$nombre', '$usuario', '$contra', '$carrera', '$cuatri')";
    //ejecutar consulta
    $resultado = mysqli_query($conexion, $insertar);
/*
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM registro_usuario WHERE Usuario = '$usuario'");
    if (mysqli_num_rows($verificar_usuario) > 0){
        echo 'Este usuario ya esta registrado';
        exit;
    };
*/


    if (!$resultado){
        echo 'Error al insertar los datos.';
    }
    else{
        echo 'Te haz registrado correctamente.<br>';
        echo '<br>';
        echo 'Iniciar Sesión';
        header('location:../index.html');
    }
    //cerrar conexión
    mysqli_close($conexion);
?>