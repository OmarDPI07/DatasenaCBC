<?php include 'Vista/cabecera.php';

if($_POST){
    include('../../Modelo/conexion.php');
    
    $nombre=$_POST['numero_ficha'];
    $programa=$_POST['id_programa'];

    $miconexion=conectar_bd('', 'bd_pasantes');
    $resultado=consulta($miconexion,"INSERT INTO fichas (numero_ficha,id_programa) VALUES ('{$nombre}','{$programa}')");
    mysqli_close($miconexion);
    echo("<script> 
	Swal.fire({
	  position: 'top',
	  icon: 'success',
	  title: 'Ficha registrada correctamente',
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
							</div>
							<div class="input-group col-sm-12 col-md-4 col-form-label">
								<div class="input-group-prepend">
									<span class="input-group-text ">
									<i class="icon-key"></i>
									</span>
								</div>
								<input type="text" class="form-control" placeholder="Numero de ficha" name="numero_ficha" required > 
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
                                $resultado=consulta($miconexion,"SELECT * FROM `programas`");
                                mysqli_close($miconexion);
                                ?>
                                <select  class="form-control" name="id_programa">
                                <?php
                                while($fila=$resultado->fetch_object())
                                
                                 {
                                ?>
                                
                                <option  value="<?php echo $fila->id_programa ?>"><?php echo $fila->nombre_progra ?></option >
                                <?php
                                 }
                                 
                                ?>
                               </select>
                            </div>
						
							<br>
							<button type="submit" class="btn btn-success">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	
</div>
<?php include 'Vista/footer.php'; ?>