<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header no-bd" style="background: #667db6;  /* fallback for old browsers */
									background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
									background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
									">
									<h10 class="modal-title" style="color:white;">
										<span class="fw-mediumbold">
										Nuevo pasante</span> 
									</h10>
									
								</div>
								<div class="modal-body">
									<form action="" method="post">
										<div class="input-group col-sm-12 col-md-10 col-form-label">
								
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
										<div class="modal-footer no-bd">
											<button type="submit" name="accion" value="agregar" class="btn btn-success">Registrar</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
										</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>