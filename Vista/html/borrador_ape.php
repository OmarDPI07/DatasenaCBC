<?php include 'Cabecera.php'; 

include('../../Modelo/conexion.php');
$id=(isset($_POST['id_aprendiz']))?$_POST['id_aprendiz']:"";
$documento=(isset($_POST['documento']))?$_POST['documento']:"";
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
$telefono=(isset($_POST['telefono']))?$_POST['telefono']:"";
$correo=(isset($_POST['correo']))?$_POST['correo']:"";
$direccion=(isset($_POST['direccion']))?$_POST['direccion']:"";
$jorna=(isset($_POST['jornada']))?$_POST['jornada']:"";
$ambiente=(isset($_POST['id_ambiente']))?$_POST['id_ambiente']:"";
$ficha=(isset($_POST['id_fichas']))?$_POST['id_fichas']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

switch ($accion) {
	case 'agregar':
	  
	
		$result = $conn->query("INSERT INTO `aprendiz`(`id_aprendiz`, `documento`, `nombre`, `telefono`, `correo`, `direccion`, `jornada`, `id_ambiente`, `id_fichas`) VALUES ('$id','$documento','$nombre', '$telefono', '$correo','$direccion','$jorna','$ambiente','$ficha')");
		echo("<script> 
	Swal.fire({
	  position: 'top',
	  icon: 'success',
	  title: 'Aprendiz registrado correctamente',
	  showConfirmButton: false,
	  timer: 1500
	})</script>");
		
	break;

	case 'modificar':

	
	break;

	case 'Borrar':

			
		
					
	break;

	case 'eliminar':
		header("location:producto.php");
		
	break;

	case 'seleccionar':
		
	   
		
	break;

			
	$result = ("SELECT * FROM aprendiz");

 


}
    

?>

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
								<input type="number" class="form-control" placeholder="Identificacion del pasante" name="documento" required > 
							</div>
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="flaticon-user"></i>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="Nombres del pasante" name="nombre" required >
							</div>
				
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-phone"></i>
									</span>
								</div>
								<input type="number" class="form-control" placeholder="Numero telefonico" name="telefono" required >
							</div>
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-envelope"></i>
									</span>
								</div>
								<input type="email" class="form-control" placeholder="Correo institucional" name="correo" required >
							</div>
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-location-pin"></i>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="Direccion" name="direccion" required>
							</div>
                            <div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-location-pin"></i>
									</span>
								</div>
								<select class="form-control" name="jornada">
                                    <option>Mañana</option>
                                    <option>Tarde</option>
                                    <option>Mixta</option>
                                </select>
							</div>
                            <div class="input-group col-sm-12 col-md-4 col-form-label">
                                <div class="input-group-prepend">
                                     <span class="input-group-text ">
                                     <i class="icon-location-pin"></i>
                                     </span>
                                </div>
                                <?php
                               	
								
								include('../../Modelo/funciones.php');
                                $miconexion=conectar_bd('','bd_pasantes');
                                $resultado=consulta($miconexion,"SELECT * FROM `ambiente_aprendizaje`");
                                ?>
                                <select  class="form-control" name="id_ambiente">
                                <?php
                                while($fila=$resultado->fetch_object())
                
                                 {
                                ?>
                                
                                <option  value="<?php echo $fila->id_ambiente ?>"><?php echo $fila->nombre_ambiente ?></option >
                                <?php
                                 }
                                ?>
                               </select>
                            </div>
                            <div class="input-group col-sm-12 col-md-4 col-form-label">
                                <div class="input-group-prepend">
                                     <span class="input-group-text ">
                                     <i class="icon-location-pin"></i>
                                     </span>
                                </div>
                                <?php
								
                                $miconexion=conectar_bd('','bd_pasantes');
                                $resultado=consulta($miconexion,"SELECT * FROM `fichas`");
                                ?>
                                <select  class="form-control" name="id_fichas" >
                                <?php
                                while($fila=$resultado->fetch_object())
                
                                 {
                                ?>
                                 
                                <option  value="<?php echo $fila->id_fichas?>"><?php echo $fila->numero_ficha ?></option  >
                                <?php
                                 }
                                ?>
                               </select>
                            </div>
							<br>
							<button type="submit" name="accion" value="agregar" class="btn btn-success">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	
</div>
<?php include 'pie.php'; ?>