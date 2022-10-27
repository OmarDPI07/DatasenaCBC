<?php include 'cabecera.php'; 

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


				
<div class="card-body">
		<div class="card">
            <div class="col-md-12">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-md-center">
				<div class="col-md-4">
							<div class="card-pricing2 card-primary">
								<div class="pricing-header">
									<h2 class="text-center">Registro de pasantes</h2>
								
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
						    <div class="input-group col-sm-12 col-md-4 col-form-label">
					
							</div>
							<div class="input-group col-sm-12 col-md-10 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-key"></i>
									</span>
								</div>
								<input type="number" class="form-control" placeholder="Identificacion del pasante" name="documento" required > 
							</div>
							<div class="input-group col-sm-12 col-md-10 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="flaticon-user"></i>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="Nombres del pasante" name="nombre" required >
							</div>
				
							<div class="input-group col-sm-12 col-md-10 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-phone"></i>
									</span>
								</div>
								<input type="number" class="form-control" placeholder="Numero telefonico" name="telefono" required >
							</div>
							<div class="input-group col-sm-12 col-md-10 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-envelope"></i>
									</span>
								</div>
								<input type="email" class="form-control" placeholder="Correo institucional" name="correo" required >
							</div>
							<div class="input-group col-sm-12 col-md-10 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-location-pin"></i>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="Direccion" name="direccion" required>
							</div>
                            <div class="input-group col-sm-12 col-md-10 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="fas fa-clock"></i>
									</span>
								</div>
								<select class="form-control" name="jornada">
                                    <option>Mañana</option>
                                    <option>Tarde</option>
                                    <option>Mixta</option>
                                </select>
							</div>
                            <div class="input-group col-sm-12 col-md-10 col-form-label">
                                <div class="input-group-prepend">
                                     <span class="input-group-text ">
                                     <i class="icon-home"></i>
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
                            <div class="input-group col-sm-12 col-md-10 col-form-label">
                                <div class="input-group-prepend">
                                     <span class="input-group-text ">
                                     <i class="icon-key"></i>
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
							<button type="submit" name="accion" value="agregar" class="btn btn-primary btn-block">Registrar</button>
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
<?php include 'footer.php'; ?>