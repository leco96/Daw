<?php
	function connect() {
        
                            //servidor_bd, usuario, passwd, nombre_bd
        $conexion = mysqli_connect("localhost","enrique","daw2018","reporte");
        
        if($conexion == NULL) {
            die("Error al conectarse con la base de datos");
        }
        $conexion->set_charset("utf8");
        return $conexion;
    }
    
    function disconnect($conexion) {
        mysqli_close($conexion);
    }

    function getNombreCliente($cliente){

        $con = connect();

        $sql = 'SELECT `nombreCliente` FROM `cliente` WHERE `nombreCliente`= "'.$cliente.'"';

        $result = $con->query($sql);

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            return true;
         }
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return false;
    }

    function getNombreMunicipio($municipio){
    	$con = connect();

        $sql = 'SELECT  `nombreMunicipio` FROM `municpio` WHERE `nombreMunicipio` = "'.$municipio.'"';

        $result = $con->query($sql);

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            return true;
         }
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return false;
    }
    function getClaveTanque($clave){
    	$con = connect();

        $sql = 'SELECT `clave` FROM `tanque` WHERE `clave`="'.$clave.'" ';

        $result = $con->query($sql);

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            return true;
         }
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return false;
    }

    function getNombreVendedor($nombreVendedor){
    	$con = connect();

        $sql = 'SELECT  `nombreVendedor` FROM `vendedor` WHERE `nombreVendedor` = "'.$nombreVendedor.'" ';

        $result = $con->query($sql);

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            return true;
         }
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return false;
    }

    function submitNombreCliente($cliente){
    	 $con = connect();

        // insert command specification
        $query='INSERT INTO `cliente`(`nombreCliente`) VALUES (?)';
        // Preparing the statement
        if (!($statement = $con->prepare($query))) {
            disconnect($con);
            die("Preparation failed: (" . $con->errno . ") " . $con->error);
        }
        // Binding statement params
        $cliente = $con->real_escape_string($cliente);
        

        if (!$statement->bind_param("s", $cliente)) {
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

    function submitNombreMunicipio($municipio){
    	$con = connect();

        // insert command specification
        $query='INSERT INTO `municpio`(`nombreMunicipio`) VALUES (?)';
        // Preparing the statement
        if (!($statement = $con->prepare($query))) {
            disconnect($con);
            die("Preparation failed: (" . $con->errno . ") " . $con->error);
        }
        // Binding statement params
        $municipio = $con->real_escape_string($municipio);
        

        if (!$statement->bind_param("s", $municipio)) {
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

    function submitTanque($clave,$capacidad,$contrata){
    	$con = connect();

        // insert command specification
        $query='INSERT INTO `tanque`(`clave`, `capacidad`, `contrata`) VALUES (?,?,?)';
        // Preparing the statement
        if (!($statement = $con->prepare($query))) {
            disconnect($con);
            die("Preparation failed: (" . $con->errno . ") " . $con->error);
        }
        // Binding statement params
        $clave = $con->real_escape_string($clave);
        $capacidad = $con->real_escape_string($capacidad);
        $contrata = $con->real_escape_string($contrata);
        

        if (!$statement->bind_param("sss",$clave,$capacidad,$contrata)) {
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
  	
  	function submitVendedor($nombreVendedor,$domicilio,$telefono){
  		$con = connect();

        // insert command specification
        $query='INSERT INTO `vendedor`(`nombreVendedor`, `direccion`, `telefono`) VALUES (?,?,?)';
        // Preparing the statement
        if (!($statement = $con->prepare($query))) {
            disconnect($con);
            die("Preparation failed: (" . $con->errno . ") " . $con->error);
        }
        // Binding statement params
        $nombreVendedor = $con->real_escape_string($nombreVendedor);
        $domicilio = $con->real_escape_string($domicilio);
        $telefono = $con->real_escape_string($telefono);
        

        if (!$statement->bind_param("sss",$nombreVendedor,$domicilio,$telefono)) {
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

  	function submitClienteMunicipio($nombreCliente,$municipio){
  		$con = connect();
  		$nombreCliente=getClienteId($nombreCliente);
  		$municipio=getMunicipioId($municipio);
        // insert command specification
        $query='INSERT INTO `cliente_municipio`(`id_Cliente`, `id_Municipio`) VALUES (?,?)';
        // Preparing the statement
        if (!($statement = $con->prepare($query))) {
            disconnect($con);
            die("Preparation failed: (" . $con->errno . ") " . $con->error);
        }
       
        if (!$statement->bind_param("ss",$nombreCliente,$municipio)) {
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

  	function getClienteId($nombreCliente){
  		$con = connect();

        $sql = 'SELECT `id_Cliente` FROM `cliente` WHERE `nombreCliente`= "'.$nombreCliente.'"';

        $result = $con->query($sql);

        $id='';
         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
           $id .= ''.$row['id_Cliente'].'';
         }
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $id;
  	}

  	function getMunicipioId($municipio){
  		$con = connect();

        $sql = 'SELECT `id_Municipio` FROM `municpio` WHERE `nombreMunicipio` = "'.$municipio.'"';

        $result = $con->query($sql);

        $id='';
         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
           $id .= ''.$row['id_Municipio'].'';
         }
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $id;

  	}

  	function submitClienteTanque($nombreCliente,$clave){
  		$con = connect();

  		$nombreCliente=getClienteId($nombreCliente);
  		$clave=getClaveId($clave);
        // insert command specification
        $query='INSERT INTO `cliente_tanque`(`id_Cliente`, `id_Tanque`) VALUES (?,?)';
        // Preparing the statement
        if (!($statement = $con->prepare($query))) {
            disconnect($con);
            die("Preparation failed: (" . $con->errno . ") " . $con->error);
        }
       
        if (!$statement->bind_param("ss",$nombreCliente,$clave)) {
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

  	function getClaveId($clave){
  		$con = connect();

        $sql = 'SELECT `id_Tanque` FROM `tanque` WHERE `clave` = "'.$clave.'"';

        $result = $con->query($sql);

        $id='';
         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
           $id .= ''.$row['id_Tanque'].'';
         }
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $id;
  	}

  	function getVendedores(){
  		$con = connect();

        $sql = 'SELECT `nombreVendedor` FROM `vendedor`';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .= $row['nombreVendedor'];
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;

  	}

    function getMunicipios(){
      $con = connect();

        $sql = 'SELECT `nombreMunicipio` FROM `municpio` ';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .= $row['nombreMunicipio'];
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

  	function getTotalClientes(){
  		$con = connect();

        $sql = 'SELECT `nombreCliente` FROM `cliente`';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .= $row['nombreCliente'];
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;

  	}

  	function submitVenta($vendedor,$cliente,$fecha,$Cantidadconsumo,$observaciones){
  		$con = connect();

  		$cliente=getClienteId($cliente);
  		$vendedor=getVendedorId($vendedor);
        // insert command specification
        $query='INSERT INTO `vendedor_cliente`( `id_Vendedor`, `id_Cliente`, `fecha`, `cantidad`, `observaciones`) VALUES (?,?,?,?,?)';
        // Preparing the statement
        if (!($statement = $con->prepare($query))) {
            disconnect($con);
            die("Preparation failed: (" . $con->errno . ") " . $con->error);
        }
       
        if (!$statement->bind_param("sssss",$vendedor,$cliente,$fecha,$Cantidadconsumo,$observaciones)) {
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

  	function getVendedorId($vendedor){
  		$con = connect();

        $sql = 'SELECT `id_Vendedor` FROM `vendedor` WHERE `nombreVendedor` = "'.$vendedor.'"';

        $result = $con->query($sql);

        $id='';
         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
           $id .= ''.$row['id_Vendedor'].'';
         }
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $id;
  	}
    ////////////////////////consultas para las graficas

    function getVendedoresGraph(){
      $con = connect();

        $sql = 'SELECT `nombreVendedor` FROM `vendedor`';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='"' .$row['nombreVendedor']. '"';
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

    function getVentasPorVendedor($vendedor){
       $con = connect();

        $sql = 'SELECT SUM(`cantidad`) AS "Consumo"
                FROM `vendedor_cliente` VC, `vendedor` V
                WHERE VC.id_Vendedor = V.id_Vendedor
                AND `nombreVendedor` = "'.$vendedor.'" ';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='"' .$row['Consumo']. '"';
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }


    function cantidadVendedoresGraph(){
        $con = connect();

        $sql = 'SELECT COUNT(`id_Vendedor`) as "Total" FROM `vendedor`;';

        $result = $con->query($sql);
        

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo = $row['Total'];
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;

    }

    function promedioVentas(){
       $con = connect();

        $sql = 'SELECT AVG(`cantidad`) as "Promedio" FROM `vendedor_cliente`';

        $result = $con->query($sql);
        

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo = $row['Promedio'];
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

    function mayorVenta(){
       $con = connect();

        $sql = 'SELECT  `nombreVendedor`,`cantidad`,`nombreCliente` 
                FROM `vendedor_cliente` vc, `vendedor` V, `cliente`C
                WHERE VC.id_Vendedor=V.id_Vendedor 
                AND VC.id_Cliente =C.id_Cliente
                ORDER BY `cantidad` DESC LIMIT 1;';

        $result = $con->query($sql);
        
        $arreglo='';
         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='Vendedor: '.$row['nombreVendedor'].' <br> Venta: '.$row['cantidad'].'<br> Cliente: '.$row['nombreCliente'].' ';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }


    function menorVenta(){
       $con = connect();

        $sql = 'SELECT  `nombreVendedor`,`cantidad`,`nombreCliente` 
                FROM `vendedor_cliente` vc, `vendedor` V, `cliente`C
                WHERE VC.id_Vendedor=V.id_Vendedor 
                AND VC.id_Cliente =C.id_Cliente
                ORDER BY `cantidad` ASC LIMIT 1;';

        $result = $con->query($sql);
        
        $arreglo='';
         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='Vendedor: '.$row['nombreVendedor'].' <br> Venta: '.$row['cantidad'].'<br> Cliente: '.$row['nombreCliente'].' ';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

    function MunicipioGraph(){
        $con = connect();

        $sql = 'SELECT `nombreMunicipio` FROM `municpio` ';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='"' .$row['nombreMunicipio']. '"';
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

    function getClientesporMunicipio($municipio){
          $con = connect();

        $sql = 'SELECT COUNT(CM.id_Cliente) AS "TotalClientes"
                FROM `cliente_municipio` CM, `cliente` C, `municpio` M  
                WHERE CM.id_Municipio = M.id_Municipio
                 AND CM.id_Cliente = C.id_Cliente 
                 AND `nombreMunicipio`="'.$municipio.'" ';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='"' .$row['TotalClientes']. '"';
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

    function getTanquesPorMunicipio($municipio){
        $con = connect();

        $sql = 'SELECT COUNT(CT.id_Tanque) AS "numeroTanques"
                FROM `municpio` M, `tanque` T, `cliente` C, `cliente_tanque` CT, `cliente_municipio` CM
                WHERE M.id_Municipio = CM.id_Municipio AND C.id_Cliente = CM.id_Cliente AND C.id_Cliente = CT.id_Cliente
                AND CT.id_Tanque = T.id_Tanque AND `nombreMunicipio` = "'.$municipio.'"';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='"' .$row['numeroTanques']. '"';
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;

    }

    function municipiosMayorVenta(){
      $con = connect();

        $sql = 'SELECT  SUM(`cantidad`) AS CantidadMunicipio, `nombreMunicipio`  
                FROM `municpio` M,`cliente_municipio` CM,  `cliente` C, `vendedor_cliente` VC
                WHERE M.id_Municipio = CM.id_Municipio AND CM.id_Cliente = C.id_Cliente AND C.id_Cliente = VC.id_Cliente
                GROUP by `nombreMunicipio` 
                ORDER BY `cantidad` DESC LIMIT 2';

        $result = $con->query($sql);
        
        $arreglo='';
         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='Munipio: '.$row['nombreMunicipio'].' <br> Venta: '.$row['CantidadMunicipio'].'<br> ';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

    function municipiosMenorVenta(){
      $con = connect();

        $sql = 'SELECT  SUM(`cantidad`) AS CantidadMunicipio, `nombreMunicipio`  
                FROM `municpio` M,`cliente_municipio` CM,  `cliente` C, `vendedor_cliente` VC
                WHERE M.id_Municipio = CM.id_Municipio AND CM.id_Cliente = C.id_Cliente AND C.id_Cliente = VC.id_Cliente
                GROUP by `nombreMunicipio` 
                ORDER BY `cantidad` ASC LIMIT 2';

        $result = $con->query($sql);
        
        $arreglo='';
         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='Munipio: '.$row['nombreMunicipio'].' <br> Venta: '.$row['CantidadMunicipio'].'<br> ';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    
    }

       function getClientGraph(){
      $con = connect();

        $sql = 'SELECT `nombreCliente` FROM `cliente` ';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='"' .$row['nombreCliente']. '"';
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

      function getClientes(){
      $con = connect();

        $sql = 'SELECT `nombreCliente` FROM `cliente`';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .= $row['nombreCliente'];
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;

    }

    function getConsumoPorVendedor($cliente){
      $con = connect();

        $sql = 'SELECT SUM(`cantidad`) AS "consumo"
                FROM `cliente` C ,  `vendedor_cliente` VC 
                WHERE C.id_Cliente = VC.id_Cliente
                AND `nombreCliente`= "'.$cliente.'" ';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          $arreglo .='"' .$row['consumo']. '"';
          $arreglo .=',';
         }

        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

    function aumentaronConsumo($cliente){
       $con = connect();

        $sql = '
                SELECT `nombreCliente`,  SUM(`cantidad`) AS "Total de consumo"
                FROM `cliente` C ,  `vendedor_cliente` VC 
                WHERE C.id_Cliente = VC.id_Cliente
                AND VC.fecha BETWEEN  "2018-01-01" AND "2018-12-31"
                AND  `nombreCliente` = "'.$cliente.'"
                 AND `cantidad`>
                (SELECT SUM(`cantidad`) AS "Total de consumo"
                FROM `cliente` C ,  `vendedor_cliente` VC 
                WHERE C.id_Cliente = VC.id_Cliente
                AND VC.fecha BETWEEN  "2017-01-01" AND "2017-12-31"
                AND  `nombreCliente` = "'.$cliente.'")';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          if( ''.$row['nombreCliente'].'' == NULL){
            //no hacer nada
          }else{
            $arreglo .='
          <tr>
            <td>' .$row['nombreCliente']. '</td>
          </tr>';
          }
          
         }
        
        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

    function disminuyeronConsumo($cliente){
       $con = connect();

        $sql = '
                SELECT `nombreCliente`,  SUM(`cantidad`) AS "Total de consumo"
                FROM `cliente` C ,  `vendedor_cliente` VC 
                WHERE C.id_Cliente = VC.id_Cliente
                AND VC.fecha BETWEEN  "2017-01-01" AND "2017-12-31"
                AND  `nombreCliente` = "'.$cliente.'"
                 AND `cantidad`>
                (SELECT SUM(`cantidad`) AS "Total de consumo"
                FROM `cliente` C ,  `vendedor_cliente` VC 
                WHERE C.id_Cliente = VC.id_Cliente
                AND VC.fecha BETWEEN  "2018-01-01" AND "2018-12-31"
                AND  `nombreCliente` = "'.$cliente.'")';

        $result = $con->query($sql);
        $arreglo = '';

         while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
          if( ''.$row['nombreCliente'].'' == NULL){
            //no hacer nada
          }else{
            $arreglo .='
          <tr>
            <td>' .$row['nombreCliente']. '</td>
          </tr>';
          }
          
         }
        
        
        
        // it releases the associated results
        mysqli_free_result($result);

        disconnect($con);
        return $arreglo;
    }

?>