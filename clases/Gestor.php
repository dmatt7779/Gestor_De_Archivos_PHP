<?php

    require_once "Conexion.php";

    class Gestor extends Conectar {
        public function agregaRegistroArchivo($datos) {
            $conexion = Conectar::conexion();
            $sql = "INSERT INTO t_archivos (id_usuario, id_categoria, nombre, tipo, ruta) VALUES (?, ?, ?, ?, ?)";
            $query = $conexion->prepare($sql);
            $query->bind_param("iisss", $datos['idUsuario'], $datos['idCategoria'], $datos['nombreArchivo'], $datos['tipo'], $datos['ruta']);
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }

        public function obtenNombreArchivo($idArchivo) {
            $conexion = Conectar::conexion();
            $sql = "SELECT nombre FROM t_archivos WHERE id_archivos = '$idArchivo'";
            $result = mysqli_query($conexion, $sql);

            return mysqli_fetch_array($result)['nombre'];
        }

        public function eliminarRegistroArchivo($idArchivo) {
            $conexion = Conectar::conexion();
            $sql = "DELETE FROM t_archivos WHERE id_archivos = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $idArchivo);
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }

        public function obtenerRutaArchivo($idArchivo) {
            $conexion = Conectar::conexion();

            $sql = "SELECT nombre, tipo FROM t_archivos WHERE id_archivos = '$idArchivo'";
            $result = mysqli_query($conexion, $sql);
            $datos = mysqli_fetch_array($result);
            $nombreArchivo = $datos ['nombre'];
            $extension = $datos['tipo'];
            return self::tipoArchivo($nombreArchivo, $extension);
            
        }

        public function tipoArchivo($nombre, $extension) {
            $idUsuario = $_SESSION['idUsuario'];
            $ruta = "../archivos/".$idUsuario."/".$nombre;

            switch ($extension) {
                case 'png':
                    return '<img src="'.$ruta.'" width="80%">';
                    break;
                case 'jpg':
                    return '<img src="'.$ruta.'" width="80%">';
                    break;
                case 'pdf':
                    return '<embed src="' . $ruta . '#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="550px" />';
                    break;
                case 'xls':
                    return '<img src="'.$ruta.'">';
                    break;
                case 'pptx':
                    return '<img src="'.$ruta.'">';
                    break;
                case 'xml':
                    return '<img src="'.$ruta.'">';
                    break;
                case 'xlsx':
                    return '<img src="'.$ruta.'">';
                    break;
                case 'doc':
                    return '<img src="'.$ruta.'">';
                    break;
                case 'docx':
                    return '<img src="'.$ruta.'">';
                    break;
                case 'html':
                    return '<img src="'.$ruta.'">';
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }

?>