<?php

include_once('../conn.php');

foreach ($_GET as $key => $value) {

    $totalFalse = 0;
    $totalTrue = 0;

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


        $sqlFalse = "SELECT count(*) AS contador FROM proyecto WHERE refo_forest= TRUE AND id_proyecto=$idProy";

        $resultFalse = pg_query($conn, $sqlFalse);
        if (!$resultFalse) {
            echo "An error occurred.\n";
            exit;
        }

        while ($rowFalse = pg_fetch_array($resultFalse)) {
            $totalFalse = $totalFalse + $rowFalse['contador'];
        }


//        ----------------------------------


        $sqlTrue = "SELECT count(*) AS contador FROM proyecto WHERE refo_forest= FALSE AND id_proyecto=$idProy";

        $resultTrue = pg_query($conn, $sqlTrue);
        if (!$resultTrue) {
            echo "An error occurred.\n";
            exit;
        }

        while ($rowTrue = pg_fetch_array($resultTrue)) {
            $totalTrue = $totalTrue + $rowTrue['contador'];
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
            $('#container_graph_forestacion').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Reforestación / Forestación'
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
                    name: 'Proyectos',
                    colorByPoint: true,
                    data: [{
                        name: 'Forestación',
                        y: <?php echo $totalFalse;?>
                    }, {
                        name: 'Reforestación',
                        y: <?php echo $totalTrue;?>
                    }]
                }]
            });
        });
    </script>
</head>
<body>


<div id="container_graph_forestacion" style="min-width: 200px; height: 300px; margin: 0 auto"></div>
</body>
</html>
