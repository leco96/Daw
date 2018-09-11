<?php
    $numeros = array("1", "2", "3","4","5","6","8","9","10");
  

    function mediana(){
        global $numeros, $promedio,$contador;
        //recorre cada numero del arreglo y lo guarda en promedio
        foreach($numeros as $promedio)
            //suma la variable al contador de numeros
            $contador = $contador + $promedio;
        //divide 
        $contador = $contador/count($numeros);
        echo $contador;
       
    }

     mediana();
    
?>