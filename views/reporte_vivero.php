<?php
include_once('header.php');
include_once('path.php');





?>


<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Sistema de Monitoreo Holístico e Integral de Bosques
                </h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->

            <!-- END PAGE TOOLBAR -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.html">Home</a>
                <i class="fa fa-circle"></i>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">


            <div class="col-md-12">

                <div class="portlet light bordered" id="form_wizard_1">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-red"></i>
                                                    <span class="caption-subject font-red bold uppercase"> Formulario Reportes

                                                    </span>
                        </div>

                    </div>
                    <div class="portlet-body form">

                        <?php

                        $path = $BASE_PATH . "/routes/get_totales_reporte_municipio.php";
                        $string = file_get_contents($path);
                        $json_a = json_decode($string, true);

                        foreach ($json_a as $person_name => $person_a) {

                        ?>


                        <form class="form-horizontal" action="#" id="submit_form" method="POST">
                            <div class="form-wizard">
                                <div class="form-body">


                                    <div class="tab-content">


                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Instituciones</label>

                                                <div class="col-md-8">
                                                    <select name="instituciones" id="instituciones" class="form-control">
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Departamento</label>

                                                <div class="col-md-8">
                                                    <select name="departamento" id="departamento" class="form-control">
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-4">Provincia</label>

                                                <div class="col-md-8">
                                                    <select name="provincia" id="provincia" class="form-control">
                                                        <option value="0">Seleccione provincia</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-4">Municipio</label>

                                                <div class="col-md-8">
                                                    <select name="municipio" id="municipio" class="form-control">
                                                        <option value="0">Seleccione municipio</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-4">Fecha inicio

                                                </label>

                                                <div class="col-md-8">
                                                    <input
                                                        class="form-control date-picker"
                                                        type="text" value=""/>

                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-4">Fecha fin

                                                </label>

                                                <div class="col-md-8">
                                                    <input
                                                        class="form-control date-picker"
                                                        type="text" value=""/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Número de Estacas</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="numero_estacas"
                                                           value="<?php echo " " . $person_a['estacas']; ?>" id="numero_estacas"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Número de plantines
                                                </label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="numero_plantines"
                                                           value="<?php echo " " . $person_a['plantines']; ?>" id="numero_plantines"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Total plantaciones forestales</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="total_plantaciones"
                                                           value="<?php echo " " . $person_a['sumEstacaPlantines']; ?>" id="total_plantaciones"/>

                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Superficie Forestada
                                                    (ha)</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['superficieForestada']; ?>"
                                                           name="superficie_forestada"
                                                           id="superficie_forestada"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Superficie Reforestada
                                                    (ha)</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['superficieReforestada']; ?>"
                                                           name="superficie_reforestada"
                                                           id="superficie_reforestada"/>

                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="control-label col-md-4">Superficie total plantaciones forestales
                                                    (ha)</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['superficie']; ?>"
                                                           name="superficie_total_intervenida"
                                                           id="superficie_total_intervenida"/>

                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-4">Presupuesto Ejecutor</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="presupuesto_ejecutor"
                                                           value="<?php echo " " . $person_a['presupuestoEjecutor']; ?>"
                                                           id="presupuesto_ejecutor"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Presupuesto contraparte</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="presupuesto_contraparte"
                                                           value="<?php echo " " . $person_a['presupuestoContraparte']; ?>"
                                                           id="presupuesto_contraparte"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Número de beneficiarios

                                                </label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['beneficiarios']; ?>"
                                                           name="beneficiarios" id="beneficiarios"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Número de participantes

                                                </label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="participantes"
                                                           value="<?php echo " " . $person_a['participantes']; ?>" id="participantes"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Número de empleos generados

                                                </label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="empleos"
                                                           value="<?php echo " " . $person_a['empleos']; ?>" id="empleos"/>

                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-md-4">


                                            

                                            <h5>Superficie tipo plantación </h5>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Superficie sistema agroforestal
                                                    (ha)</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['superficieAgroforestal']; ?>"
                                                           name="superficie_agroforestal"
                                                           id="superficie_agroforestal"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Superficie sistema silvopastoril
                                                    (ha)</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['superficieSilvopastoril']; ?>"
                                                           name="superficie_silvopastoril"
                                                           id="superficie_silvopastoril"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Superficie comercial
                                                    (ha)</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['superficieComercial']; ?>"
                                                           name="superficie_comercial"
                                                           id="superficie_comercial"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Superficie ornamental
                                                    (ha)</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['superficieOrnamental']; ?>"
                                                           name="superficie_ornamental"
                                                           id="superficie_ornamental"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Superficie recuperación
                                                    (ha)</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['superficieRecuperacion']; ?>"
                                                           name="superficie_recuperacion"
                                                           id="superficie_recuperacion"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Superficie conservación
                                                    (ha)</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['superficieConservacion']; ?>"
                                                           name="superficie_conservacion"
                                                           id="superficie_conservacion"/>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Superficie protección
                                                    (ha)</label>

                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo " " . $person_a['superficieProteccion']; ?>"
                                                           name="superficie_proteccion"
                                                           id="superficie_proteccion"/>

                                                </div>
                                            </div>



                                            

                                        </div>


                                        <div class="form-group">
                                        </div>


                                    </div>
                                </div>
                            </div>

                    </div>

                    </form>
                    <?php } ?>
                </div>

            </div>


            <div class="col-md-4">
                <div class="portlet light bordered" id="form_wizard_1">

                    <div class="portlet-body form">

                        <div id="graph_departamento_superficie"></div>

                        <hr>

                        <div id="graph_forestacion"></div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="portlet light bordered" id="form_wizard_1">

                    <div class="portlet-body form">

                        <div id="graph_plantines_departamento"></div>

                        <hr>

                        <div id="graph_participantes"></div>


                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="portlet light bordered" id="form_wizard_1">

                    <div class="portlet-body form">

                        <div id="graph_presupuesto_departamento"></div>

                        <hr>

                        <div id="graph_tipo_plantacion"></div>


                    </div>
                </div>
            </div>


        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include_once('footer.php'); ?>

<script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

<script src="assets/js/highcharts.js"></script>

<script type="text/javascript">

    fillInstitucionesSelect();
    function fillInstitucionesSelect(){
        $.getJSON("routes/get_instituciones.php", function (json) {
            $('#instituciones').append($('<option>').text("Seleccione instituciones").attr('value', 0));
            $.each(json, function (i, obj) {
                $('#instituciones').append($('<option>').text(obj.value).attr('value', obj.id));
            });
            $('#instituciones').append($('<option>').text(" -- TODOS -- ").attr( { value:"10", selected:"selected" } ));

            callSingullarGraphs();
        });
    }


    fillDepartamentosSelect();

    function fillDepartamentosSelect() {
        $.getJSON("routes/get_departamentos.php", function (json) {
            $('#departamento').append($('<option>').text("Seleccione departamento").attr('value', 0));
            $.each(json, function (i, obj) {
                $('#departamento').append($('<option>').text(obj.value).attr('value', obj.id));
            });
            $('#departamento').append($('<option>').text(" -- TODOS -- ").attr( { value:"10", selected:"selected" } ));

            callSingullarGraphs();
        });
    }

    $('#departamento').on('change', function (e) {
        var valueSelected = this.value;
        fillProvinciasSelect(valueSelected);
    });

    function fillProvinciasSelect(idDepartamento) {

        var route = "routes/get_provincias.php?id=" + idDepartamento;

        $.getJSON(route, function (json) {
            $('#provincia').empty();
            $('#provincia').append($('<option>').text("Seleccione provincia").attr('value', 0));
            $.each(json, function (i, obj) {
                $('#provincia').append($('<option>').text(obj.value).attr('value', obj.id));
            });
        });
    }

    $('#provincia').on('change', function (e) {
        var valueSelected = this.value;
        fillMunicipiosSelect(valueSelected);
    });

    function fillMunicipiosSelect(idProvincia) {
        var route = "routes/get_municipios.php?id=" + idProvincia;

        $.getJSON(route, function (json) {
            $('#municipio').empty();
            $('#municipio').append($('<option>').text("Seleccione municipio").attr('value', 0));
            $.each(json, function (i, obj) {
                $('#municipio').append($('<option>').text(obj.value).attr('value', obj.id));
            });
        });
    }


    //    -------------------------------------------------------------------------------------------------

    var idDepartamentoSelect = "";
    var idProvinciaSelect = "";
    var idMunicipioSelect = "";


    $('#departamento').on('change', function (e) {
        idDepartamentoSelect = this.value;

        console.log(idDepartamentoSelect);

        var route = "routes/get_data_reporte_departamento.php?id=" + idDepartamentoSelect;

        console.log(route);

        $.getJSON(route, function (json) {

            $.each(json, function (i, obj) {

                console.log(obj.nro_beneficiarios);

//                $('#nro_beneficiarios').val(obj.nro_beneficiarios);
                $('#numero_plantines').val(obj.sumnumeroplantinesTotal);
                $('#numero_estacas').val(obj.sumnumeroestacasTotal);

                var tot_plant = parseInt($('#numero_plantines').val());
                var tot_estac = parseInt($('#numero_estacas').val());

                var totPlantaciones = tot_plant + tot_estac;

                if (isNaN(totPlantaciones)) {
                    totPlantaciones = "";
                }

                $('#total_plantaciones').val(totPlantaciones);

                $('#superficie_total_intervenida').val(obj.sumsuperficieplantadaTotal);
                $('#presupuesto_ejecutor').val(obj.presupuestoEjecutor);
                $('#presupuesto_contraparte').val(obj.presupuestoContraparte);
                $('#beneficiarios').val(obj.sumnumerobeneficiariosTotal);
                $('#participantes').val(obj.cantidadTotal);
                $('#empleos').val(obj.empleosTotal);
                $('#superficie_reforestada').val(obj.superficieReforestada);
                $('#superficie_forestada').val(obj.superficieForestada);
                $('#superficie_conservacion').val(obj.superficieConservacion);
                $('#superficie_recuperacion').val(obj.superficieRecuperacion);
                $('#superficie_proteccion').val(obj.superficieProteccion);
                $('#superficie_comercial').val(obj.superficieComercial);
                $('#superficie_ornamental').val(obj.superficieOrnamental);
                $('#superficie_agroforestal').val(obj.superficieAgroforestal);
                $('#superficie_silvopastoril').val(obj.superficieSilvopastoril);

            });
        });

        if (idDepartamentoSelect < 10) {
            callGraphics("idDepartamento", idDepartamentoSelect);
        } else {
            callSingullarGraphs();
        }


    });


    //    -------------------------------------------------------------------------------------------------


    $('#provincia').on('change', function (e) {
        idProvinciaSelect = this.value;

        console.log(idProvinciaSelect);

        var route = "routes/get_data_reporte_provincia.php?id=" + idProvinciaSelect;

        console.log(route);

        $.getJSON(route, function (json) {

            $.each(json, function (i, obj) {

                console.log(obj.nro_beneficiarios);

//                $('#nro_beneficiarios').val(obj.nro_beneficiarios);
                $('#numero_plantines').val(obj.sumnumeroplantinesTotal);
                $('#numero_estacas').val(obj.sumnumeroestacasTotal);

                var tot_plant = parseInt($('#numero_plantines').val());
                var tot_estac = parseInt($('#numero_estacas').val());

                var totPlantaciones = tot_plant + tot_estac;

                if (isNaN(totPlantaciones)) {
                    totPlantaciones = "";
                }

                $('#total_plantaciones').val(totPlantaciones);

                $('#superficie_total_intervenida').val(obj.sumsuperficieplantadaTotal);
                $('#presupuesto').val(obj.presupuestoTotal);
                $('#beneficiarios').val(obj.sumnumerobeneficiariosTotal);
                $('#participantes').val(obj.cantidadTotal);

            });
        });

        callGraphics("idProvincia", idProvinciaSelect);

    });


    //    -------------------------------------------------------------------------------------------------


    $('#municipio').on('change', function (e) {
        idMunicipioSelect = this.value;

        console.log(idMunicipioSelect);

        var route = "routes/get_data_reporte_municipio.php?id=" + idMunicipioSelect;

        console.log(route);

        $.getJSON(route, function (json) {

            $.each(json, function (i, obj) {

                console.log(obj.nro_beneficiarios);

//                $('#nro_beneficiarios').val(obj.nro_beneficiarios);
                $('#numero_plantines').val(obj.sumnumeroplantinesTotal);
                $('#numero_estacas').val(obj.sumnumeroestacasTotal);

                var tot_plant = parseInt($('#numero_plantines').val());
                var tot_estac = parseInt($('#numero_estacas').val());

                var totPlantaciones = tot_plant + tot_estac;

                if (isNaN(totPlantaciones)) {
                    totPlantaciones = "";
                }

                $('#total_plantaciones').val(totPlantaciones);

                $('#superficie_total_intervenida').val(obj.sumsuperficieplantadaTotal);
                $('#presupuesto').val(obj.presupuestoTotal);
                $('#beneficiarios').val(obj.sumnumerobeneficiariosTotal);
                $('#participantes').val(obj.cantidadTotal);

            });
        });

        callGraphics("idMunicipio", idMunicipioSelect);

    });


    function callGraphics(idSelect, valueSelected) {
        callGraphForestacion(idSelect, valueSelected);
        callGraphPlantacion(idSelect, valueSelected);
        callGraphParticipante(idSelect, valueSelected);

    }


    function callSingullarGraphs(){
        callGraphDepartamentoSuperficie();
        callGraphPlantinesDepartamento();
        callGraphPresupuestoDepartamento();
    }


    function callGraphForestacion(idSelect, valueSelected) {
        var route = 'routes/graph_forestacion.php?' + idSelect + "=" + valueSelected;
        $('#graph_forestacion').load(route);
    }


    function callGraphPlantacion(idSelect, valueSelected) {
        var route = 'routes/graph_tipo_plantacion.php?' + idSelect + "=" + valueSelected;
        $('#graph_participantes').load(route);
    }


    function callGraphParticipante(idSelect, valueSelected) {
        var route = 'routes/graph_participante.php?' + idSelect + "=" + valueSelected;
        $('#graph_tipo_plantacion').load(route);
    }


    //  SINGULARAS  ----------------------------------

    function callGraphDepartamentoSuperficie() {
        $('#graph_departamento_superficie').load('routes/graph_departamento_superficie.php');
    }


    function callGraphPlantinesDepartamento() {
        $('#graph_plantines_departamento').load('routes/graph_plantines_departamento.php');
    }


    function callGraphPresupuestoDepartamento() {
        $('#graph_presupuesto_departamento').load('routes/graph_presupuesto_departamento.php');
    }




</script>


</body>

</html>