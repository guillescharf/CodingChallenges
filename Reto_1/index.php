<?php

    $palabra1 = "OiAeu";
    $palabra2 = "aeiou";

    function esAnagrama($palabra1, $palabra2):Bool
    {

        if((strlen($palabra1) != strlen($palabra2)) || (strtolower($palabra1) == strtolower($palabra2))){

            return false;

        }else{

            $palabra1Array = str_split(strtolower($palabra1));

            $palabra2Array = str_split(strtolower($palabra2));

            $resultado = array_diff($palabra1Array , $palabra2Array );

            return true;
            
        }

    }

    echo (esAnagrama($palabra1, $palabra2))? "Es un anagrama" : "No es un anagrama";

?>