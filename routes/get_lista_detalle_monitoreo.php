<?php

include_once('../conn.php');

$idMonitoreo = $_GET['id'];

$sql = "SELECT * FROM detalle_monitoreo WHERE id_monitoreo = $idMonitoreo";


$result = pg_query($conn, $sql);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}


$id = 0;
$tabla = "";

while ($row = pg_fetch_array($result)) {

    $mortandad = "";

    if ($row['mortandad'] == "t") {
        $mortandad = "Planta presente y viva";
    } else {
        $mortandad = "Planta ausente o muerto en pie";
    }

    $tabla .= '[
            "' . $row['num_parcela'] . '",
            "' . $row['num_arbol'] . '",
            "' . $row['especie'] . '",
            "' . $row['altura'] . '",
            "' . $mortandad . '",
            "' . $row['id_detalle_monitoreo'] . '"],';

    $id++;

}


$tabla = substr($tabla, 0, strlen($tabla) - 1);


echo '{"data":[' . $tabla . ']}';


//$data = pg_fetch_all($result);


//$response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;
//
//echo json_encode($response);

