<?php

include_once('../conn.php');

$idMonitoreo = $_GET['id'];

$sql = "SELECT * FROM detalle_monitoreo WHERE id_monitoreo = $idMonitoreo";


$result = pg_query($conn, $sql);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}


$id = "";
$tabla = "";

while ($row = pg_fetch_array($result)) {
    $tabla .= '{
            "num_parcela":"' . $row['num_parcela'] . '",
            "num_arbol":"' . $row['num_arbol'] . '",
            "especie":"' . $row['especie'] . '",
            "altura":"' . $row['altura'] . '",
            "mortandad":"' . $row['mortandad'] . '",
            "id_detalle_monitoreo":"' . $row['id_detalle_monitoreo'] . '"},';

    $id++;

}
$tabla = substr($tabla, 0, strlen($tabla) - 1);

echo '[' . $tabla . ']';


//$data = pg_fetch_all($result);


//$response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;
//
//echo json_encode($response);

