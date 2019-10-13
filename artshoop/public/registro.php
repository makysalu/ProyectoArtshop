<?php
session_start();
require "./../src/BBDD.php";
require "./../src/Usuario.php";
$error;
$u = new Usuario();
if (empty($_GET)){
    if (isset($_POST["enviar"])){
        $error=$u->comprobarCampos($_POST);
        if ($error===true) {
            $error=$u->conexion();
            if ($error===true){
                $error=$u->comprobarCorreo($_POST);
                if($error===true){   
                    $datos=$u->limpiardatos($_POST);
                    $_SESSION=$datos;
                    require "./assets/inicioHTML.php";
                    include "./assets/header.php";
                    include "./assets/SelecionRegistro.php";
                    require "./assets/cierreHTML.php";
                    $opcionregistro = "<script> document.write(opcionregistro) </script>";
                }
                else{
                    require "./assets/inicioHTML.php";
                    include "./assets/header.php";
                    include " ./assets/msgCuenta.php";
                    include "./assets/registro.php";
                    require "./assets/cierreHTML.php";
                }
            }
            else{
                require "./assets/inicioHTML.php";
                include "./assets/header.php";
                include "./assets/registro.php";
                require "./assets/cierreHTML.php";
            }
        }
        else{
            require "./assets/inicioHTML.php";
            include "./assets/header.php";
            include "./assets/registro.php";
            require "./assets/cierreHTML.php"; 
        }
        
    }
    else{
        require "./assets/inicioHTML.php";
        include "./assets/header.php";
        include "./assets/registro.php";
        require "./assets/cierreHTML.php";
    }
}
else
{   
    $datos=$_SESSION;
    $error=$u->conexion();
    if ($error===true){
        $error=$u->insertarusuario($_SESSION);
            if ($error===true){
                header("Location:index.php");
            }
    }
}

?>
