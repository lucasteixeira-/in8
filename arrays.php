<?php

    $array1 = ['ES', 'MG', 'RJ', 'SP'];
    $array2 = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];
    
    $lastPos = array_key_last($array1);

    for($i = 0; $i <= $lastPos; $i++) {
        $array3[$array1[$i]] = $array2[$lastPos - $i];
    }

    foreach($array3 as $sigla => $estado) {
        echo "$sigla - $estado <br>";
    }

?>