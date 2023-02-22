<?php

  // Datos para conectar a la base de datos.
  $serverName = "localhost";
  $userName = "id19731200_bigtechmx";
  $passwordBaseDeDatos = "H4)GX#xyjpt)O!L1";
  $nombreBaseDeDatos = "id19731200_bigtech";

  //CONECTAR A LA BASE DE DATOS
  $conn = mysqli_connect($serverName, $userName, $passwordBaseDeDatos, $nombreBaseDeDatos)
  	or die("CONEXIÓN FALLIDA");

	//OBTIENE DATOS DEL FORMULARIO REGISTRO
$nombre = $_POST['nombre'];
$ApPaterno = $_POST['ApPaterno'];
$ApMaterno = $_POST['ApMaterno'];
$sucursal = $_POST['sucursal'];
$usuario = $_POST['usuario'];
$txtPsw = $_POST['contraseña'];
$txtPswConfim = $_POST['contraseña2'];


//MUESTRA LOS DATOS A LA TABLA USUARIOS
mysqli_query( $conn, "SELECT Usuario, Contraseña FROM USUARIOS")
	or die ("Problemas con la consulta SQL");
mysqli_close($conn);

?>