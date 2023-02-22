<?php

  // Datos para conectar a la base de datos.
  $serverName = "localhost";
  $userName = "id19731200_bigtechmx";
  $passwordBaseDeDatos = "Bigtechshop1@";
  $nombreBaseDeDatos = "id19731200_bigtech";

  //CONECTAR A LA BASE DE DATOS
  $conn = mysqli_connect($serverName, $userName, $passwordBaseDeDatos, $nombreBaseDeDatos)
  	or die("CONEXIÓN FALLIDA");


//CONSULTA LOS DATOS A LA TABLA USUARIOS PARA INGRESAR
$datos = mysqli_query( $conn, "SELECT Usuario, Contraseña FROM EMPLEADOS")
	or die ( "Problemas con la consulta SQL" );

//Toma los datos divididos del arreglo de datos
while( $resultado = mysqli_fetch_array($datos) )
{
    echo "Usuario:". $resultado['Usuario'] ."<br>";
    echo "Contraseña:". $resultado['Contraseña'] ."<br>";

    $user = $resultado['Usuario'];
    $psw = $resultado['Contraseña']
}

if($user = )
  {
    // Guardo en la sesión el usuario.
    $_SESSION['Usuario'] = $resultado['Usuario'];
     
    // Redirecciono al usuario a la página principal del sitio.
    header('Location: principal.html', true, 301);
    exit(); 
  }
  else
  {
    echo 'El usuario o constraseña es incorrecto, <a href="login.html">Vuelva a intenarlo</a>.<br/>';
  }

mysqli_close( $conn );

?>