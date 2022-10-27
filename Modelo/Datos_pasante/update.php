
<?php
include('../conexion.php');
$idRegistros = $_REQUEST['id_aprendiz'];
$documento   = $_REQUEST['documento'];
$nombre 	 = $_REQUEST['nombre'];
$telefono 	 = $_REQUEST['telefono'];
$correo 	 = $_REQUEST['correo'];
$direccion 	 = $_REQUEST['direccion'];
$jornada     = $_REQUEST['jornada'];

$update = ("UPDATE `aprendiz` SET `documento`='$documento',`nombre`='$nombre',`telefono`='$telefono',`correo`='$correo',`direccion`='$direccion',`jornada`='$jornada' WHERE id_aprendiz='$idRegistros'");
$result_update = mysqli_query($conn, $update);

echo "<script type='text/javascript'>
        window.location='../../Vista/html/listado_pasante.php';
    </script>";

?>
