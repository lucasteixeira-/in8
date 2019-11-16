<?php

    function minimoMultiploComum($n1, $n2, $n3, $maior) {
        
        while(true) {
            if(($maior % $n1 == 0) && ($maior % $n2 == 0) && ($maior % $n3 == 0)) {
                $mmc = $maior;
                break;
            } else {
                $mmc = minimoMultiploComum($n1, $n2, $n3, $maior + 1);
                return $mmc;
            }
        }

        return $mmc;
    }

    $maior = max(2, 3, 10);
    echo minimoMultiploComum(2, 3, 10, $maior);

?>