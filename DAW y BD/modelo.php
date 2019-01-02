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

    function getTweet(){
        $con = connect();


        $sql = "SELECT id_tweet, Descripcion FROM twitter ORDER BY id_tweet DESC";

         $result = $con->query($sql);



         if(mysqli_num_rows($result) > 0){

            $tabla = '<table style="border: 1px solid black;">
                        <tr >
                            <th class="th_t"><h5><strong>Tweets</strong></h5></th>
                        </tr> ';

             while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                
                $tabla .= '
                        <tr >
                            <th class="td_t">Quique Oliveros 
                            <span class="arroba">@OliverosQuique</span>
                            <div>
                               <span class="desc"> '.$row["Descripcion"].'</span>
                            </div>
                            <div>
                                <table>
                                    <th>
                                        <form>
                                          <a data-something="'.$row["id_tweet"].'" class="elim"  >Eliminar</a>
                                         </form>
                                    </th>
                                    <th>
                                        <form>
                                            <a data-modificar="'.$row["id_tweet"].'" class="mod"   >Modificar</a>
                                        </form>
                                    </th>
                                </table>
                            </div>
                            </th>
                        </tr> ';
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


    function sumbitTweet($descripcion){
        $con = connect();

        // insert command specification
        $query='INSERT INTO `twitter`(`Descripcion`) VALUES (?)';
        // Preparing the statement
        if (!($statement = $con->prepare($query))) {
            disconnect($con);
            die("Preparation failed: (" . $con->errno . ") " . $con->error);
        }
        // Binding statement params
        $descripcion = $con->real_escape_string($descripcion);
        

        if (!$statement->bind_param("s", $descripcion)) {
            disconnect($con);
            die("Parameter vinculation failed: (" . $con->errno . ") " . $con->error);
        }
         // Executing the statement
         if (!$statement->execute()) {
            disconnect($con);
             die("error en la consulta");
            return false;
          }

        disconnect($con);
        return true;

    }

    function eliminarTweet($id_tweet){
        $con = connect();
        $query="DELETE FROM `twitter` WHERE  id_tweet ='".$id_tweet."'";

        if (!($statement = $con->prepare($query))) {
            die("Preparation failed: (" . $con->errno . ") " . $con->error);
        }

        if ($statement->execute()) {
            //echo 'There were ' . mysqli_affected_rows($con) . ' affected rows';
        } else {
            die("Update failed: (" . $statement->errno . ") " . $statement->error);
        }

        disconnect($con);


    }

    function modificarTweet($tweet, $desc) {
        $con = connect();
       
        $query =" UPDATE `twitter` SET `Descripcion`='$desc' WHERE id_tweet = '".$tweet."' ";

        if (!($statement = $con->prepare($query))) {
            die("Preparation failed: (" . $con->errno . ") " . $con->error);
        }

        if ($statement->execute()) {
            //echo 'There were ' . mysqli_affected_rows($con) . ' affected rows';
        } else {
            die("Update failed: (" . $statement->errno . ") " . $statement->error);
        }

        disconnect($con);

    }

    function getNumeroTweets(){

        $con = connect();

        $sql = "SELECT COUNT(id_tweet) as numberOfTweets FROM twitter";

        $result = $con->query($sql);

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            echo $row['numberOfTweets'];
         }
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);

    }

?>