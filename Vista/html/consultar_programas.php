<?php include 'Cabecera.php'; ?>
<?php 
    include("conectar.php");
    $con=conectar();
    $sql="SELECT *FROM programas;
    ";

   // RELACIONAR TABLAS PROGRAMAS Y FICHAS//
// SELECT programas.nombre_progra, fichas.numero_ficha FROM fichas ,programas where fichas.id_fichas=programas.id_programa;//
?>

				<!-- Default Basic Forms Start -->
				
				<div class="container">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                
                                <th>Id</th>
                                <th>Nombre del programa</th>
                                <th>Acciones</th>
                              

                            </tr>
                        </thead>
                        
                        <tbody>   
                        <?php 
                        foreach($con ->query($sql) as $lista){
                        ?>  
                         
                            <tr>       
                                  <td><?php echo $lista['id_programa'] ?></td>
                                  <td><?php echo $lista['nombre_progra'] ?></td>  
                                  <td><a href="actualizar.php?Nit=<?php echo $lista['id_programa']?>" class="btn btn-success">Editar</a>
                                  <a href="delete.php?Nit=<?php echo $lista['id_programa']?>" class="btn btn-danger">Eliminar</a></td>       
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