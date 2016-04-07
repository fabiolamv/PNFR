<?php

include_once('../conn.php');

$idProyecto = $_GET['id'];

$idProy = "";
$fecha_fin_plantacion = "";
$superficie_plantada = "";
$nombre_lugar = "";
$nombre_propietario = "";
$departamento = "";
$provincia = "";
$municipio = "";
$comunidad = "";

//--------------------------------------------------------------------------

$sql1 = "SELECT
      id_proyecto,
      fecha_fin_plantacion,
      superficie_plantada,
      nombre_lugar,
      nombre_propietario
    FROM proyecto
    WHERE id_proyecto = $idProyecto";


$result1 = pg_query($conn, $sql1);
if (!$result1) {
    echo "An error occurred.\n";
    exit;
}


while ($row1 = pg_fetch_array($result1)) {

    $idProy = $row1['id_proyecto'];
    $fecha_fin_plantacion = $row1['fecha_fin_plantacion'];
    $superficie_plantada = $row1['superficie_plantada'];
    $nombre_lugar = $row1['nombre_lugar'];
    $nombre_propietario = $row1['nombre_propietario'];


}


//--------------------------------------------------------------------------

$sql2 = "SELECT DISTINCT 
          departamento.nombre_departamento
          FROM departamento, proyecto_ubicacion
          WHERE departamento.id_departamento= proyecto_ubicacion.id_departamento
          AND proyecto_ubicacion.id_proyecto= $idProyecto";

$result2 = pg_query($conn, $sql2);
if (!$result2) {
    echo "An error occurred.\n";
    exit;
}


while ($row2 = pg_fetch_array($result2)) {

    $departamento = $row2['nombre_departamento'];


}

//_______________________________________________________

$sql3 = "SELECT DISTINCT 
          provincia.nombre_provincia 
          FROM provincia, proyecto_ubicacion
          WHERE provincia.id_provincia = proyecto_ubicacion.id_provincia
          AND proyecto_ubicacion.id_proyecto = $idProyecto";

$result3 = pg_query($conn, $sql3);
if (!$result3) {
    echo "An error occurred.\n";
    exit;
}


while ($row3 = pg_fetch_array($result3)) {

    $provincia = $row3['nombre_provincia'];


}


//____________________________________________________-

$sql4 = "SELECT DISTINCT 
          municipio.nombre_municipio
          FROM municipio, proyecto_ubicacion
          WHERE municipio.id_municipio = proyecto_ubicacion.id_municipio
          AND proyecto_ubicacion.id_proyecto = $idProyecto";

$result4 = pg_query($conn, $sql4);
if (!$result4) {
    echo "An error occurred.\n";
    exit;
}


while ($row4 = pg_fetch_array($result4)) {

    $municipio = $row4['nombre_municipio'];

}

//______________________________________________________

$sql5 = "SELECT DISTINCT 
          comunidad.nombre_comunidad 
          FROM comunidad, proyecto_ubicacion
          WHERE comunidad.id_comunidad= proyecto_ubicacion.id_comunidad
          AND proyecto_ubicacion.id_proyecto = $idProyecto";

$result5 = pg_query($conn, $sql5);
if (!$result5) {
    echo "An error occurred.\n";
    exit;
}


while ($row5 = pg_fetch_array($result5)) {

    $comunidad = $row5['nombre_comunidad'] . ", " . $comunidad;

    $com = substr($comunidad, 0, strlen($comunidad) - 2);

}
$tabla = "";
$tabla .= '{
            "idProy":"' . $idProy . '",
            "fecha_fin_plantacion":"' . $fecha_fin_plantacion . '",
            "superficie_plantada":"' . $superficie_plantada . '",
            "nombre_lugar":"' . $nombre_lugar . '",
            "nombre_propietario":"' . $nombre_propietario . '",
            "departamento":"' . $departamento . '",
            "provincia":"' . $provincia . '",
            "municipio":"' . $municipio . '",
            "comunidad":"' . $com . '"},';


$tabla = substr($tabla, 0, strlen($tabla) - 1);

echo '[' . $tabla . ']';