<?php

include_once('../conn.php');


$idProvincia = $_GET['id'];


$sumnumeroplantines = 0;
$sumnumeroestacas = 0;

$sumsuperficieplantada = 0;
$sumnumerobeneficiarios = 0;
$presupuesto = 0;

$sumcantidad = 0;




$sqlGetProyectos = "SELECT
      id_provincia,
      id_proyecto
    FROM proyecto_ubicacion
    WHERE id_provincia = $idProvincia
    GROUP BY id_provincia, id_proyecto";


$resultGetProyectos = pg_query($conn, $sqlGetProyectos);
if (!$resultGetProyectos) {
    echo "An error occurred.\n";
    exit;
}


while ($rowGetProyectos = pg_fetch_array($resultGetProyectos)) {

    $dataIdProyecto = $rowGetProyectos['id_proyecto'];


    $sqlGetEspeciePlantada = "SELECT
          SUM(especie_plantada.numero_plantines) AS sumnumeroplantines,
          SUM(especie_plantada.numero_estacas) AS sumnumeroestacas
        FROM especie_plantada
        WHERE id_proyecto = $dataIdProyecto";


    $resultGetEspeciePlantada = pg_query($conn, $sqlGetEspeciePlantada);
    if (!$resultGetEspeciePlantada) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowGetEspeciePlantada = pg_fetch_array($resultGetEspeciePlantada)) {

        $sumnumeroplantines = $sumnumeroplantines + $rowGetEspeciePlantada['sumnumeroplantines'];
        $sumnumeroestacas = $sumnumeroestacas + $rowGetEspeciePlantada['sumnumeroestacas'];

    }


    $sqlProyecto = "SELECT
          SUM(proyecto.superficie_plantada)                                  AS sumsuperficieplantada,
          SUM(proyecto.numero_de_beneficiarios)                              AS sumnumerobeneficiarios,
          (CASE WHEN proyecto.presupuesto_contraparte IS NULL THEN 0.0 ELSE proyecto.presupuesto_contraparte END +
          CASE WHEN proyecto.presupuesto_ejecutor IS NULL THEN 0.0 ELSE proyecto.presupuesto_ejecutor END) AS presupuesto
        FROM proyecto
        WHERE id_proyecto = $dataIdProyecto
        GROUP BY presupuesto";


    $resultProyecto = pg_query($conn, $sqlProyecto);
    if (!$resultProyecto) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyecto = pg_fetch_array($resultProyecto)) {

        $sumsuperficieplantada = $sumsuperficieplantada + $rowProyecto['sumsuperficieplantada'];
        $sumnumerobeneficiarios = $sumnumerobeneficiarios + $rowProyecto['sumnumerobeneficiarios'];
        $presupuesto = $presupuesto + $rowProyecto['presupuesto'];

    }


    $sqlProyectoParticipantes = "SELECT
          SUM(proyecto_participantes.cantidad) AS cantidad
        FROM proyecto_participantes
        WHERE id_proyecto=$dataIdProyecto";


    $resultProyectoParticipantes = pg_query($conn, $sqlProyectoParticipantes);
    if (!$resultProyectoParticipantes) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyectoParticipantes = pg_fetch_array($resultProyectoParticipantes)) {
        $sumcantidad = $sumcantidad + $rowProyectoParticipantes['cantidad'];

    }

}

$tabla = "";

$tabla .= '{
            "sumnumeroplantinesTotal":"' . $sumnumeroplantines . '",
            "sumnumeroestacasTotal":"' . $sumnumeroestacas . '",
            "sumsuperficieplantadaTotal":"' . $sumsuperficieplantada . '",
            "sumnumerobeneficiariosTotal":"' . $sumnumerobeneficiarios . '",
            "presupuestoTotal":"' . $presupuesto . '",
            "cantidadTotal":"' . $sumcantidad . '"},';


$tabla = substr($tabla, 0, strlen($tabla) - 1);

echo '[' . $tabla . ']';
