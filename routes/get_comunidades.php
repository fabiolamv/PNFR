<?php


include_once('../conn.php');


$idProvincia = $_GET['id'];


$sql = "SELECT id_comunidad AS id, nombre_comunidad AS VALUE
            FROM comunidad
            WHERE id_municipio=$idProvincia
            ORDER BY nombre_comunidad ASC";

$result = pg_query($conn, $sql);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
$data = pg_fetch_all($result);
$response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;

echo json_encode($response);

