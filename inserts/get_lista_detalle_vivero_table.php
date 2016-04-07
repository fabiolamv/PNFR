<?php

include_once('../conn.php');

$idVivero = $_GET['id'];

$sql = "SELECT * FROM viv_especie_produccion WHERE id_vivero = $idVivero";


$result = pg_query($conn, $sql);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}


$id = "";
$tabla = "";

while ($row = pg_fetch_array($result)) {
    $tabla .= '{
            "id_especie_estaca":"' . $row['id_especie_estaca'] . '",
            "num_plantines":"' . $row['num_plantines'] . '",
            "tasa_eficiencia":"' . $row['tasa_eficiencia'] . '",
            "total_produccion":"' . $row['total_produccion'] . '",
            "id_vivero":"' . $row['id_vivero'] . '"},';

    $id++;

}
$tabla = substr($tabla, 0, strlen($tabla) - 1);

echo '[' . $tabla . ']';


//$data = pg_fetch_all($result);


//$response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;
//
//echo json_encode($response);

