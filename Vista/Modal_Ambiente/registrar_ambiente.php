<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
                    <div class="modal-content">
                              <div class="modal-header no-bd" style="background: #667db6;  /* fallback for old browsers */
                                        background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);  /* Chrome 10-25, Safari 5.1-6 */
                                        background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                        ">
                                        <h10 class="modal-title" style="color:white;">
                                                  <span class="fw-mediumbold">
                                                  Nuevo Ambiente</span> 
                                        </h10>
                                        
                              </div>
                              <div class="modal-body">
                              <form action="" method="post">
                                        <div class="form-group row">
                                        <label class="col-sm-4 col-md-2 col-form-label">Area de pasantia</label>
                                        <?php
                                        include('../../modelo/funciones.php');                    
                                        $resultado=consulta($conn,"SELECT * FROM `areapasantia`");
                                        ?>
                                        <select style="" class="form-control" name="id_area">
                                        <?php
                                        while($fila=$resultado->fetch_object())
                              
                                        {
                                        ?>
                                        <option  value="<?php echo $fila->id_area ?>"><?php echo $fila->nombre ?></option name="id_area">
                                                                                          
                                        <?php
                                        }
                                        ?>
                                                  </select>
                                        </div>
                                        <div class="form-group row">
                                                  <label class="col-sm-4 col-md-2 col-form-label">Ambiente de pasantia</label>
                                                  
                                                  <input class="form-control" placeholder=" Escribe el area de pasantia"  type="text" name="nombre" >
                                                  
                                        </div>
                                                  <div class="form-group row">
                                                  <label class="col-sm-10 col-md-2 col-form-label">Fecha de registro</label>
                                               
                                                  <input class="form-control" placeholder=""  type="date" name="fecha_registro" >
                                                 
                                        </div>
                                        <div class="form-group row">
                                                  
                                                  <input class="form-control" placeholder="escribe el nombre del ambiente"  type="text" name="nombre_ambiente" >
                                                 
                                        </div>
                                        <div class="form-group row">
                                                  
                                                  <input class="form-control" placeholder="capacidad del ambiente"  type="number" min="1" max="100" name="capacidad" >
                                                  
                                        </div>
                                        <div class="form-group row">
                                        
                                        <textarea id="w3review" placeholder="Breve descripcion del ambiente" name="descripcion" rows="3" cols="50"></textarea>
                                                                      </div>
                                        <button type="submit" class="btn btn-success">Registrar</button>
                              </form>    
                              </div>
                              
                    </div>
          </div>
</div>