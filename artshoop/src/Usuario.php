<?php
class Usuario{

}

function comprobarCampos($_POST){
    $campos[]=;
    foreach ($_POST as $key => $value) {
        $campos[$key]=$value;
    }
    var_dump($campos);
    return true;
}
