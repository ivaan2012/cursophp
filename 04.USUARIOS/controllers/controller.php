<?php


#LLAMADA A LA PLANTILLA
#-----------------------------------------------------------------------
 class MvcController{
    
    public static function plantilla(){
        include "views/templete.php";
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

        echo "<script>alert('$enlaces');</script>";


   
        $respuesta = EnlacePaginas::EnlacesPaginasModel($enlaces);
        echo "RESPUESTA:  ".$respuesta;
        include $respuesta;
    }
}


?>