<html DOCTYPE>
<head>
    <meta charset="UTF-8"/>
    <title>registro</title>
    <link rel=StyleSheet href="../css/registro.css">
  
  <style type="text/css">
    button{
    text-decoration: none;
    padding: 5px;
    font-weight: 4  00;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #38ef7d;
  }
</style>   
</head>
<body>

<h1>Registro.</h1>
    <form action ="../registro/forumulario.php" method="post">
        
        <input name="NombreCompleto" type="text" placeholder="Nombre Completo" required>
        
        <input name="Usuario" type="text" placeholder="Usuario" required>
        
        <input name="Password" type="password" placeholder="Contraseña" required>
        
        <input name="Carrera" type="text" placeholder="Carrera" required>
     
        <input name="Cuatrimestre" type="text" placeholder="Cuatrimestre" required>
        
        <button type="submit" value= "registrar" href="../index.html" class="btn btn-success">Registrarte</button>
    </form>

</body>

</html>

