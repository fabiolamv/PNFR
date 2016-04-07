<?php

include_once('../conn.php');

$dep1 = 0;
$dep2 = 0;
$dep3 = 0;
$dep4 = 0;
$dep5 = 0;
$dep6 = 0;
$dep7 = 0;
$dep8 = 0;
$dep9 = 0;


$sql = "SELECT
          proyecto_ubicacion.id_departamento,
          SUM(proyecto.superficie_plantada) AS suma

        FROM proyecto, proyecto_ubicacion
        WHERE proyecto_ubicacion.id_proyecto = proyecto.id_proyecto
        GROUP BY
          proyecto_ubicacion.id_departamento
        ORDER BY id_departamento";


$result = pg_query($conn, $sql);
if (!$result) {
    echo "An error occurred.\n";
    exit;
}


while ($row = pg_fetch_array($result)) {

    if ($row['id_departamento'] == 1) {
        $dep1 = $row['suma'];
    } else if ($row['id_departamento'] == 2) {
        $dep2 = $row['suma'];
    } else if ($row['id_departamento'] == 3) {
        $dep3 = $row['suma'];
    } else if ($row['id_departamento'] == 4) {
        $dep4 = $row['suma'];
    } else if ($row['id_departamento'] == 5) {
        $dep5 = $row['suma'];
    } else if ($row['id_departamento'] == 6) {
        $dep6 = $row['suma'];
    } else if ($row['id_departamento'] == 7) {
        $dep7 = $row['suma'];
    } else if ($row['id_departamento'] == 8) {
        $dep8 = $row['suma'];
    } else if ($row['id_departamento'] == 9) {
        $dep9 = $row['suma'];
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
            $('#container_graph_departamento_superficie').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Superficies Departamentos'
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Superficie (ha)'
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
                        name: 'Chuquisaca',
                        y: <?php echo $dep1;?>
                    }, {
                        name: 'La Paz',
                        y: <?php echo $dep2;?>
                    }, {
                        name: 'Cochambamba',
                        y: <?php echo $dep3;?>
                    }, {
                        name: 'Oruro',
                        y: <?php echo $dep4;?>
                    }, {
                        name: 'Potosí',
                        y: <?php echo $dep5;?>
                    }, {
                        name: 'Tarija',
                        y: <?php echo $dep6;?>
                    }, {
                        name: 'Santa Cruz',
                        y: <?php echo $dep7;?>
                    }, {
                        name: 'Beni',
                        y: <?php echo $dep8;?>
                    }, {
                        name: 'Pando',
                        y: <?php echo $dep9;?>
                    }]
                }]
            });
        });
    </script>
</head>
<body>


<div id="container_graph_departamento_superficie" style="min-width: 200px; height: 300px; margin: 0 auto"></div>
</body>
</html>
