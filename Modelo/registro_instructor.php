<?php include 'Cabecera.php'; ?>

				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-50">
					<div class="container">

						<form action="guardar_instructor.php" method="post">
						<div class="input-group col-sm-12 col-md-4 col-form-label">
						<div class="input-group-prepend">
							<span class="input-group-text ">
							<i class="icon-home"></i>
							</span>
						</div>
							
								<?php
							include('funciones.php');
							$miconexion=conectar_bd('','bd_pasantes');
							$resultado=consulta($miconexion,"SELECT * FROM `senacbc`");
							?>
							<select style="width:300px" class="form-control" name="id_senacbc" required>
							<?php
							while($fila=$resultado->fetch_object())
							{
								?>
							<option >Escoge el centro de formacion</option>	
							<option  value="<?php echo $fila->id_senacbc  ?>"><?php echo $fila->nombre ?></option>	
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
<?php include 'pie.php'; ?>