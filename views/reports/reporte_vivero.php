<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>

    <style type="text/css">


        body {
            width: 100%;;
            font-family: Verdana;
            font-size: 12px
        }

        .content {
            width: 900px;
            margin: auto;
        }

        .header_item_logos {
            vertical-align: top;
            display: inline-block;
            text-align: center;
            width: 33%;
        }

        .header_item {
            vertical-align: top;
            display: inline-block;
            text-align: center;
        }

        .header_title {
            width: 100%;
            text-align: center;
            font-size: 2em;
        }

        .field_name {
            font-weight: 800;
            text-align: left;
            width: 440px;
            height: 30px;
        }

        .field_value {
            text-align: left;
            min-width: 440px;
            height: 30px;
        }

        .img_footer {
            margin: auto;
        }

        .left {
            text-align: left;
        }

        .right {
            text-align: right;
        }

        .footer_img {
            vertical-align: top;
            display: inline-block;
            width: 45%;
        }

        ul {
            list-style: none;
        }

        .mmaya {
            margin-left: -30px;
        }

        .content_table {
            position: relative;
            overflow: hidden;
        }

        /* You could use :after - it doesn't really matter */
        .content_table:before {
            content: ' ';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 900px;
            height: 100%;
            z-index: 1;
            opacity: 0.2;
            background-image: url('assets/global/icons/bg_report.png');
            background-repeat: no-repeat;
            background-position: 50% 0;
            -ms-background-size: cover;
            -o-background-size: cover;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            background-size: cover;
        }

        .header_h {
            width: 45%;
            vertical-align: top;
            display: inline-block;
            font-weight: 800;
        }

    </style>

</head>
<body>

<div class="content">

    <?php

    include_once('path.php');
    $path = $BASE_PATH . "/routes/get_vivero_by_id.php?id=" . $_GET["id"];
    $string = file_get_contents($path);
    $json_a = json_decode($string, true);

    foreach ($json_a as $person_name => $person_a) {

    ?>

    <header>
        <ul>
            <li class="header_item_logos left"><img src="assets/global/icons/icon_escudo.png" width="100"
                                                    alt="Estado Plurinacional de bolivia"></li>
            <li class="header_item_logos left mmaya"><img src="assets/global/icons/icon_mmaya.png" width="200"
                                                          alt="Autoridad Plurinacional de la Madre Tierra"></li>
            <li class="header_item_logos right"><img src="assets/global/icons/icon_emagua.gif" width="300"
                                                     alt="Estado Plurinacional de bolivia"></li>
        </ul>

       <!-- <h2 class="header_title"><?php // echo $person_a['titulo_iniciativa']; ?></h2> -->

    </header>

    <table class="content_table">


        <tr>
            <td colspan="2" class="field_name">C&oacute;digo vivero:</td>
            <td colspan="2"
                class="field_value"><?php echo " " . $person_a['id_vivero']; ?></td>
        </tr>


        <tr>
            <td colspan="2" class="field_name">Nombre financiador:</td>
            <td colspan="2"
                class="field_value"><?php echo " " . $person_a['nombre_financiador']; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Nombre cofinanciador:</td>
            <td colspan="2"
                class="field_value"><?php echo " " . $person_a['nombre_cofinanciador']; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Entidad ejecutora:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['entidad_ejecutora']; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="field_name">Superficie vivero:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['superficie_vivero']; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Presupuesto ejecutor:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['presupuesto_ejecutor']; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Presupuesto contraparte:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['presupuesto_contraparte']; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="field_name">Intervencion:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['intervencion']; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Comunidad:</td>
            <td colspan="2"
                class="field_value"><?php echo " " . $person_a['comunidad'] ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Ecoregion:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['id_ecoregion']; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="field_name">Permanente hombre:</td>
            <td colspan="2" class="field_value"><?php echo $person_a['permanente_hombre']  ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Permanente mujer:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['permanente_mujer']; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Temporal hombre:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['temporal_hombre']; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="field_name">Temporal mujer:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['temporal_mujer']; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Tipo vivero:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['tipo_vivero']; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Fase vivero</td>
            <td colspan="2" class="field_value"> <?php

                $string_comuniades = $person_a['fase_vivero'];
                $json_comunidades = json_decode($string_comuniades, true);

                $values = "";

                foreach ($json_comunidades as $comunidades_nae => $comunidades_a) {

//
                    $baseRoute = $path = $BASE_PATH . "/routes/get_fase_vivero.php?id=".$comunidades_a['value'];

                    $values .= file_get_contents($baseRoute).", ";


                }

                echo substr($values, 0, strlen($values) - 2);
                ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Nombre responsable:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['nombre_responsable']; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Nombre propietario:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['nombre_propietario']; ?></td>
        </tr>

        <tr>
            <td colspan="2" class="field_name">Capacidad productiva:</td>
            <td colspan="2" class="field_value"><?php echo " " . $person_a['capacidad_productiva']; ?></td>
        </tr>


    </table>
    <br>
    <br>

    <footer>
        <ul>
            <li class="footer_img left">Con el apoyo de: <br>
                Proyecto Apoyo al Mecanismo<br>
                Conjunto en Acciones de Mitigaci&oacute;n<br>
                Al Cambio Clim&acute;tico en los Bosques de Bolivia<br>
                UNJP/ BOL/ 045/ UNJ
            </li>
            <li class="footer_img right"><img src="assets/global/icons/icon_fao.png"
                                              alt="Organizmo de Naciones Unidas"></li>

        </ul>
    </footer>

    <table>

    </table>

</div>


<?php } ?>

</body>
</html>
