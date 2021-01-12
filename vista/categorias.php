<?php 
session_start();
if(isset($_SESSION['usuario'])){

include "header.php"; 
?> 

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Categorías</h1>

    <div class="row">
        <div class="col-sm-4">
            <span class="btn btn-danger" data-toggle="modal" data-target="#modalagregacategoria">
                <span class="fas fa-plus-circle">Agregar nueva categoria</span>
            </span>
        </div>
    </div>
    <hr>
    <div class="col-sm-12">
        <div id="tablacategorias"></div>
    </div>
  </div>
</div>



<!-- Modal Nueva Categoria-->
<div class="modal fade" id="modalagregacategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nueva categoría</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmcategorias">
            <label>Nombre de la categoría</label>
            <input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCerrarUpdateCategoria">cerrar</button>
        <button type="button" class="btn btn-primary" id="btnguardarcategoria">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Editar Categoria-->
<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizaCategoria" method="POST">
          <input type="text" id="idCategoria" name="idCategoria" hidden="">
          <label>Categoria</label>
          <input type="text" id="categoriaU" name="categoriaU" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger" id="btnActualizaCategoria">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php";?>

<!-- Dependencia de categorias, todas las funciones JS de categorias -->
<script src="../js/func_general.js"></script>
<script src="../js/categorias.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablacategorias').load("categorias/tablacategoria.php");

        $('#btnguardarcategoria').click(function(){
            agregarCategoria();
        });

        $('#btnActualizaCategoria').click(function(){
            actualizaCategoria();
        });
    });   
</script>

<?php

}else {
  header("location:../index.php");
}
?>