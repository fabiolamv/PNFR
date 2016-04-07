<?php

require('../conn.php');


$connection = $conn;

$nombre_financiador = $_POST['nombre_financiador'];
$nombre_cofinanciador = $_POST['nombre_cofinanciador'];
$entidad_ejecutora = $_POST['entidad_ejecutora'];

$superficie_vivero = $_POST['superficie_vivero'];
$presupuesto_ejecutor = $_POST['presupuesto_ejecutor'];
$presupuesto_contraparte = $_POST['presupuesto_contraparte'];
$intervencion = $_POST['intervencion'];
$nombre_predio = $_POST['nombre_predio'];
$nombre_propietario = $_POST['nombre_propietario'];
$capacidad_productiva = $_POST['capacidad_productiva'];
$permanente_hombre = $_POST['permanente_hombre'];
$permanente_mujer = $_POST['permanente_mujer'];
$temporal_hombre = $_POST['temporal_hombre'];
$temporal_mujer = $_POST['temporal_mujer'];
$fase_vivero = $_POST['fase_vivero'];
$tipo_vivero = $_POST['tipo_vivero'];

$nombre_responsable = $_POST['nombre_responsable'];
$abastecimiento_agua = $_POST['abastecimiento_agua'];

$intervencion_value = "";
$tipo_vivero_value = "";


if ($intervencion == 1) {
    $intervencion_value = 't';
} else if ($intervencion == 0) {
    $intervencion_value = 'f';
}
if ($tipo_vivero == 1) {
    $tipo_vivero_value = 't';
} else if ($tipo_vivero == 0) {
    $tipo_vivero_value = 'f';
}
// == Insertar departamento, provincia, municipio y comunidades

$departamento = $_POST['departamento'];
$provincia = $_POST['provincia'];
$municipio = $_POST['municipio'];
$comunidad = $_POST['comunidad'];


$lastVivero = "";

$sql_insert_vivero = "INSERT INTO viv_vivero
      (nombre_financiador, nombre_cofinanciador, entidad_ejecutora, superficie_vivero, presupuesto_ejecutor, presupuesto_contraparte, intervencion, nombre_predio, nombre_propietario,
      capacidad_productiva, permanente_hombre, permanente_mujer, temporal_hombre, temporal_mujer, fase_vivero, tipo_vivero, nombre_responsable, abastecimiento_agua)
    VALUES
      (" . "'" . $nombre_financiador . "', "
    . "'" . $nombre_cofinanciador . "', "
    . "'" . $entidad_ejecutora . "', "
    . $superficie_vivero . ", "
    . $presupuesto_ejecutor . ", "
    . $presupuesto_contraparte . ", "
    . "'" . $intervencion_value . "', "
    . "'" . $nombre_predio . "', "
    . "'" . $nombre_propietario . "', "
    . $capacidad_productiva . ", "
    . $permanente_hombre . ", "
    . $permanente_mujer . ", "
    . $temporal_hombre . ", "
    . $temporal_mujer . ", "
    . "'" . $fase_vivero . "', "
    . "'" . $tipo_vivero_value . "', "
    . "'" . $nombre_responsable . "', "
    . "'" . $abastecimiento_agua . "')";
    


echo $sql_insert_vivero;

$result_vivero = pg_query($conn, $sql_insert_vivero);

if ($result_vivero) {

    $sqlLasVivero = "SELECT MAX (id_vivero) FROM viv_vivero LIMIT 1 ";

    $resultLastVivero = pg_query($conn, $sqlLasVivero);
    if ($resultLastVivero) {
        while ($row = pg_fetch_row($resultLastVivero)) {
            
            
            
            $lastVivero = $row[0];

           
        }

    }else{
        $lastVivero = "ERROR";
    }


    if ($lastVivero != "ERROR") {

        $sql_insert_ubicacion = "INSERT INTO viv_vivero_ubicacion
        (id_departamento, id_provincia, id_municipio, id_comunidad, id_vivero)

        VALUES
            (" . $departamento . ", "
            . $provincia . ", "
            . $municipio . ", "
            . "'".$comunidad . "', "
            . $lastVivero . ")";
        

        
        $result_ubicacion = pg_query($conn, $sql_insert_ubicacion);


    } else {
        echo "ERROR";
    }


} else {
    echo "ERROR";
}