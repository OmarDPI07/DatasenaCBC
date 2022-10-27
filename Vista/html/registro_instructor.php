<?php include 'Vista/cabecera.php';
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
<div class="card-body">
		<div class="card">
            <div class="col-md-12">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-md-center">
				<div class="col-md-4">
							<div class="card-pricing2 card-primary">
								<div class="pricing-header">
									<h2 class="text-center">Registro de Instructores</h2>
								
								</div>
								<div class="price-value">
									<div class="value">
										<span class="currency"></span>
										<img src="../Estilos/img/logo_Sena.png" width="80px" height="80px"  alt="">
									</div>
								</div>
								<br>
								<br>
								<br>
								<form action="" method="post">
								<div class="input-group col-sm-12 col-md-10 col-form-label">
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
									<div class="input-group col-sm-12 col-md-10 col-form-label">
										<div class="input-group-prepend">
											<span class="input-group-text ">
											<i class="icon-key"></i>
											</span>
										</div>
										<input type="number" class="form-control" placeholder="Identificacion del instructor" name="documento" required > 
									</div>
									<div class="input-group col-sm-12 col-md-10 col-form-label">
										<div class="input-group-prepend">
											<span class="input-group-text ">
											<i class="flaticon-user"></i>
											</span>
										</div>
										<input type="text" class="form-control" placeholder="Nombres del instructor" name="nombre" required >
									</div>
						
									<div class="input-group col-sm-12 col-md-10 col-form-label">
										<div class="input-group-prepend">
											<span class="input-group-text ">
											<i class="icon-phone"></i>
											</span>
										</div>
										<input type="number" class="form-control" placeholder="Telefono del instructor" name="telefono" required >
									</div>
									<div class="input-group col-sm-12 col-md-10 col-form-label">
										<div class="input-group-prepend">
											<span class="input-group-text ">
											<i class="icon-envelope"></i>
											</span>
										</div>
										<input type="email" class="form-control" placeholder="Correo del instructor" name="correo" required >
									</div>
									<div class="input-group col-sm-12 col-md-10 col-form-label">
										<div class="input-group-prepend">
											<span class="input-group-text ">
											<i class="icon-location-pin"></i>
											</span>
										</div>
										<input type="text" class="form-control" placeholder="Direccion del instructor" name="direccion" required>
									</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<button type="submit" class="btn btn-success btn-block">Registrar</button>
								</form>
						
							</div>
						</div>
                    
						<div id="demo" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
						<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
						</ul>

						<!-- The slideshow -->
						<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="../Estilos/img/pasante.jpg" alt="" width="600" height="800">
							<div class="carousel-caption">
								<h3>Produccion agricola</h3>
								<p>We had such a great time in LA!</p>
							</div>	
						</div>
						<div class="carousel-item">
							<img src="../Estilos/img/pasante.jpg" alt="" width="600" height="800">
						</div>
						<div class="carousel-item">
							<img src="../Estilos/img/pasante.jpg" alt="" width="600" height="800">
						</div>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
						</a>
						</div>
                </div>
            </div>
        </div>
	</div>
		
<?php include 'Vista/footer.php'; ?>