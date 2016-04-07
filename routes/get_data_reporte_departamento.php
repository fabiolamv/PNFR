<?php

include_once('../conn.php');


$idDepartamento = $_GET['id'];


$sumnumeroplantines = 0;
$sumnumeroestacas = 0;

$sumsuperficieplantada = 0;
$sumnumerobeneficiarios = 0;

$presupuestoEjecutor = 0;
$presupuestoContraparte = 0;

$sumcantidad = 0;


$suma_superficie_reforestada  = 0;
$suma_superficie_forestada  = 0;

$sumempleos = 0;

$suma_conservacion = 0;
$suma_recuperacion = 0;
$suma_proteccion = 0;
$suma_comercial = 0;
$suma_ornamental = 0;
$suma_sistema_agroforestal = 0;
$suma_sistema_silvopastoril = 0;





$sqlGetProyectos = "SELECT
      id_departamento,
      id_proyecto
    FROM proyecto_ubicacion
    WHERE id_departamento = $idDepartamento
    GROUP BY id_departamento, id_proyecto";
 //echo "......................................".$sqlGetProyectos."...........................................";


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
          SUM(proyecto.presupuesto_ejecutor)                                 AS presupuestoejecutor,
          SUM(proyecto.presupuesto_contraparte)                              AS presupuestocontraparte
        FROM proyecto
        WHERE id_proyecto = $dataIdProyecto";



    $resultProyecto = pg_query($conn, $sqlProyecto);
    if (!$resultProyecto) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyecto = pg_fetch_array($resultProyecto)) {

        $sumsuperficieplantada = $sumsuperficieplantada + $rowProyecto['sumsuperficieplantada'];
        $sumnumerobeneficiarios = $sumnumerobeneficiarios + $rowProyecto['sumnumerobeneficiarios'];
        $presupuestoEjecutor = $presupuestoEjecutor + $rowProyecto['presupuestoejecutor'];
        $presupuestoContraparte = $presupuestoContraparte +  $rowProyecto['presupuestocontraparte'];

    }



    $sqlProyectoSuperficieRefores = "SELECT
            SUM (proyecto.superficie_plantada) AS suma_superficie_reforestada
            FROM proyecto
            WHERE refo_forest = true
            AND id_proyecto = $dataIdProyecto";



    $resultProyectoSuperficieRefores = pg_query($conn, $sqlProyectoSuperficieRefores);
    if (!$resultProyectoSuperficieRefores) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyectoSuperficieRefores = pg_fetch_array($resultProyectoSuperficieRefores)) {

        $suma_superficie_reforestada = $suma_superficie_reforestada + $rowProyectoSuperficieRefores['suma_superficie_reforestada'];
       
        

    }


     $sqlProyectoSuperficieFores = "SELECT
            SUM (proyecto.superficie_plantada) AS suma_superficie_forestada
                FROM proyecto
                WHERE id_proyecto = $dataIdProyecto
                AND refo_forest = false";
    // echo "......................................".$sqlProyectoSuperficieFores."...........................................";



    $resultProyectoSuperficieFores = pg_query($conn, $sqlProyectoSuperficieFores);
    if (!$resultProyectoSuperficieFores) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyectoSuperficieFores = pg_fetch_array($resultProyectoSuperficieFores)) {

       
        $suma_superficie_forestada = $suma_superficie_forestada + $rowProyectoSuperficieFores['suma_superficie_forestada'];
        

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

     $sqlProyectoEmpleo = "SELECT
        SUM (proyecto_empleo.cantidad) AS total_empleos
        FROM proyecto_empleo
        WHERE id_proyecto=$dataIdProyecto";


    $resultProyectoEmpleo = pg_query($conn, $sqlProyectoEmpleo);
    if (!$resultProyectoEmpleo) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyectoEmpleo = pg_fetch_array($resultProyectoEmpleo)) {
        $sumempleos = $sumempleos + $rowProyectoEmpleo['total_empleos'];

    }



     $sqlProyectoConservacion = "SELECT
          
            SUM (proyecto.superficie_plantada)                  AS suma_conservacion
            FROM proyecto
            WHERE id_proyecto = $dataIdProyecto
            AND id_tipo_plantacion = 1";
       //echo "......................................".$sqlProyectoConservacion."...........................................";

    $resultProyectoConservacion = pg_query($conn, $sqlProyectoConservacion);
    if (!$resultProyectoConservacion) {
        echo "An error occurred.\n";
        exit;
    }







    while ($rowProyectoConservacion = pg_fetch_array($resultProyectoConservacion)) {

       $suma_conservacion = $suma_conservacion + $rowProyectoConservacion['suma_conservacion'];


   }





    $sqlProyectoRecuperacion = "SELECT
          
            
            SUM (proyecto.superficie_plantada)          AS suma_recuperacion
            FROM proyecto
            WHERE id_proyecto = $dataIdProyecto
            AND id_tipo_plantacion = 2";
            


    $resultProyectoRecuperacion = pg_query($conn, $sqlProyectoRecuperacion);
    if (!$resultProyectoRecuperacion) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyectoRecuperacion = pg_fetch_array($resultProyectoRecuperacion)) {

        $suma_recuperacion = $suma_recuperacion + $rowProyectoRecuperacion['suma_recuperacion'];
       

    }


    $sqlProyectoProteccion = "SELECT
          
           
            SUM (proyecto.superficie_plantada)          AS suma_proteccion
            FROM proyecto
            WHERE id_proyecto = $dataIdProyecto 
            AND id_tipo_plantacion = 3";


    $resultProyectoProteccion = pg_query($conn, $sqlProyectoProteccion);
    if (!$resultProyectoProteccion) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyectoProteccion = pg_fetch_array($resultProyectoProteccion)) {

       
        $suma_proteccion = $suma_proteccion + $rowProyectoProteccion['suma_proteccion'];
        

    }



    $sqlProyectoComercial = "SELECT
          
           
            SUM (proyecto.superficie_plantada)          AS suma_comercial
            FROM proyecto
            WHERE id_proyecto = $dataIdProyecto 
            AND id_tipo_plantacion = 4";


    $resultProyectoComercial = pg_query($conn, $sqlProyectoComercial);
    if (!$resultProyectoComercial) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyectoComercial = pg_fetch_array($resultProyectoComercial)) {

        $suma_comercial = $suma_comercial +  $rowProyectoComercial['suma_comercial'];

    }



    $sqlProyectoOrnamental = "SELECT
          
            
            SUM (proyecto.superficie_plantada)          AS suma_ornamental
            FROM proyecto
            WHERE id_proyecto = $dataIdProyecto
            AND id_tipo_plantacion = 5";


    $resultProyectoOrnamental = pg_query($conn, $sqlProyectoOrnamental);
    if (!$resultProyectoOrnamental) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyectoOrnamental = pg_fetch_array($resultProyectoOrnamental)) {

        
        $suma_ornamental = $suma_ornamental +  $rowProyectoOrnamental['suma_ornamental'];
        
    }



    $sqlProyectoAgroforestal = "SELECT
          
            SUM (proyecto.superficie_plantada)          AS suma_sistema_agroforestal
            FROM proyecto
            WHERE id_proyecto = $dataIdProyecto 
            AND id_tipo_plantacion = 6";


    $resultProyectoAgroforestal = pg_query($conn, $sqlProyectoAgroforestal);
    if (!$resultProyectoAgroforestal) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyectoAgroforestal = pg_fetch_array($resultProyectoAgroforestal)) {

        $suma_sistema_agroforestal = $suma_sistema_agroforestal +  $rowProyectoAgroforestal['suma_sistema_agroforestal'];
       

    }


    $sqlProyectoSilvopastoril = "SELECT
               
            SUM (proyecto.superficie_plantada)          AS suma_sistema_silvopastoril
            FROM proyecto
            WHERE id_proyecto = $dataIdProyecto 
            AND id_tipo_plantacion = 7";


    $resultProyectoSilvopastoril = pg_query($conn, $sqlProyectoSilvopastoril);
    if (!$resultProyectoSilvopastoril) {
        echo "An error occurred.\n";
        exit;
    }


    while ($rowProyectoSilvopastoril = pg_fetch_array($resultProyectoSilvopastoril)) {

        
        $suma_sistema_silvopastoril = $suma_sistema_silvopastoril +  $rowProyectoSilvopastoril['suma_sistema_silvopastoril'];


    }



}

$tabla = "";

$tabla .= '{            
"sumnumeroplantinesTotal":"' . $sumnumeroplantines .'",             
"sumnumeroestacasTotal":"' . $sumnumeroestacas . '",
"sumsuperficieplantadaTotal":"' . $sumsuperficieplantada . '",
"sumnumerobeneficiariosTotal":"' . $sumnumerobeneficiarios . '",
"presupuestoEjecutor":"' . $presupuestoEjecutor . '",
"presupuestoContraparte":"' . $presupuestoContraparte . '",
"cantidadTotal":"' . $sumcantidad . '",
"superficieReforestada":"' . $suma_superficie_reforestada . '",
"superficieForestada":"' . $suma_superficie_forestada . '",
"empleosTotal":"' . $sumempleos . '",
"superficieConservacion":"' . $suma_conservacion . '",
"superficieRecuperacion":"' . $suma_recuperacion . '",
"superficieProteccion":"' . $suma_proteccion . '",
"superficieComercial":"' . $suma_comercial . '",
"superficieOrnamental":"' . $suma_ornamental . '",
"superficieAgroforestal":"' . $suma_sistema_agroforestal . '",
"superficieSilvopastoril":"' . $suma_sistema_silvopastoril . '"


        },';



$tabla = substr($tabla, 0, strlen($tabla) - 1);

echo '[' . $tabla . ']';
