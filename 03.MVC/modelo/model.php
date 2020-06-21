<?php

 class EnlacePaginas{

    public function enlacesPaginasModel($enlaces){

      if($enlaces=="nosotros" ||
         $enlaces=="servicios" ||
         $enlaces=="contactanos")
         {
       
          $module ="vistas/modulos/".$enlaces.".php";
        }
        else if($enlaces=="index"){
            $module="vistas/modulos/inicio.php";
        }
        else
        {
            $module="vistas/modulos/inicio.php";
        }

        return $module;  
    }
}


?>