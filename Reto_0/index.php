<?php

    $inicio = 1;
    $final = 100;

    function fizzbuzz($inicio, $final){

        for($i=$inicio;$i<=$final;$i++){

            $salida = "";

            ($i % 3 == 0) && $salida.= "fizz";

            ($i % 5 == 0) && $salida.= "buzz";

            ($salida == "") && $salida = $i;

            $salida .= "<br />";
            
            echo $salida;
        }
    }

    fizzbuzz($inicio, $final);

?>