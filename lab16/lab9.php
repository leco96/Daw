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



<div id="anuncio" style="top:200px; left:300px;">
	<?php

	$numeros = array(5, 19, 3, 56, 2, 11, 12);
	$numeros2 = array(9, 11, 26, 45, 12, 8, 7 );
	promedio($numeros);
	echo '<br>';
	mediana($numeros);
	echo '<br>';
	?>

</div>

<div id="anuncio" style="top:200px; left:50px;">
	<?php
		listaNumeros($numeros);
	?>
</div>

<div id="anuncio" style="top:200px; left:550px;">
	<?php
		cubo($numeros);
	?>
</div>


<div class="card"  id="anuncio2" style="top:200px; left:850px;">
  <div class="card-body">
    <h5 class="card-title">Preguntas</h5>
    <h4 class="card-subtitle mb-2 text-muted">¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</h4>
    <h6 class="card-text">Muestra gran cantidad de información sobre el estado actual de PHP. Incluye información sobre las opciones de compilación y extensiones de PHP, versión de PHP, información del servidor </h6><br>
    <h4 class="card-subtitle mb-2 text-muted">¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</h4>
    <h6 class="card-text">Por el uso de PHP, ya que PHP es un lenguaje de programación de uso general de código del lado del servidor. Originalmente fue diseñado para el desarrollo web de contenido dinámico</h6>
  </div>
</div>