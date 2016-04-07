<?php


    include_once('../conn.php');

    $result = pg_query($conn, "SELECT id_departamento AS id, nombre_departamento AS VALUE FROM departamento ORDER BY nombre_departamento asc");
    if (!$result) {
        echo "An error occurred.\n";
        exit;
    }
    $data = pg_fetch_all($result);
    $response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;

    echo json_encode($response);

