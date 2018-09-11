<?php

    $numeros = array("1", "2", "3","4","5","6","8","9","10");
  
    function ejercicioUno($numeros){
         global $t;
        $t= "<table>" ;
        for($i =1; $i<= count($numeros); $i++){
            $t =  $t."<tr>";
            for($j=0; $j<3; $j++){
                if($j==0)
                     $t."<td>".$i."</td>";
                else if($j==1)
                    $t."<td>".$i**2."</td>";
                else
                    $t."<td>".$i**3."</td>";
            }
             
            $t=$t."</tr>";
        }
        $t= $t ."</table>"; 
    
    echo $t;
}
    ejercicioUno($numeros);
?>