<?php include 'cabecera.php';
if($_POST){
	
	
	$idsena=$_POST['id_senacbc'];
    $documento=$_POST['documento'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $direccion=$_POST['direccion'];
    

    $miconexion=conectar_bd('', 'bd_pasantes');
    $resultado=consulta($miconexion,"INSERT INTO instructor(id_senacbc, documento,nombre,telefono,correo,direccion) VALUES ('{$idsena}','{$documento}','{$nombre}','{$telefono}','{$correo}','{$direccion}')");
   
    mysqli_close($miconexion);
    echo("<script> 
	Swal.fire({
	  position: 'top',
	  icon: 'success',
	  title: 'Instructor registrado correctamente',
	  showConfirmButton: false,
	  timer: 1500
	})</script>");
}
?>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-50">
					<div class="container">

						<form action="" method="post">
						<div class="input-group col-sm-12 col-md-4 col-form-label">
						<div class="input-group-prepend">
							<span class="input-group-text ">
							<i class="icon-home"></i>
							</span>
						</div>
							<?php
							include('../../Modelo/funciones.php');
							$miconexion=conectar_bd('','bd_pasantes');
							$resultado=consulta($miconexion,"SELECT * FROM `senacbc`");
							?>
							<select class="form-control" name="id_senacbc" required>
							<?php
							while($fila=$resultado->fetch_object())
							{
								?>
							<option >Escoge el centro de formacion</option>	
							<option  value="<?php echo $fila->id_senacbc  ?>"><?php echo $fila->nombrec ?></option>	
								<?php
							}
							
							?>
							</div>
							</select>
							</div>
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-key"></i>
									</span>
								</div>
								<input type="number" class="form-control" placeholder="Identificacion del instructor" name="documento" required > 
							</div>
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="flaticon-user"></i>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="Nombres del instructor" name="nombre" required >
							</div>
				
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-phone"></i>
									</span>
								</div>
								<input type="number" class="form-control" placeholder="Telefono del instructor" name="telefono" required >
							</div>
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-envelope"></i>
									</span>
								</div>
								<input type="email" class="form-control" placeholder="Correo del instructor" name="correo" required >
							</div>
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-location-pin"></i>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="Direccion del instructor" name="direccion" required>
							</div>
							<br>
							<button type="submit" class="btn btn-success">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	
</div>
<?php include 'footer.php'; ?>