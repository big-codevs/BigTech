<?php
  session_start();
  
   // Datos para conectar a la base de datos.
  $serverName = "localhost";
  $userName = "id19731200_bigtechmx";
  $passwordBaseDeDatos = "Bigtechshop1@";
  $nombreBaseDeDatos = "id19731200_bigtech";

  //CONECTAR A LA BASE DE DATOS Y VALIDAR CONEXION
  $conn = mysqli_connect($serverName, $userName, $passwordBaseDeDatos, $nombreBaseDeDatos)
  	or die("CONEXIÓN FALLIDA");

  // Obtengo los datos cargados en el formulario de login.
  $user = $_POST['usuario'];
  $psw = $_POST['contraseña'];
   
   
  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf("SELECT Usuario, Contraseña FROM EMPLEADOS WHERE Usuario = '%s' AND Contraseña = '%s'", mysql_real_escape_string($user), mysql_real_escape_string($psw));
  $resultado = $conn->query($sql);
   
  // Verificando si el usuario existe en la base de datos.
  if($resultado)
  {
    // Guardo en la sesión el usuario.
    $_SESSION['usuario'] = $user;
     
    // Redirecciono al usuario a la página principal del sitio.
    header('Location: principal.html', true, 301);
    exit(); 
  }
  else
  {
    echo 'El usuario o constraseña es incorrecto, <a href="loginx.html">Vuelva a intenarlo</a>.<br/>';
  }
 
?>
