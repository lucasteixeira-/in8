<?php

    function calcularMultiplosDeTresECincoMenoresQueMil() {
        $resultado = 0;
        for($i = 1; $i < 1000; $i++) {
            if(($i % 3 == 0) || ($i % 5 == 0))
                $resultado += $i;
        }

        return $resultado;
    }

    echo calcularMultiplosDeTresECincoMenoresQueMil();

?>