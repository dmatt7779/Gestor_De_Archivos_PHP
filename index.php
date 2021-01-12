<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Login - HD SERVICIOS INTEGRALES</title>
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap4/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/favicon.png">

</head>
<body>

    <div class="container-all">
        <div class="ctn-form">
            <img src="images/logo.png" alt="logo empresa" class="logo">
            <h1 class="title">Iniciar Sesión</h1>
            
            <!-- Formulario de Ingreso-->
            <form method="post" id="frmLogin" onsubmit="return logear()">
                 <label for="">Usuario</label>
                 <input type="text" id="login" name="login" required="">
                 <span class=""></span>
                 <label for="">Contraseña</label>
                 <input type="password" id="password" name="password" required="">
                 <input type="submit" value="Ingresar"><br><br>
            </form>
        </div>

        <div class="ctn-text">
            <div class="capa"></div>
                <h1 class="title-description">ZONA EXCLUSIVA COMERCIALES</h1>
                <p class="text-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error cum sed nemo maiores temporibus, placeat ad culpa repellendus, vel eveniet nostrum? Dolores excepturi alias hic ipsa quis ipsam aperiam deserunt?</p>
        </div>
    </div>

    <script src="librerias/jquery-3.5.1.min.js"></script>
    <script src="librerias/sweetalert.min.js"></script>

    <script type="text/javascript">
    function logear(){
        $.ajax({
            type:"POST",
            data:$('#frmLogin').serialize(),
            url:"procesos/usuario/login/login.php",
            success:function(respuesta) {

                respuesta = respuesta.trim();
                if (respuesta == 1){
                    window.location = "vista/inicio.php";
                }else{
                    swal(":(", "Fallo al Ingresar", "error");
                }
            }
        });

        return false;
    }
    </script>
</body>
</html>