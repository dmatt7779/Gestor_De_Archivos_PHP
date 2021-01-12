<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Registro - HD SERVICIOS INTEGRALES</title>
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/favicon.png">

</head>
<body>

    <div class="container-all">
        <div class="ctn-form">
            <img src="images/logo.png" alt="logo empresa" class="logo">
            <h1 class="title">Registrar Un Empleado</h1>
            
            <form id="frmRegistro" method="post" onsubmit="return agregarUsuarioNuevo()" autocomplete="off">
                <label for="">Nombre Completo</label>
                <input type="text" name="nombre" id="nombre" required="">
                <label for="">Usuario</label>
                <input type="text" name="usuario" id="usuario" required="">
                <label for="">Contraseña</label>
                <input type="password" name="password" id="password" required="">
                <input type="submit" value="Registrar"><br><br>
            </form>
            <span class="text-footer">Para volver al login pincha <a href="index.php">¡AQUI!</a>
        </span>
        </div>

        

        <div class="ctn-text">
            <div class="capa"></div>
                <h1 class="title-description">ZONA EXCLUSIVA PARA ADMINISTRADOR</h1>
                <p class="text-description">Administrador si quieres agregar un nuevo usuario, llena lo datos del formulario a la izquierda.</p>
        </div>
    </div>

    <script src="librerias/jquery-3.5.1.min.js"></script>
    <script src="librerias/sweetalert.min.js"></script>

    <script type="text/javascript">
        function agregarUsuarioNuevo() { 
            $.ajax({
                method: "POST",
                data: $('#frmRegistro').serialize(),
                url: "procesos/usuario/registro/agregarUsuario.php",
                success: function(respuesta){

                    //console.log(respuesta);

                    respuesta = respuesta.trim();

                    if (respuesta == 1){
                        $('#frmRegistro')[0].reset();
                        swal(":D", "Agregado con exito!", "success");
                    }else if (respuesta == 2) {
                        swal("¡Este usuario ya existe por favor escribe otro!", "error");
                    }else {
                        swal(":(", "Fallo al agregar", "error");
                    }
                }
            });
            return false;
        }
    </script>
</body>
</html>