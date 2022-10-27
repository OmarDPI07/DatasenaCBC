<?php
    
    include('funciones.php');
    
    $idsena=$_POST['id_senacbc'];
    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $direccion=$_POST['direccion'];
    

    $miconexion=conectar_bd('', 'bd_pasantes');
    $resultado=consulta($miconexion,"INSERT INTO instructor(id_senacbc, documento,nombre,telefono,correo,direccion) VALUES ('{$idsena}','{$documento}','{$nombre}','{$telefono}','{$correo}','{$direccion}')");
    if($resultado) {
        echo '<script language="javascript">';
        echo 'alert("Instructor registrado correctamente");';
        echo 'window.location="registro_instructor.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Error al registrar");';
        echo 'window.location="registro_instructor.php";';
        echo '</script>';
    }
?>

