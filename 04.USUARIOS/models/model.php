
<?php

class EnlacePaginas{
    public function EnlacesPaginasModel($enlacesController){
        if($enlacesController=="login" ||
           $enlacesController=="navegacion" ||
           $enlacesController=="registro")
        {
            $module ="views/modules/".$enlacesController.".php";
        }
        ECHO $module;
        return $module;
    }

}


?>