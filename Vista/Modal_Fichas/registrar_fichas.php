<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
                    <div class="modal-content">
                              <div class="modal-header no-bd" style="background: #667db6;  /* fallback for old browsers */
                                        background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
                                        background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                        ">
                                        <h10 class="modal-title" style="color:white;">
                                                  <span class="fw-mediumbold">
                                                  Nueva Ficha</span> 
                                        </h10>
                                        
                              </div>
                              <div class="modal-body">
                              <form action="" method="post">
                                        <div class="input-group col-sm-12 col-md-4 col-form-label">
                                        </div>
                                        <div class="input-group col-sm-12 col-md-10 col-form-label">
                                                  <div class="input-group-prepend">
                                                            <span class="input-group-text ">
                                                            <i class="icon-key"></i>
                                                            </span>
                                                  </div>
                                                  <input type="text" class="form-control" placeholder="Numero de ficha" name="numero_ficha" required > 
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