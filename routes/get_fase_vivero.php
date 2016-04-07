<?php


include_once('../conn.php');


$idVivero= $_GET['id'];


$sql = "SELECT id_fase_vivero AS id, fase_vivero AS value FROM viv_fase_vivero WHERE id_fase_vivero = $idVivero";

$result = pg_query($conn, $sql);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}


while ($row = pg_fetch_row($result)) {
    echo $row[1];
}
