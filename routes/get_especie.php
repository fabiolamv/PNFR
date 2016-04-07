<?php

    include_once('../conn.php');


    $idProyecto = $_GET['id'];

    $sql = "SELECT especie_estaca.id_especie_estaca as id,  especie_estaca.nombre_comun || ' (' || especie_estaca.nombre_cientifico || ')' AS value
                                FROM especie_plantada, tipo_siembra, especie_estaca
                                WHERE especie_plantada.id_proyecto =  $idProyecto
                                AND especie_plantada.id_tipo_siembra = tipo_siembra.id_tipo_siembra
                                AND especie_estaca.id_especie_estaca = especie_plantada.id_especie_estaca";

//    echo $sql;

    $result = pg_query($conn, $sql);
    if (!$result) {
        echo "An error occurred.\n";
        exit;
    }
    $data = pg_fetch_all($result);
    $response = isset($_GET['callback']) ? $_GET['callback'] . "(" . $data . ")" : $data;

    echo json_encode($response);

