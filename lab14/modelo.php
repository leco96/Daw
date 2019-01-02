<?php
	function connect() {
        
                            //servidor_bd, usuario, passwd, nombre_bd
        $conexion = mysqli_connect("localhost","enrique","daw2018","dawlab14");
        
        if($conexion == NULL) {
            die("Error al conectarse con la base de datos");
        }
        $conexion->set_charset("utf8");
        return $conexion;
    }
    
    function disconnect($conexion) {
        mysqli_close($conexion);
    }
    


    function getFruits(){
    	$con = connect();


    	$sql = "SELECT id_fruit , name , units, price, country FROM fruit";

    	 $result = $con->query($sql);



    	 if(mysqli_num_rows($result) > 0){

    	 	$tabla = '<table>
    				<tr>
	    				<th>Id fruit</th>
					    <th>name</th> 
					    <th>Units</th>
					    <th>Price</th>
					    <th>Country</th>
					</tr>';

	    	 while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
	            
	            $tabla .= '<tr>
						    <td>'.$row["id_fruit"].'</td>
						    <td>'.$row["name"].'</td> 
						    <td>'.$row["units"].'</td>
						    <td>'.$row["price"].'</td> 
						    <td>'.$row["country"].'</td>
						  </tr>';
	        }
	        $tabla .= '</table>';
    	}else{
    		 $tabla = 'No se encontraron datos';	
    	}
        
        
        // it releases the associated results
        mysqli_free_result($result);

    	disconnect($con);

    	return $tabla;
    }

    function getFruitByName($fruitName){
    	$con = connect();


    	$sql = "SELECT id_fruit , name , units, price, country FROM fruit WHERE name LIKE '%".$fruitName."'";

    	 $result = $con->query($sql);



    	 if(mysqli_num_rows($result) > 0){

    	 	$tabla = '<table>
    				<tr>
	    				<th>Id fruit</th>
					    <th>name</th> 
					    <th>Units</th>
					    <th>Price</th>
					    <th>Country</th>
					</tr>';

	    	 while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
	            
	            $tabla .= '<tr>
						    <td>'.$row["id_fruit"].'</td>
						    <td>'.$row["name"].'</td> 
						    <td>'.$row["units"].'</td>
						    <td>'.$row["price"].'</td> 
						    <td>'.$row["country"].'</td>
						  </tr>';
	        }
	        $tabla .= '</table>';
    	}else{
    		 $tabla = 'No se encontraron datos';	
    	}
        
        
        // it releases the associated results
        mysqli_free_result($result);

    	disconnect($con);

    	return $tabla;

    }
    
    function getFruitCheapest($cheapPrice){
    	$con = connect();


    	$sql = "SELECT id_fruit , name , units, price, country FROM fruit WHERE price <= '".$cheapPrice."'";

    	 $result = $con->query($sql);



    	 if(mysqli_num_rows($result) > 0){

    	 	$tabla = '<table>
    				<tr>
	    				<th>Id fruit</th>
					    <th>name</th> 
					    <th>Units</th>
					    <th>Price</th>
					    <th>Country</th>
					</tr>';

	    	 while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
	            
	            $tabla .= '<tr>
						    <td>'.$row["id_fruit"].'</td>
						    <td>'.$row["name"].'</td> 
						    <td>'.$row["units"].'</td>
						    <td>'.$row["price"].'</td> 
						    <td>'.$row["country"].'</td>
						  </tr>';
	        }
	        $tabla .= '</table>';
    	}else{
    		 $tabla = 'No se encontraron datos';	
    	}
        
        
        // it releases the associated results
        mysqli_free_result($result);

    	disconnect($con);

    	return $tabla;

    }

?>