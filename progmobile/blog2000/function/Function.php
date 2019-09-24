<?php
    function LimitarTexto($texto, $limite){
        $contador = strlen($texto);
            
        if($contador >= $limite){
            /*echo $contador;
            echo '<br>'.$limite;*/

            $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '[...]';
            return $texto;
        }else{return $texto;}
    }
?>