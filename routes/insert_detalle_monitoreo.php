<?php

include_once('../conn.php');

$parcela = $_POST["parcela"];
$nroArboles = $_POST["nroArboles"];
$especie = $_POST["especie"];
$alturaTotal = $_POST["alturaTotal"];
$mortandad = $_POST["mortandad"];
$idMonitoreo = $_POST["idMonitoreo"];

$mortandad_value = "";


if ($mortandad == "1") {
    $mortandad_value = "t";
} else {
    $mortandad_value = "f";
}


echo $parcela."\n";
echo $nroArboles."\n";
echo $especie."\n";
echo $alturaTotal."\n";
echo $mortandad."\n";
echo $mortandad_value."\n";



$sql_max = "SELECT MAX(id_detalle_monitoreo) FROM detalle_monitoreo";
$result = pg_query($conn, $sql_max);
while ($row = pg_fetch_row($result)) {
    $val = $row[0];
}

$val = $val + 1;

$sql = "INSERT INTO detalle_monitoreo
          (id_detalle_monitoreo, num_parcela, num_arbol, especie, altura, mortandad, id_monitoreo)
        VALUES
          ($val,"
    . $parcela . ","
    . $nroArboles . ","
    . "'" . $especie . "',"
    . $alturaTotal . ","
    . "'" . $mortandad_value . "',"
    . $idMonitoreo . ")";

echo $sql;


$result = pg_query($conn, $sql);

//dump the result object
var_dump($result);

// Closing connection
pg_close($conn);
