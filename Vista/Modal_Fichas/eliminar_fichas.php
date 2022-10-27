
<!-- Ventana modal para eliminar -->
<div class="modal fade" id="exampleModal1<?php echo $lista['id_fichas'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
        <form action="../../Modelo/Datos_pasante/delete.php" method="post">
             <input type="hidden" class="form-control" value="<?php echo $lista['id_fichas'] ?>"  name="id_fichas" required > 

            <div class="modal-content">
                <div class="modal-header"
                style="background: #00B4DB;  /* fallback for old browsers */
                            background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
                            background: linear-gradient(to right, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
                    <h4 style="color:white;" class="modal-title">
                        ¿Realmente deseas eliminar esta Ficha?
                        
                    </h4>
                </div>
                <div class="modal-body">
                    <h4 style="text-align: center !important"> 
                        <center><?php echo $lista['numero_ficha']; ?>  </center>
                        <hr>
                    <center><img src="../Estilos/img/trash-svgrepo-com.svg" alt="" height="80px"></center>
                    </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Eliminar Ficha</button>
                </div>
            </div>
        </form>
	</div>
</div>
<!---fin ventana eliminar--->
<!-- Modal -->
                                                    