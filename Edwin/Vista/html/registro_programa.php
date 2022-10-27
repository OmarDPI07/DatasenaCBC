<?php include '../Cabecera.php'; 

if($_POST){
	include('../../Modelo/funciones.php');
 
    $nombre=$_POST['nombre_progra'];

    $miconexion=conectar_bd('', 'bd_pasantes');
    $resultado=consulta($miconexion,"INSERT INTO programas (nombre_progra) VALUES ('{$nombre}')");
    mysqli_close($miconexion);
    echo("<script> 
	Swal.fire({
	  position: 'top',
	  icon: 'success',
	  title: 'Programa registrado correctamente',
	  showConfirmButton: false,
	  timer: 1500
	})</script>");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!-- Default Basic Forms Start -->
	<div class="pd-20 card-box mb-50">
					<div class="container">

						<form action="" method="post">
						    <div class="input-group col-sm-12 col-md-4 col-form-label">
							</div>
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-key"></i>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="Nombre del programa" name="nombre_progra" required > 
							</div>
						
							<br>
							<button type="submit" class="btn btn-success">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	
</div>
</body>
</html>





				
<?php include '../pie.php'; ?>