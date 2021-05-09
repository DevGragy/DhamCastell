<?php

    //Obtener la pagina actual
    function obtenerPaginaActual(){
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_ireplace(".php","",$archivo);
        return $pagina;
    }

?>