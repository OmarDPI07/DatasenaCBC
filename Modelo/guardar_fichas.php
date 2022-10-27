<?php
    
    include('funciones.php');
    
    $nombre=$_POST['numero_ficha'];
    $programa=$_POST['id_programa'];

    $miconexion=conectar_bd('', 'bd_pasantes');
    $resultado=consulta($miconexion,"INSERT INTO fichas (numero_ficha,id_programa) VALUES ('{$nombre}','{$programa}')");
    if($resultado) {
        echo '<script language="javascript">';
        echo 'alert("Ficha registrada correctamente");';
        echo 'window.location="registro_fichas.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Error al registrar");';
        echo 'window.location="registro_fichas.php";';
        echo '</script>';
    }
?>
    
