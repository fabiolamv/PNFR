<?php

include_once('../conn.php');

$sql = "SELECT
          id_proyecto,
          fecha_fin_plantacion,
          (SELECT tipo_plantacion
           FROM tipo_plantacion
           WHERE tipo_plantacion.id_tipo_plantacion = proyecto.id_tipo_plantacion) AS plantacion,
           refo_forest
        FROM proyecto
        ORDER BY id_proyecto ASC";


$result = pg_query($conn, $sql);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
$data = pg_fetch_all($result);
$response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;

echo json_encode($response);