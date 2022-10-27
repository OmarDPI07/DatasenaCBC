<?php include 'Cabecera.php'; ?>
<?php 
    include("conectar.php");
    $con=conectar();
    $sql="SELECT instructor.id_instructor, instructor.documento, instructor.nombre, instructor.telefono, instructor.correo, instructor.direccion, senacbc.id_senacbc, senacbc.nombrec FROM instructor ,senacbc where instructor.id_instructor=senacbc.id_senacbc;
    ";


?>
				<!-- Default Basic Forms Start -->
				
				<div class="container">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                
                                <th>Id</th>
                                <th>Centro de Aprendizaje</th>
                                <th>Documento</th>
                                <th>Nombres</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Direccion</th>     
                                <th>Editar</th>       
                                <th>Eliminar</th>                

                            </tr>
                        </thead>
                        
                        <tbody>   
                        <?php 
                        foreach($con ->query($sql) as $lista){
                        ?>  
                         
                            <tr>       
                                  <td><?php echo $lista['id_instructor'] ?></td>
                                  <td><?php echo $lista['nombrec'] ?></td> 
                                  <td><?php echo $lista['documento'] ?></td>  
                                  <td><?php echo $lista['nombre'] ?></td>  
                                  <td><?php echo $lista['telefono'] ?></td> 
                                  <td><?php echo $lista['correo'] ?></td>  
                                  <td><?php echo $lista['direccion'] ?></td>    
                                  <td><a href="actualizar.php?Nit=<?php echo $lista['id_instructor']?>" class="btn btn-success">Editar</a></td> 
                                  <td><a href="delete.php?Nit=<?php echo $lista['id_instructor']?>" class="btn btn-danger">Eliminar</a></td>       
                            </tr>
                            <?php 
                              }
                            ?>
                        </tbody>
                    </table>

                 </div>
                           

            </div>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
<?php include 'pie.php'; ?>