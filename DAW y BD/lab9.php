<?php
	function promedio($numeros)
	{
		$acomulado = 0;
		$arrlength = count($numeros);
		$table = '<table >
      <thead>
        <tr>
            <th>Promedio</th>
        </tr>
      </thead>
      <tbody>';
    for($x = 0; $x < $arrlength; $x++)
    	$acomulado += $numeros[$x];
    $total = $acomulado/$arrlength;
	 $table .= '
	      <tr>
	          <td>'.$total.'</td>
	      </tr>';

	   
			$table .= '</tbody></table>';
		  		
		 echo $table;   		
	}

	function mediana($numeros){
		$numerosO = sort($numeros);
		$arrlength = count($numeros);
		$table = '<table >
      <thead>
        <tr>
            <th>Mediana</th>
        </tr>
      </thead>
      <tbody>';
    for($x = 0; $x <= ($arrlength/2); $x++){
	   		if($x == floor($arrlength/2)){
	   			$med = $numeros[$x];
	   		}
	   	}
	 $table .= '
	      <tr>
	          <td>'.$med.'</td>
	      </tr>';

	   
			$table .= '</tbody></table>';
		  		
		 echo $table;
	}

	function listaNumeros($numeros){
	$arrlength = count($numeros);

	$stringN = "";
	  $table = '<table>
      <thead>
        <tr>
            <th>Numeros</th>
        </tr>
      </thead>
      <tbody>';
    for($x = 0; $x < $arrlength; $x++){
    	$stringN .= $numeros[$x];
		$stringN .=  " ";
    }
    
	 $table .= '
	      <tr>
	          <td>'.$stringN.'</td>
	      </tr>';

	$table .= '</tbody></table>';
		  		
	 echo $table;


	echo '<br>';

	
	sort($numeros);

	$stringN2 = "";
	  $table2 = '<table>
      <thead>
        <tr>
            <th>Menor-Mayor</th>
        </tr>
      </thead>
      <tbody>';
    for($x = 0; $x < $arrlength; $x++){
    	$stringN2 .= $numeros[$x];
		$stringN2 .=  " ";
    }
    
	 $table2 .= '
	      <tr>
	          <td>'.$stringN2.'</td>
	      </tr>';

	$table2 .= '</tbody></table>';
		  		
	 echo $table2;

	 echo '<br>';

	 $stringN3 = "";
	  $table3 = '<table>
      <thead>
        <tr>
            <th>Mayor-Menor</th>
        </tr>
      </thead>
      <tbody>';
    for($x = 6; $x >= 0; $x--){
    	$stringN3 .= $numeros[$x];
		$stringN3 .=  " ";
    }
    
	 $table3 .= '
	      <tr>
	          <td>'.$stringN3.'</td>
	      </tr>';

	$table3 .= '</tbody></table>';
		  		
	 echo $table3;

	
	}

	function cubo($numeros){
		$arrlength = count($numeros);
		$table = '<table >
      <thead>
        <tr>
            <th>Numero</th>
            <th>Cuadrado</th>
            <th>Cubo</th>
        </tr>
      </thead>
      <tbody>';
    for($x = 0; $x < $arrlength; $x++){
    	$cuadrado = $numeros[$x]*$numeros[$x];
    	$cubo = $numeros[$x]*$numeros[$x]*$numeros[$x];
	 $table .= '
	      <tr>
	          <td>'.$numeros[$x].'</td>
	          <td>'.$cuadrado.'</td>
	          <td>'.$cubo.'</td>
	      </tr>';

	   }
			$table .= '</tbody></table>';
		  		
		 echo $table;
    }


?>

<div id="anuncio" style="top:100px; left:600px;">
	<h1>Introduccion PHP</h1>
</div>



<div id="anuncio" style="top:200px; left:500px;">
	<?php

	$numeros = array(5, 19, 3, 56, 2, 11, 12);
	$numeros2 = array(9, 11, 26, 45, 12, 8, 7 );
	promedio($numeros);
	echo '<br>';
	mediana($numeros);
	echo '<br>';
	?>

</div>

<div id="anuncio" style="top:200px; left:250px;">
	<?php
		listaNumeros($numeros);
	?>
</div>

<div id="anuncio" style="top:200px; left:750px;">
	<?php
		cubo($numeros);
	?>
</div>

