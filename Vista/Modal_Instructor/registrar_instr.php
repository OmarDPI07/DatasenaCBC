<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
                    <div class="modal-content">
                              <div class="modal-header no-bd" style="background: #667db6;  /* fallback for old browsers */
                                        background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
                                        background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                        ">
                                        <h10 class="modal-title" style="color:white;">
                                                  <span class="fw-mediumbold">
                                                  Nuevo Instructor</span> 
                                        </h10>
                                        
                              </div>
                              <div class="modal-body">
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
									<button type="submit" class="btn btn-success">Registrar</button>
								</form>
                              </div>
                              
                    </div>
          </div>
</div>