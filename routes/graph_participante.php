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
    $total8 = 0;
    $total9 = 0;
    $total10 = 0;
    $total11 = 0;

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


        $sql1 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=1 GROUP BY id_tipo_participante";


        $result1 = pg_query($conn, $sql1);
        if (!$result1) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row1 = pg_fetch_array($result1)) {
            $total1 = $total1 + $row1['total'];
        }


//        ----------------------------------


        $sql2 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=2 GROUP BY id_tipo_participante";


        $result2 = pg_query($conn, $sql2);
        if (!$result2) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row2 = pg_fetch_array($result2)) {
            $total2 = $total2 + $row2['total'];
        }

//        ---------------------------------------------------


        $sql3 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=3 GROUP BY id_tipo_participante";


        $result3 = pg_query($conn, $sql3);
        if (!$result3) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row3 = pg_fetch_array($result3)) {
            $total3 = $total3 + $row3['total'];
        }


//        -------------------------------------------------



        $sql4 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=4 GROUP BY id_tipo_participante";


        $result4 = pg_query($conn, $sql4);
        if (!$result4) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row4 = pg_fetch_array($result4)) {
            $total4 = $total4 + $row4['total'];
        }


//        --------------------------------------------




        $sql5 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=5 GROUP BY id_tipo_participante";


        $result5 = pg_query($conn, $sql5);
        if (!$result5) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row5 = pg_fetch_array($result5)) {
            $total5 = $total5 + $row5['total'];
        }

//-----------------------------------------------------------



        $sql6 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=6 GROUP BY id_tipo_participante";


        $result6 = pg_query($conn, $sql6);
        if (!$result6) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row6 = pg_fetch_array($result6)) {
            $total6 = $total6 + $row6['total'];
        }


//        ---------------------------------------------



        $sql7 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=7 GROUP BY id_tipo_participante";


        $result7 = pg_query($conn, $sql7);
        if (!$result7) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row7 = pg_fetch_array($result7)) {
            $total7 = $total7 + $row7['total'];
        }

//        ------------------------------

        $sql8 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=8 GROUP BY id_tipo_participante";


        $result8 = pg_query($conn, $sql8);
        if (!$result8) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row8 = pg_fetch_array($result8)) {
            $total8 = $total8 + $row8['total'];
        }

//        ------------------------------------------------

        $sql9 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=9 GROUP BY id_tipo_participante";


        $result9 = pg_query($conn, $sql9);
        if (!$result9) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row9 = pg_fetch_array($result9)) {
            $total9 = $total9 + $row9['total'];
        }



//        -------------------------------------------

        $sql10 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=10 GROUP BY id_tipo_participante";


        $result10 = pg_query($conn, $sql10);
        if (!$result10) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row10 = pg_fetch_array($result10)) {
            $total10 = $total10 + $row10['total'];
        }


//        -----------------------------------------


        $sql11 = "SELECT sum(cantidad) AS total FROM proyecto_participantes WHERE id_proyecto = $idProy AND id_tipo_participante=11 GROUP BY id_tipo_participante";


        $result11 = pg_query($conn, $sql11);
        if (!$result11) {
            echo "An error occurred.\n";
            exit;
        }

        while ($row11 = pg_fetch_array($result11)) {
            $total11 = $total11 + $row11['total'];
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
            $('#container_graph_participante').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Participantes'
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Cantidad de Personas'
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
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> personas<br/>'
                },

                series: [{
                    name: 'Personas',
                    colorByPoint: true,
                    data: [{
                        name: 'Beneficiarios',
                        y: <?php echo $total1;?>
                    }, {
                        name: 'Fuerzas armadas',
                        y: <?php echo $total2;?>
                    }, {
                        name: 'Funcionarios públicos',
                        y: <?php echo $total3;?>
                    }, {
                        name: 'Estudiantes de primaria',
                        y: <?php echo $total4;?>
                    }, {
                        name: 'Estudiantes de secundaria',
                        y: <?php echo $total5;?>
                    }, {
                        name: 'ONGs y cooperación',
                        y: <?php echo $total6;?>
                    }, {
                        name: 'Scouts',
                        y: <?php echo $total7;?>
                    }, {
                        name: 'Entidad ejecutora',
                        y: <?php echo $total8;?>
                    }, {
                        name: 'Plane',
                        y: <?php echo $total9;?>
                    }, {
                        name: 'Universidades',
                        y: <?php echo $total10;?>
                    }, {
                        name: 'Otros',
                        y: <?php echo $total11;?>
                    }]
                }]
            });
        });
    </script>
</head>
<body>


<div id="container_graph_participante" style="min-width: 200px; height: 300px; margin: 0 auto"></div>
</body>
</html>
