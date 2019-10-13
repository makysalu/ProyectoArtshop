<?php
class Usuario extends BBDD{
    public $accion;
    private $datos=array();

    /* Comprobar campos */
    public function comprobarCampos($post){
        $errores=array();
        foreach ($post as $key => $value) {  
            if(empty($_POST[$key])==true){
                array_push($errores,$key);
            }
        }
        if(count($errores)==0){
            return true;
        } 
        else{
            return false;
        }
        
    }

    /* Limpiar datos*/
    public function limpiardatos($post){
        foreach ($post as $key => $value) {  
            if(($key!="enviar")&&($key!="Condiciones")){
                $this->datos[$key]=htmlentities($value);
            }
        }
        return $this->datos;
    }

     /* datos usuario */
    function setId_Afiliado($datos){
        $this->datos=$datos;
    }
    function getId_Afiliado(){
        return $this->datos;
    }
    public function comprobarCorreo($post){
        $consulta="select * from usuario where usuario.Email='".$post['Email']."'";
        $resultado=$this->conexion->query($consulta);
        foreach ($resultado as $usuario) {
            $usuario['Id_usuario'];
        }
        if(empty($usuario['Id_usuario'])){
            return true;
        }
        else{
            return false;
        }
    }

    /* Introducir Usuarios*/
    public function insertarusuario($post){
        $claves="";
        $valores="";
        $cont=1;
        foreach ($post as $key => $value) {
            $claves.=$key;
             $valores.="'".$value."'";
            if($cont<count($post)){
                $claves.=", ";
                $valores.=", ";
            }
            $cont++;
        }
        $consulta="insert into usuario (".$claves.") values (".$valores.")";
        $this->conexion->query($consulta);
        return true;
    }
    
}

