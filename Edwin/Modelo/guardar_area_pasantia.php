<?php
    
    include('funciones.php');
    
    $id_senacbc=$_POST['id_senacbc'];
    $nombre=$_POST['nombre'];

    $miconexion=conectar_bd('', 'bd_pasantes');
    $resultado=consulta($miconexion,"INSERT INTO areapasantia (id_senacbc, nombre) VALUES ('{$id_senacbc}' , '{$nombre}')");
    if($resultado) {
        echo '<script language="javascript">';
        echo 'alert("Area de pasantia registrada correctamente");';
        echo 'window.location="registro_area_pasantia.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Error al registrar");';
        echo 'window.location="registro_area_pasantia.php";';
        echo '</script>';
    }
?>

