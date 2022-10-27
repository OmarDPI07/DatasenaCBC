
<?php
  
    include('funciones.php');
    include('Cabecera.php');
   
    $nombre=$_POST['nombre_progra'];

    $miconexion=conectar_bd('', 'bd_pasantes');
    $resultado=consulta($miconexion,"INSERT INTO programas (nombre_progra) VALUES ('{$nombre}')");
    mysqli_close($miconexion);
    echo("<script>Swal.fire('Any fool can use a computer')</script>");

   /* if($resultado) {
        echo '<script language="javascript">';
        echo 'alert("Proggrama creado correctamete");';
        echo 'window.location="registro_programa.php";';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Error al registrar");';
        echo 'window.location="registro_programa.php";';
        echo '</script>';
          echo'hola mundo';
    }*/
?>
