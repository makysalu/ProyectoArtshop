<?php
class Usuario{
    function comprobarCampos($post){
        $errores=array();
        foreach ($post as $key => $value) {  
            if(empty($_POST[$key])==true){
                array_push($errores,$key);
            }
            else{
                $campos[$key]=htmlentities($value);
            }
        }
        if(count($errores)==0){
            return true;
        } 
        else{
            return false;
        }
        
    }
    
}

