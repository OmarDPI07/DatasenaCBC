<?php
include('../conexion.php');

$idRegistros = $_REQUEST['id_aprendiz'];

$result=$conn->query("DELETE FROM `aprendiz` WHERE id_aprendiz='$idRegistros'");
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente!");';
	echo 'window.location="../../Vista/html/listado_pasante.php";';
	echo '</script>';
?>