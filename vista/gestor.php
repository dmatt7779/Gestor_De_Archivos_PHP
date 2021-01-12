<?php 
session_start();
if(isset($_SESSION['usuario'])){

include "header.php"; 
?> 

	<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1 class="display-4">Gestor de archivos</h1>
		<span class="btn btn-danger" data-toggle="modal" data-target="#modalAgregarArchivos">
			<span class="fas fa-plus-circle">Agregar Archivos</span>
		</span>
		<hr>
		<div id="tablagestordearchivos"> </div>
	</div>
	</div>

	<!-- MODAL PARA AGREGAR ARCHIVOS-->

<!-- Modal -->
<div class="modal fade" id="modalAgregarArchivos" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form id="frmArchivos" enctype="multipart/form-data" method="post">
				<label>Categoria</label>
				<div id="categoriasLoad"></div><br>
				<label>Seleccionar archivos</label>
				<input type="file" name="archivos[ ]" id="archivos[ ]" class="form-control" multiple="">

			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger" id="btnSubirArchivos">Subir</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para visualizaciones -->
<div class="modal fade" id="visualizarArchivo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="archivoObtenido"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

	<?php include "footer.php"; ?>

	<script src="../js/gestor.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#tablagestordearchivos').load("gestor/tablagestor.php");
		$('#categoriasLoad').load("categorias/selectCategorias.php");

		$('#btnSubirArchivos').click(function() {
			agregarArchivosGestor();
		});
	});
	</script>

<?php

}else {
  header("location:../index.php");
}

?>