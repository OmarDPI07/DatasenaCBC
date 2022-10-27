<?php include 'Cabecera.php'; ?>
<?php 
    include("../../modelo/conectar.php");
    $con=conectar();

    $sql="SELECT* FROM aprendiz,matricula_aprendiz_ambiente,ambiente_aprendizaje WHERE aprendiz.id_aprendiz OR ambiente_aprendizaje.id_ambiente=matricula_aprendiz_ambiente.id_matricula;
    ";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

    <div class="" >
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>    
            </div>    
        </div>    
    </div>    
    <br>  

    <div style="width:100%" >
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                       
                        <th>Documento</th>
                        <th>Nombres</th>
                        <th>Programa</th>                               
                        <th>Telefono</th>
                        <th>Correo </th>
                        <th>Jornada</th>
                        <th>Ambiente pasantia</th>
                        <th>Estado</th>
                        <th>inicio</th>
                        <th>culminacion </th>  
                        <th>Editar</th>    
                        <th>Eliminar</th>  
                        </tr>
                    </thead>
                    <tbody>  
                    <?php 
                            while($row=mysqli_fetch_array($query)){
                              ?>
                              <tr>
                                  
                                  <td><?php echo $row['documento'] ?></td>
                                  <td><?php echo $row['nombre'] ?></td>
                                  <td><?php echo $row['programa'] ?></td>
                                  <td><?php echo $row['telefono'] ?></td>
                                  <td><?php echo $row['correo'] ?></td>
                                  <td><?php echo $row['jornada'] ?></td>
                                  <td><?php echo $row['nombre_ambiente'] ?></td>
                                  <td><?php echo $row['estado'] ?></td>
                                  <td><?php echo $row['fecha_inicio'] ?></td>
                                  <td><?php echo $row['fecha_fin'] ?></td>      
                                  <td><a href="actualizar.php?Nit=<?php echo $row['documento']?>" class="btn btn-info"><i class='material-icons'>edit</i></a></td> 
                                  <td><a href="delete.php?Nit=<?php echo $row['documento']?>" class="btn btn-danger"><i class='material-icons'>delete</i></a></td>   
                              </tr>                     
                              <?php 
                              }
                              ?>                         
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    </div>   

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUsuarios">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Programa</label>
                    <input type="text" class="form-control" id="programa">
                    </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono">
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Correo</label>
                    <input type="text" class="form-control" id="correo">
                    </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="form-group">
                        <label for="" class="col-form-label">Direccion</label>
                        <input type="text" class="form-control" id="password">
                        </div>
                    </div>    
                    <div class="col-lg-3">    
                        <div class="form-group">
                        <label for="" class="col-form-label">Jornada</label>
                        <input type="number" class="form-control" id="status">
                        </div>            
                    </div>    
                </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="assetst/jquery/jquery-3.3.1.min.js"></script>
    <script src="assetst/popper/popper.min.js"></script>
    <script src="assetst/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="assetst/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="main.js"></script>    
    
      
    
