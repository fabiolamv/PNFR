<?php

include_once('../conn.php');

$sql = "SELECT * FROM viv_vivero";

//    echo $sql;

$result = pg_query($conn, $sql);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
$data = pg_fetch_all($result);
$response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;

echo json_encode($response);

