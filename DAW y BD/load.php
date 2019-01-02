<?php

//database conection
$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

//aqui se guarda los datos
$data = array();

$query = "SELECT * FROM event ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_even"]
 );
}
//esta funcion convierte los datos en un formato string
echo json_encode($data);

?>