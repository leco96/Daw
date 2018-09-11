<?php
    $numeros = array("1", "2", "3","4","5","6","8","9","10");
  

    function media(){
        global $numeros, $promedio,$contador;
        //recorre cada numero del arreglo y lo guarda en promedio
        foreach($numeros as $promedio)
            //suma la variable al contador de numeros
            $contador = $contador + $promedio;
        //divide 
        $contador = $contador/count($numeros);
        echo $contador;
       
    }

    function mediana($numeros){
        global $median;
        for($i = 0;$i<count($numeros)/2;$i++)
             $median=$numeros[$i];
        echo $median;
    }
    function listaNumeros($numeros){
        for($i = 0;$i<count($numeros);$i++)
             echo $numeros[$i];
        
    }

    echo "<br>lista de numeros<br>";
    listaNumeros($numeros);
    echo "<br>El promedio es de <br>";
     media();
    echo "<br>la mediana es de <br>";
     mediana($numeros);
    echo"<br>arreglo mostrado de menor a mayor<br>";
    sort($numeros);
    echo implode(",",$numeros);    
    echo "<br>arreglo mostrado de mayor a menor<br>";
     rsort($numeros);
    echo implode(",",$numeros);  
?>