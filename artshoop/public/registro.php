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
            $datos=$u->limpiardatos($_POST);
            var_dump($datos);
            require "./assets/inicioHTML.php";
            //include "./assets/header.php";
            include "./assets/SelecionRegistro.php";
            require "./assets/cierreHTML.php";
            
            $opcionregistro = "<script> document.write(opcionregistro) </script>";
            

            /*$error=$u->conexion();
            if ($error===true){
                $error=$u->insertarusuario($_POST);
                    /*$u->añadirFoto();
                    if ($error==false){
                        header("Location:login.php");
                    }
            }*/
        }
        else{
            require "./assets/inicioHTML.php";
            include "./assets/header.php";
            include "./assets/registro.php";
            require "./assets/cierreHTML.php";
        }
    }
    
}
else{
    require "./assets/inicioHTML.php";
    include "./assets/header.php";
    include "./assets/registro.php";
    require "./assets/cierreHTML.php";
}

?>
