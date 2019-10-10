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
            else{
                if(($key!="enviar")&&($key!="Condiciones")){
                    $this->datos[$key]=htmlentities($value);
                }
            }
        }
        if(count($errores)==0){
            return true;
        } 
        else{
            return false;
        }
        
    }
     /* datos usuario */
    function setId_Afiliado($datos){
        $this->datos=$datos;
    }
    function getId_Afiliado(){
        return $this->datos;
    }

    public function insertarusuario(){
        $claves="";
        $valores="";
        $cont=1;
        foreach ($this->datos as $key => $value) {
            $claves.=$key;
             $valores.="'".$value."'";
            if($cont<count($this->datos)){
                $claves.=", ";
                $valores.=", ";
            }
            $cont++;
        }
        $consulta="insert into usuario (".$claves.") values (".$valores.")";
        $this->conexion->query($consulta);
        echo $consulta;
        return true;
    }
    
}

