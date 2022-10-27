<?php include 'Vista/cabecera.php';?>

<?php  

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


include("../../modelo/conexion.php");

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
}
$result="SELECT * FROM `aprendiz` ORDER BY id_aprendiz DESC;";
?>


<div class="page-inner">					
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Listado de Pasantes</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Registrar
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal registro -->
									<?php  include("../Modal_Aprendiz/registrar_apre.php");?>
									

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead  class="">
												<tr>
													<th>#</th>
													<th>Documento</th>
													<th>Nombre</th>
													<th>Telefono</th>
													<th>Correo</th>
													<th>Direccion</th>
													<th style="width:5%">Acciones</th>
												</tr>
											</thead>
											<tbody>
											
											<?php 	
											$contador =1;
											foreach($conn ->query($result) as $lista){?>
												
												<tr>
													<td><?php echo $contador++ .')'; ?></td>
													<td><?php echo $lista['documento'] ?></td>
													<td><?php echo $lista['nombre'] ?></td>
													<td><?php echo $lista['telefono'] ?></td>
													<td><?php echo $lista['correo'] ?></td>
													<td><?php echo $lista['direccion'] ?></td>    
													<td>
														<div class="form-button-action">
															<button type="button"   class="btn btn-link btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $lista['id_aprendiz'] ?>">
																<i class="fas fa-undo-alt"  style="font-size:20px"></i>
															</button>
															<button type="button"  class="btn btn-link btn-danger"  data-toggle="modal" data-target="#exampleModal1<?php echo $lista['id_aprendiz'] ?>">
																<i class="fas fa-trash-alt" style="font-size:20px"></i>
															</button>

														</div>
													</td>
												</tr>
												<?php  include("../Modal_Aprendiz/editar_apre.php");?>
												<?php  include("../Modal_Aprendiz/eliminar_apre.php");?>
												

													
												<?php 
												}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
<?php include 'Vista/footer.php';?>