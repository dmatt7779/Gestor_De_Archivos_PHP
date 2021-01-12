<?php
	session_start();
	require_once "../../clases/Conexion.php";
	$c = new Conectar();
	$conexion = $c->conexion();
	$idUsuario = $_SESSION['idUsuario'];
	$sql = "SELECT 
	archivos.id_archivos as idArchivo,
	usuario.nombre as NombreUsuario,
	categorias.nombre as Categoria,
	archivos.nombre as NombreArchivo,
	archivos.tipo as TipoArchivo,
	archivos.ruta as RutaArchivo,
	archivos.fecha as Fecha
	FROM
	t_archivos AS archivos
	INNER JOIN
	t_usuarios AS usuario ON archivos.id_usuario = usuario.id_usuario
	INNER JOIN
	t_categorias AS categorias ON archivos.id_categoria = categorias.id_categoria
	and archivos.id_usuario = '$idUsuario'";

$result = mysqli_query($conexion, $sql);
?>


<div class="container">
	<div class="row">
    	<div class="col-sm-12">
        	<div class="table-responsive">
            	<table class="table table-hover table-dark" id="tablagestordatatable1">
                	<thead>
                    	<tr style="text-align: center;">
							<th>Categoria</th>
                        	<th>Nombre del archivo</th>
                        	<th>Tipo de archivo</th>
                        	<th>Descargar</th>
                        	<th>Visualizar</th>
                        	<th>Eliminar</th>
                    	</tr>
                	</thead>
                	<tbody>
					<?php


						/*
							Arreglo de extensiones validas
						*/ 
						$extensionesValidas = array('png', 'jpg', 'pdf', 'xls', 'pptx', 'xml', 'xlsx', 'doc', 'docx', 'html');

						while ($mostrar = mysqli_fetch_array($result)) {

							$rutaDescarga = "../archivos/".$idUsuario."/".$mostrar['NombreArchivo'];
							$nombreArchivo = $mostrar['NombreArchivo'];
							$idArchivo = $mostrar['idArchivo'];
					?>
                    	<tr>
							<td><?php echo $mostrar['Categoria']; ?></td>
                        	<td><?php echo $mostrar['NombreArchivo']; ?></td>
                        	<td><?php echo $mostrar['TipoArchivo']; ?></td>
                        	<td>
								<a href="<?php echo $rutaDescarga; ?>" download="<?php echo $nombreArchivo; ?>" class="btn btn-success btn-sm">
								<span class="fas fa-arrow-down"></span>
								</a>
							</td>
                        	<td>
								<?php

									for ($i=0; $i < count($extensionesValidas); $i++){
										if($extensionesValidas[$i] == $mostrar['TipoArchivo']) {
								?>
										<span class="btn btn-light btn-sm" data-toggle="modal" data-target="#visualizarArchivo" onclick="obtenerArchivoPorId('<?php echo $idArchivo ?>')">
										<span class="fas fa-eye"></span>
								</span>
								<?php
										}
									}
								?>
							</td>
                        	<td>
								<span class="btn btn-danger btn-sm" onclick="eliminarArchivo('<?php echo $idArchivo; ?>')">
                            		<span class=" fas fa-trash-alt"></span>
								</span>
                        	</td>
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablagestordatatable1').DataTable();
    });
</script>