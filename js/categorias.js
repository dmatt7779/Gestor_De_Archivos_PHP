const URL = "../procesos/categorias/"

function agregarCategoria() {
    var categoria = $('#nombreCategoria').val();
    if (categoria == ""){
        swal("Debes agregar una categoria");
        return false;
    } else {
        Param.append( 'categoria', categoria );
        SentenciaAjax( URL + "agregarcategoria.php", Param, function(respuesta){
            if (respuesta == 1) {
                $('#tablacategorias').load( "categorias/tablacategoria.php" );
                $('#nombreCategoria').val("");
                $("#modalagregacategoria").modal("toggle");
                swal (":D", "Agregado con exito!", "success");
            } else {
                swal (":(", "Fallo al agregar categoria!", "error");
            }
        } )
    }
}

function eliminarCategoria(idCategoria){
    idCategoria = parseInt(idCategoria);
    if(idCategoria < 1) {
        swal("No tienes id de categoria!");
        return false;
    }else {
        //********************************************
        swal({
            title: "Estas seguro de eliminar esta categoria?",
            text: "Una vez eliminada, no podrá recuperarse!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type:"POST",
                    data:"idCategoria=" + idCategoria,
                    url: "../procesos/categorias/eliminarCategoria.php",
                    success: function(respuesta){
                        respuesta = respuesta.trim();
                        if (respuesta == 1) {
                            $('#tablacategorias').load("categorias/tablacategoria.php");
                            swal("Eliminado con exito!", {
                                icon: "success",
                              });
                        }else {
                            swal(":(", "Fallo al eliminar categoria!", "error");
                        }
                    }
                });
            }
          });
        //********************************************
    }
}

function obtenerDatosCategoria(idCategoria) {
    Param.append( 'idCategoria', idCategoria );
    SentenciaAjax( "../procesos/categorias/obtenerCategoria.php", Param, function(respuesta){
        $('#idCategoria').val(respuesta['idCategoria']);
        $('#categoriaU').val(respuesta['nombreCategoria']);
    })
}

function actualizaCategoria() {
    if ($('#categoriaU').val() == "") {
        swal("No hay categoria!!");
        return false;
    } else {
        Param.append( 'idCategoria', $('#idCategoria').val() )
        Param.append( 'categoriaU', $('#categoriaU').val() )
        SentenciaAjax( URL + "actualizaCategoria.php", Param, function( respuesta ){
            if(respuesta == 1) {
                $('#tablacategorias').load("categorias/tablacategoria.php");
                swal(":D", "Actualizado con exito!", "success");
            }else{
                swal(":(", "Fallo al actualizar!", "error");
            }
        });
    }
}