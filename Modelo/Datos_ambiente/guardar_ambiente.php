<?php
    
    include('funciones.php');
    
    $id_area=$_POST['id_area'];
    $fecha_registro=$_POST['fecha_registro'];
    $nombre_ambiente=$_POST['nombre_ambiente'];
    $capacidad=$_POST['capacidad'];
    $descripcion=$_POST['descripcion'];
    

    $miconexion=conectar_bd('', 'bd_pasantes');
    $resultado=consulta($miconexion,"INSERT INTO ambiente_aprendizaje (id_area, fecha_registro,nombre_ambiente,capacidad,descripcion) VALUES ('{$id_area}' , '{$fecha_registro}', '{$nombre_ambiente}', '{$capacidad}', '{$descripcion}')");
    if($resultado) {
        echo '<script language="javascript">';
        echo 'alert("Ambiente registrado correctamente");';
        echo 'window.location="registro_ambiente.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Error al registrar");';
        echo 'window.location="registro_ambiente.php";';
        echo '</script>';
    }
?>

