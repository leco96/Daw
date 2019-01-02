<?php

	function connect() {
        
                            //servidor_bd, usuario, passwd, nombre_bd
        $conexion = mysqli_connect("localhost","enrique","daw2018","rbac");
        
        if($conexion == NULL) {
            die("Error al conectarse con la base de datos");
        }
        $conexion->set_charset("utf8");
        return $conexion;
    }
    
    function disconnect($conexion) {
        mysqli_close($conexion);
    }

    function login($email, $password) {
        $conexion = connect();

        $email = $conexion->real_escape_string($email);
        $password = $conexion->real_escape_string($password);

         //Specification of the SQL query

        $query='SELECT `Nombre` FROM `usuario` WHERE  `Nombre` = "'.$email.'" AND `Contrasena` = "'.$password.'"';
         // Query execution; returns identifier of the result group

        $results = $conexion->query($query);
         // cycle to explode every line of the results
        while ($row = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                        // Options: MYSQLI_NUM to use only numeric indexes
                                        //          MYSQLI_ASSOC to use only name (string) indexes
                                        //          MYSQLI_BOTH, to use both

            mysqli_free_result($results);
            disconnect($conexion);
            return $row["Nombre"];
        }
        // it releases the associated results
        mysqli_free_result($results);
        disconnect($conexion);
        return false;
    }

    function rolUsuario($nombre){
        
        $conexion = connect();

        $query='SELECT R.Id_Rol FROM usuario U, roles R, roles_usuario RU WHERE U.Id_usuario = RU.Id_usuario AND RU.Id_rol = R.Id_rol And U.Nombre = "'.$nombre.'" ';

         $results = $conexion->query($query);
        
         while ($row = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                        // Options: MYSQLI_NUM to use only numeric indexes
                                        //          MYSQLI_ASSOC to use only name (string) indexes
                                        //          MYSQLI_BOTH, to use both

            mysqli_free_result($results);
            disconnect($conexion);
            return $row["Id_Rol"];
            
        }
        // it releases the associated results
        mysqli_free_result($results);
        disconnect($conexion);
        return false;
    }

    function privilegios($rol){
        $con = connect();


        $sql ='SELECT P.Id_Privilegio FROM  roles R, roles_privilegios RP, privilegios P WHERE  RP.Id_rol = R.Id_rol And RP.Id_Privilegio = P.Id_Privilegio AND R.Id_rol = "'.$rol.'" ' ;

         $result = $con->query($sql);



         if(mysqli_num_rows($result) > 0){

            $tabla = '<table>
                    <tr>
                        <th>'.$rol.'</th>
                    </tr>';

             while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                
                $tabla .= '<tr>
                            <td>'.$row["Id_Privilegio"].'</td>
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