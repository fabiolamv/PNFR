<?php

include_once('../conn.php');

foreach ($_GET as $key => $value) {

    $total1 = 0;
    $total2 = 0;
    $total3 = 0;
    $total4 = 0;
    $total5 = 0;
    $total6 = 0;
    $total7 = 0;

    $tableSelect = "";

    if ($key == "idDepartamento") {
        $tableSelect = "id_departamento";
    }

    if ($key == "idProvincia") {
        $tableSelect = "id_provincia";
    }

    if ($key == "idMunicipio") {
        $tableSelect = "id_municipio";
    }


    $sql = "SELECT
          $tableSelect,
          id_proyecto
        FROM proyecto_ubicacion
        WHERE $tableSelect = $value
        GROUP BY $tableSelect, id_proyecto";



    $result = pg_query($conn, $sql);
    if (!$result) {
        echo "An error occurred.\n";
        exit;
    }


    while ($row = pg_fetch_array($result)) {

        $idDepto = $row['id_departamento'];
        $idProy = $row['id_proyecto'];


        $sql1 = "SELECT count(*) AS contador FROM proyecto WHERE id_tipo_plantacion = 1 AND id_proyecto=$idProy";

        $result1 = pg_query($conn, $sql1);
        if (!$result1) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row1 = pg_fetch_array($result1)) {
            $total1 = $total1 + $row1['contador'];
        }


//        ----------------------------------


        $sql2 = "SELECT count(*) AS contador FROM proyecto WHERE id_tipo_plantacion = 2 AND id_proyecto=$idProy";

        $result2 = pg_query($conn, $sql2);
        if (!$result2) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row2 = pg_fetch_array($result2)) {
            $total2 = $total2 + $row2['contador'];
        }


//        -------------------------------------------------------------


        $sql3 = "SELECT count(*) AS contador FROM proyecto WHERE id_tipo_plantacion= 3 AND id_proyecto=$idProy";

        $result3 = pg_query($conn, $sql3);
        if (!$result3) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row3 = pg_fetch_array($result3)) {
            $total3 = $total3 + $row3['contador'];
        }


//        ------------------------------------------------------------------


        $sql4 = "SELECT count(*) AS contador FROM proyecto WHERE id_tipo_plantacion= 4 AND id_proyecto=$idProy";

        $result4 = pg_query($conn, $sql4);
        if (!$result4) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row4 = pg_fetch_array($result4)) {
            $total4 = $total4 + $row4['contador'];
        }

//        -----------------------------------------------



        $sql5 = "SELECT count(*) AS contador FROM proyecto WHERE id_tipo_plantacion= 5 AND id_proyecto=$idProy";

        $result5 = pg_query($conn, $sql5);
        if (!$result5) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row5 = pg_fetch_array($result5)) {
            $total5 = $total5 + $row5['contador'];
        }

//        --------------------------------------------

        $sql6 = "SELECT count(*) AS contador FROM proyecto WHERE id_tipo_plantacion= 6 AND id_proyecto=$idProy";

        $result6 = pg_query($conn, $sql6);
        if (!$result6) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row6 = pg_fetch_array($result6)) {
            $total6 = $total6 + $row6['contador'];
        }

//        -------------------------------------------------

        $sql7 = "SELECT count(*) AS contador FROM proyecto WHERE id_tipo_plantacion= 7 AND id_proyecto=$idProy";

        $result7 = pg_query($conn, $sql7);
        if (!$result7) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row7 = pg_fetch_array($result7)) {
            $total7 = $total7 + $row7['contador'];
        }


    }

}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Highcharts Example</title>


    <style type="text/css">
        ${demo.css}
    </style>
    <script type="text/javascript">
        $(function () {
            // Create the chart
            $('#container_graph_tipo_plantacion').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Tipo Plantación'
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Total Proyectos'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.1f}'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> proyecto(s) del total<br/>'
                },

                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [{
                        name: 'Conservacion',
                        y: <?php echo $total1;?>
                    }, {
                        name: 'Recuperación',
                        y: <?php echo $total2;?>
                    }, {
                        name: 'Protección',
                        y: <?php echo $total3;?>
                    },{
                        name: 'Comercial',
                        y: <?php echo $total4;?>
                    },{
                        name: 'Hornamental',
                        y: <?php echo $total5;?>
                    },{
                        name: 'Sistema agroforestal',
                        y: <?php echo $total6;?>
                    },{
                        name: 'Sistema silvopastoril',
                        y: <?php echo $total7;?>
                    }]
                }]
            });
        });
    </script>
</head>
<body>


<div id="container_graph_tipo_plantacion" style="min-width: 200px; height: 300px; margin: 0 auto"></div>
</body>
</html>
