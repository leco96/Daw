<?php
    $numeros = array("1", "2", "3","4","5","6","8","9","10");
  

    function mediana($numeros){
        global $median;
        for($i = 0;$i<count($numeros)/2;$i++)
             $median=$numeros[$i];
        echo $median;
    }

     mediana($numeros);
    
?>