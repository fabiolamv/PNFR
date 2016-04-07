<?php

include_once('../conn.php');


$tot1 = 0;
$tot2 = 0;
$tot3 = 0;
$tot4 = 0;
$tot5 = 0;
$tot6 = 0;
$tot7 = 0;
$tot8 = 0;
$tot9 = 0;
$tot10 = 0;
$tot11 = 0;
$tot12 = 0;
$tot13 = 0;
$tot14 = 0;
$tot15 = 0;
$tot16 = 0;


$ejecutor = 0;
$contraparte = 0;

$sql1 = "SELECT sum(numero_estacas) AS estacas FROM especie_plantada";


$result1 = pg_query($conn, $sql1);
if (!$result1) {
    echo "An error occurred.\n";
    exit;
}


while ($row1 = pg_fetch_array($result1)) {
    $tot1 = $row1['estacas'];
}



$sql2 = "SELECT sum(numero_plantines) AS plantines FROM especie_plantada";


$result2 = pg_query($conn, $sql2);
if (!$result2) {
    echo "An error occurred.\n";
    exit;
}


while ($row2 = pg_fetch_array($result2)) {
    $tot2 = $row2['plantines'];
}




$sql3 = "SELECT sum(proyecto.superficie_plantada) AS superficie_plantada FROM proyecto";


$result3 = pg_query($conn, $sql3);
if (!$result3) {
    echo "An error occurred.\n";
    exit;
}


while ($row3 = pg_fetch_array($result3)) {
    $tot3 = $row3['superficie_plantada'];
}





$sql4 = "SELECT
  sum(presupuesto_ejecutor)    AS ejecutador,
  sum(presupuesto_contraparte) AS contraparte
FROM proyecto";


$result4 = pg_query($conn, $sql4);
if (!$result4) {
    echo "An error occurred.\n";
    exit;
}


while ($row4 = pg_fetch_array($result4)) {

    $ejecutor = $ejecutor + $row4['ejecutador'];
    $contraparte = $contraparte + $row4['contraparte'];
}





$sql5 = "SELECT
sum(numero_de_beneficiarios) as beneficiarios
FROM proyecto";


$result5 = pg_query($conn, $sql5);
if (!$result5) {
    echo "An error occurred.\n";
    exit;
}


while ($row5 = pg_fetch_array($result5)) {
    $tot5 = $row5['beneficiarios'];
}


$sql6 = "SELECT
sum(cantidad) AS cantidad FROM proyecto_participantes";


$result6 = pg_query($conn, $sql6);
if (!$result6) {
    echo "An error occurred.\n";
    exit;
}


while ($row6 = pg_fetch_array($result6)) {
    $tot6 = $row6['cantidad'];
}


$sql7 = "SELECT
sum (cantidad) AS empleos FROM proyecto_empleo";


$result7 = pg_query($conn, $sql7);
if (!$result7) {
    echo "An error occurred.\n";
    exit;
}


while ($row7 = pg_fetch_array($result7)) {
    $tot7 = $tot7 + $row7['empleos'];
}

$sql8 = "SELECT sum(proyecto.superficie_plantada) AS superficie_reforestada FROM proyecto WHERE refo_forest = true";


$result8 = pg_query($conn, $sql8);
if (!$result8) {
    echo "An error occurred.\n";
    exit;
}


while ($row8 = pg_fetch_array($result8)) {
    $tot8 = $row8['superficie_reforestada'];
}

$sql9 = "SELECT sum(proyecto.superficie_plantada) AS superficie_reforestada FROM proyecto WHERE refo_forest = false";


$result9 = pg_query($conn, $sql9);
if (!$result9) {
    echo "An error occurred.\n";
    exit;
}


while ($row9 = pg_fetch_array($result9)) {
    $tot9 = $row9['superficie_reforestada'];
}


$sql10 = "SELECT sum(proyecto.superficie_plantada) AS superficie_conservacion FROM proyecto WHERE id_tipo_plantacion = 1";


$result10 = pg_query($conn, $sql10);
if (!$result10) {
    echo "An error occurred.\n";
    exit;
}


while ($row10 = pg_fetch_array($result10)) {
    $tot10 = $tot10 + $row10['superficie_conservacion'];
}

$sql11 = "SELECT sum(proyecto.superficie_plantada) AS superficie_recuperacion FROM proyecto WHERE id_tipo_plantacion = 2";


$result11 = pg_query($conn, $sql11);
if (!$result11) {
    echo "An error occurred.\n";
    exit;
}


while ($row11 = pg_fetch_array($result11)) {
    $tot11 = $tot11 + $row11['superficie_recuperacion'];
}

$sql12 = "SELECT sum(proyecto.superficie_plantada) AS superficie_proteccion FROM proyecto WHERE id_tipo_plantacion = 3";


$result12 = pg_query($conn, $sql12);
if (!$result12) {
    echo "An error occurred.\n";
    exit;
}


while ($row12 = pg_fetch_array($result12)) {
    $tot12 = $tot12 + $row12['superficie_proteccion'];
}

$sql13 = "SELECT sum(proyecto.superficie_plantada) AS superficie_comercial FROM proyecto WHERE id_tipo_plantacion = 4";


$result13 = pg_query($conn, $sql13);
if (!$result13) {
    echo "An error occurred.\n";
    exit;
}


while ($row13 = pg_fetch_array($result13)) {
    $tot13 = $tot13 + $row13['superficie_comercial'];
}



$sql14 = "SELECT sum(proyecto.superficie_plantada) AS superficie_ornamental FROM proyecto WHERE id_tipo_plantacion = 5";

$result14 = pg_query($conn, $sql14);
if (!$result14) {
    echo "An error occurred.\n";
    exit;
}


while ($row14 = pg_fetch_array($result14)) {
    $tot14 = $tot14 + $row14['superficie_ornamental'];
}


$sql15 = "SELECT sum(proyecto.superficie_plantada) AS superficie_agroforestal FROM proyecto WHERE id_tipo_plantacion = 6";

$result15 = pg_query($conn, $sql15);
if (!$result15) {
    echo "An error occurred.\n";
    exit;
}


while ($row15 = pg_fetch_array($result15)) {
    $tot15 = $tot15 + $row15['superficie_agroforestal'];
}


$sql16 = "SELECT sum(proyecto.superficie_plantada) AS superficie_silvopastoril FROM proyecto WHERE id_tipo_plantacion = 7";

$result16 = pg_query($conn, $sql16);
if (!$result16) {
    echo "An error occurred.\n";
    exit;
}


while ($row16 = pg_fetch_array($result16)) {
    $tot16 = $tot16 + $row16['superficie_silvopastoril'];
}








$tabla = "";

$tabla .= '{
            "estacas":"' . $tot1 . '",
            "plantines":"' . $tot2 . '",
            "sumEstacaPlantines":"' . ($tot1 + $tot2) . '",
            "superficie":"' . $tot3 . '",
            "presupuestoEjecutor":"' . $ejecutor . '",
            "presupuestoContraparte":"' . $contraparte . '",
            "beneficiarios":"' . $tot5 . '",
            "participantes":"' . $tot6 . '",
            "empleos":"' . $tot7 . '",
            "superficieReforestada":"' . $tot8 . '",
            "superficieForestada":"' . $tot9 . '",
            "superficieConservacion":"' . $tot10 . '",
            "superficieRecuperacion":"' . $tot11 . '",
            "superficieProteccion":"' . $tot12 . '",
            "superficieComercial":"' . $tot13 . '",
            "superficieOrnamental":"' . $tot14 . '",
            "superficieAgroforestal":"' . $tot15 . '",
            "superficieSilvopastoril":"' . $tot16 . '"
        },';



$tabla = substr($tabla, 0, strlen($tabla) - 1);

echo '[' . $tabla . ']';
