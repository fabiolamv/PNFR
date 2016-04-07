<?php

include_once('../conn.php');

$idMunicipio = $_GET['id'];

$sql = "SELECT
  especie_plantada.id_proyecto,proyecto_municipio.id_municipio,
  SUM(proyecto.superficie_plantada)       AS sum_superficie_plantada,
  SUM(proyecto.superficie_plantada_track) AS sum_superficie_plantada_track,
  SUM(proyecto.numero_de_beneficiarios)   AS sum_nro_beneficiarios,
  (proyecto.presupuesto_ejecutor + proyecto.presupuesto_contraparte) AS total_presupuesto,
  SUM(especie_plantada.numero_plantines)  AS sum_nro_plantines,
  SUM(especie_plantada.numero_estacas)    AS sum_nro_estacas,
  (SELECT SUM(cantidad) AS cant
   FROM proyecto_participantes
   WHERE proyecto.id_proyecto = proyecto_participantes.id_proyecto
   GROUP BY proyecto_participantes.id_proyecto)         AS sum_cant
FROM especie_plantada, proyecto_municipio, proyecto
WHERE proyecto.id_proyecto = especie_plantada.id_proyecto
and proyecto.id_proyecto = proyecto_municipio.id_proyecto
and proyecto_municipio.id_municipio=$idMunicipio

GROUP BY especie_plantada.id_proyecto, sum_cant, proyecto_municipio.id_municipio, total_presupuesto
ORDER BY id_proyecto";


$result = pg_query($conn, $sql);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}


$id = "";
$tabla = "";

$sum_superficie_plantada = 0;
$sum_superficie_plantada_track = 0;
$sum_nro_beneficiarios = 0;
$sum_total_presupuesto = 0;
$sum_nro_plantines = 0;
$sum_nro_estacas = 0;
$sum_cant = 0;

while ($row = pg_fetch_array($result)) {

    $sum_superficie_plantada = $sum_superficie_plantada + $row['sum_superficie_plantada'];
    $sum_superficie_plantada_track = $sum_superficie_plantada_track + $row['sum_superficie_plantada_track'];
    $sum_nro_beneficiarios = $sum_nro_beneficiarios + $row['sum_nro_beneficiarios'];
    $sum_total_presupuesto = $sum_total_presupuesto + $row['total_presupuesto'];
    $sum_nro_plantines = $sum_nro_plantines + $row['sum_nro_plantines'];
    $sum_nro_estacas = $sum_nro_estacas + $row['sum_nro_estacas'];
    $sum_cant = $sum_cant + $row['sum_cant'];
}

$tabla .= '{
            "id_proyecto":"' . 1 . '",
            "id_municipio":"' . 1 . '",
            "superficie_plantada":"' . $sum_superficie_plantada . '",
            "superficie_plantada_track":"' . $sum_superficie_plantada_track . '",
            "nro_beneficiarios":"' . $sum_nro_beneficiarios . '",
            "total_presupuesto":"' . $sum_total_presupuesto . '",
            "nro_plantines":"' . $sum_nro_plantines . '",
            "nro_estacas":"' . $sum_nro_estacas . '",
            "cantidad":"' . $sum_cant . '"},';

$id++;


$tabla = substr($tabla, 0, strlen($tabla) - 1);

echo '[' . $tabla . ']';

