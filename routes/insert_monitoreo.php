<?php

include_once('../conn.php');

$parcela = $_POST["parcela"];
$nroArboles = $_POST["nroArboles"];
$especie = $_POST["especie"];
$alturaTotal = $_POST["alturaTotal"];
$mortandad = $_POST["mortandad"];

$sql = "INSERT INTO monitoreo ";


$result = pg_query($conn, $sql);

//dump the result object
var_dump($result);

// Closing connection
pg_close($dbconn);



