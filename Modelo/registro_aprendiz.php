<?php include 'cabecera.php'; ?>

				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-50">
					<div class="card-text-center">

                        <form action="guardar_aprendiz.php" method="post">

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Numero de documento</label>
                            <div class="col-sm-10 col-md-4">
                                <input class="form-control" placeholder=" Escribe el numero de documento" type="number" name="documento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Nombre completo</label>
                            <div class="col-sm-12 col-md-4">
                                <input class="form-control" placeholder=" Escribe los nombres y apellidos"  type="text" name="nombre" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Programa de formacion</label>
                            <select style="width:250px" class="form-control" name="programa">
                                <option>Adsi</option>
                                <option>agricola</option>
                                <option>Ganaderia</option>
                                <option>alimento</option>
                                <option>acuicultura</option>
                                <option>sistemas</option>
                                <option>Coordinacion</option>
                                <option>Avicultura</option>
                                <option>Cocina</option>
                                <option>Fotovoltaico</option>
                                <option>Soldadura</option>
                            </select>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Telefono</label>
                            <div class="col-sm-12 col-md-4">
                                <input class="form-control" placeholder=" Escribe el telefono"  type="text" name="telefono">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Correo</label>
                            <div class="col-sm-12 col-md-4">
                                <input class="form-control"  placeholder=" Escribe el correo" type="email" name="correo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Direccion</label>
                            <div class="col-sm-12 col-md-4">
                                <input class="form-control"  placeholder=" Escribe la direccion" type="text" name="direccion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Jornada</label>
                            <select style="width:250px" class="form-control" name="jornada">
                                <option>Diurna</option>
                                <option>Mixta</option>
                                <option>Virtual</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Registrar</button>
                        </form>
					</div>
				</div>
			</div>
		</div>
	
</div>
<?php include 'Pie.php'; ?>

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

