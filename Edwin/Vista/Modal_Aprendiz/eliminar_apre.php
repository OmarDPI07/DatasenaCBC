
<!-- Ventana modal para eliminar -->
<div class="modal fade" id="exampleModal1<?php echo $lista['id_aprendiz'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
            <div class="modal-header"
            style="background: #00B4DB;  /* fallback for old browsers */
						background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
						background: linear-gradient(to right, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
                <h4 style="color:white;" class="modal-title">
                    ¿Realmente deseas eliminar a ?
                    
                </h4>
            </div>
            <div class="modal-body">
                <strong style="text-align: center !important"> 
                    <?php echo $lista['nombre']; ?>
                </strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger">Eliminar Aprendiz</button>
            </div>
	    </div>
	</div>
</div>
<!---fin ventana eliminar--->
<!-- Modal -->
                                                    