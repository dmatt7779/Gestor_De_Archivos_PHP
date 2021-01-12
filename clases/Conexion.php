<?php

    class Conectar{
        public function conexion(){
            $servidor = "localhost";
            $usuario = "u350054506_fileshdservi";
            $password = "V4!xO~Z1$&v";
            $base = "u350054506_hdservicios";

            $conexion = mysqli_connect($servidor, $usuario, $password, $base);
            $conexion->set_charset('utf8mb4');
            return $conexion;
            
        }
    }

?>
