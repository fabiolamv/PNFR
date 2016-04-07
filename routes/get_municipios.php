<?php


include_once('../conn.php');


$idProvincia = $_GET['id'];


$sql = "SELECT id_municipio AS id, nombre_municipio AS VALUE
            FROM municipio
            WHERE id_provincia=$idProvincia
            ORDER BY nombre_municipio ASC";

$result = pg_query($conn, $sql);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
$data = pg_fetch_all($result);
$response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;

echo json_encode($response);

