<?php


    include_once('../conn.php');

    $result = pg_query($conn, "SELECT id_instituciones AS id, nombre_institucion AS VALUE FROM instituciones ORDER BY nombre_institucion asc ");
    if (!$result) {
        echo "An error occurred.\n";
        exit;
    }
    $data = pg_fetch_all($result);
    $response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;

    echo json_encode($response);
