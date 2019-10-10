<?php
  session_start();
require "./../src/BBDD.php";
require "./../src/Usuario.php";
$error;
$u = new Usuario();
if (isset($_POST["enviar"])){
    $error=$u->comprobarCampos($_POST);
    if (isset($error)) {
        if($error===true){
        $error=$u->conexion();
        if ($error===true){
            $error=$u->insertarusuario($_POST);
                /*$u->añadirFoto();
                if ($error==false){
                    header("Location:login.php");
                }*/
        }
        }
    }
}

if (isset($_GET["msg"])){
  echo "<script>alert('".$_GET["msg"]."');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro Usuario</title>
        <script src="./js/modernizr-custom.js"></script>
        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/registro.css">
        <script src="./js/registro.js"></script>
    </head>
    <body>
        <?php include "./assets/header.php";?>
        <section id="registro">
            <header>
                    Registro Usuario
            </header>
            <article>
                <form id="registrousuario" class="registroUser" action="registroUser.php" method="post" enctype="multipart/form-data" onsubmit="return comprobarRegistro('registrousuario')">
                <label for="Nombre"><strong>Nombre: </strong></label><input type="text" name="Nombre" id="Nombre"><br></br>
                <label for="Apellidos"><strong>Apellidos: </strong></label><input type="text" name="Apellidos" id="Apellidos"><br></br>
                <label for="DNI"><strong>DNI: </strong></label><input type="text" name="DNI" id="DNI"><br></br>
                <label for="Pais"><strong>País: </strong></label><input type="text" name="Pais" id="Pais"><br></br>
                <label for="Email"><strong>Email: </strong></label><input type="text" name="Email" id="Email"><br></br>
                <label for="Password"><strong>Contraseña: </strong></label><input type="text" name="Password" id="Password"><br></br>
                <label for="Password2"><strong>Repite la Contraseña: </strong></label><input type="text" name="Password2" id="Password2"><br></br>
                <p id="condicionesP">
                    <input name="Condiciones" id="Condiciones" type="checkbox" required/>
                    Aceptas las <a href="condiciones.html">condiciones</a> de servicio.
                </p>
                <div>
                    <input type="submit" value="ENVIAR" name='enviar'>
                </div>
                </form>
            </article>
        </section>
    </body>
</html>