<?php
include("config.php");
session_start();

$usua_nomuser = $_POST['nickname'];
$usua_contra = $_POST['contrasena'];
 
$usua_nomuser = $mysqli->real_escape_string($usua_nomuser);
 
$query = "SELECT nickname, contrasena FROM usuario WHERE nickname = '$usua_nomuser' AND contrasena='$usua_contra';";
$result = $mysqli->query($query);
 
if($result->num_rows == 1) 
{
	$_SESSION['usuarios'] = $usua_nomuser;
	echo '<script language="javascript">';
	echo 'alert("Bienvenido Admin");';
	echo 'window.location="../Vista/html/menu.php";';
	echo '</script>';
}
else{ 
	echo '<script language="javascript">';
	echo 'alert("Error al ingresar");';
	echo 'window.location="index.php";';
	echo '</script>';
}
?>