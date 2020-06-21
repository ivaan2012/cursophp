<?php


#LLAMADA A LA PLANTILLA
#-----------------------------------------------------------------------
 class MvcController{
    
    public static function plantilla(){
        include "vistas/templete.php";
    }

#iNTERACCION DEL USUARIO
#-----------------------------------------------------------------------
    public static function enlacesPaginasController(){

        if(isset($_GET["action"])){
            $enlaces=$_GET["action"];
        }
        else{
            $enlaces="index";
        }

        
   
        $respuesta = EnlacePaginas::enlacesPaginasModel($enlaces);
       # echo "RESPUESTA:  ".$respuesta;
        include $respuesta;
    }
}


?>