<?php


    include_once('../conn.php');


    $idDepartamento = $_GET['id'];


    $sql = "SELECT id_provincia AS id, nombre_provincia AS VALUE
            FROM provincia
            WHERE id_departamento=$idDepartamento
            ORDER BY nombre_provincia ASC";

    $result = pg_query($conn, $sql);
    if (!$result) {
        echo "An error occurred.\n";
        exit;
    }
    $data = pg_fetch_all($result);
    $response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;

    echo json_encode($response);

