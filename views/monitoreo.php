<?php
include_once('header.php');
include_once('path.php');


$idProyecto = $_GET['id'];

$path = $BASE_PATH . "/routes/get_monitoreo.php?id=" . $idProyecto;

$string = file_get_contents($path);
$json_a = json_decode($string, true);

foreach ($json_a as $person_name => $person_a) {

?>


<!-- BEGIN CONTENT -->
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
                                    <span class="caption-subject font-red bold uppercase"> Forulario Monitoreo -
                                        <span class="step-title"> Paso 1 de 4 </span>
                                    </span>
                        </div>
                        <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-cloud-upload"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                <i class="icon-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form class="form-horizontal" action="#" id="submit_form" method="POST">
                            <div class="form-wizard">
                                <div class="form-body">
                                    <ul class="nav nav-pills nav-justified steps">
                                        <li>
                                            <a href="#tab1" data-toggle="tab" class="step">
                                                <span class="number"> 1 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Seguimiento </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2" data-toggle="tab" class="step">
                                                <span class="number"> 2 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Ubicación </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab3" data-toggle="tab" class="step active">
                                                <span class="number"> 3 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Levantamiento de datos </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab4" data-toggle="tab" class="step">
                                                <span class="number"> 4 </span>
                                                        <span class="desc">
                                                            <i class="fa fa-check"></i> Confirmación </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="bar" class="progress progress-striped" role="progressbar">
                                        <div class="progress-bar progress-bar-success"></div>
                                    </div>


                                    <div class="tab-content">
                                        <div class="alert alert-danger display-none">
                                            <button class="close" data-dismiss="alert"></button>
                                            You have some form errors. Please check below.
                                        </div>
                                        <div class="alert alert-success display-none">
                                            <button class="close" data-dismiss="alert"></button>
                                            Your form validation is successful!
                                        </div>
                                        <div class="tab-pane active" id="tab1">
                                            <h3 class="block">Planilla de seguimiento al monitoreo</h3>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Fecha de seguimiento
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <input type="text" class="form-control"
                                                           name="fecha_seguimiento"/>
                                                    <span
                                                        class="help-block"> Fecha de seguimiento del monitoreo </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Seguimiento N°
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <input type="" class="control-label col-md-6"
                                                           name="num_seguimiento"/>
                                                    <span class="help-block"> Seguimiento número. </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Año de la plantación
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <input type="" class="control-label col-md-6"
                                                           name="anio_plantacion" value="<?php echo " " . $person_a['fecha_fin_plantacion']; ?>"/>
                                                    <span
                                                        class="help-block"> En que año se realizo la plantación </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Código de plantación
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <input type="" class="control-label col-md-6"
                                                           name="cod_plantacion" value="<?php echo " " . $person_a['idProy']; ?>"/>
                                                    <span class="help-block"> Código de plantación </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Sup plantación
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <input type="" class="control-label col-md-6"
                                                           name="sup_plantacion" value="<?php echo " " . $person_a['superficie_plantada']; ?>"/>
                                                    <span class="help-block"> Superficie de la plantación </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Sup PPM
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <input type="" class="control-label col-md-6" name="sup_ppm"/>
                                                    <span class="help-block"> Superficie de la parcela permanente de muestreo</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <h3 class="block">Ubicación geográfica</h3>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Departamento</label>

                                                <div class="col-md-4">
                                                    <input type="text" class="form-control"  name="departamento" value="<?php echo " " . $person_a['departamento']; ?>"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Provincia</label>

                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="provincia" value="<?php echo " " . $person_a['provincia']; ?>"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Municipio</label>

                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="municipio" value="<?php echo " " . $person_a['municipio']; ?>"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Comunidad</label>

                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="comunidad" value="<?php echo " " . $person_a['comunidad']; ?>"/>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre del predio
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="nombre_predio" value="<?php echo " " . $person_a['nombre_lugar']; ?>"/>
                                                    <span class="help-block"> Nombre del predio </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre del propietario
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <input type="text" class="form-control"
                                                           name="nombre_propietario" value="<?php echo " " . $person_a['nombre_propietario']; ?>"/>
                                                    <span class="help-block"> Nombre del propietario </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Cuenca
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="cuenca"/>
                                                    <span class="help-block"> Nombre de la cuenca</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <h3 class="block">Levantamiento de datos en unidades de muestreo
                                                aleatorio durante el 1er año de establecimiento de la
                                                plantación</h3>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                    <div class="portlet light portlet-fit bordered">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-settings font-red"></i>
                                                                <span
                                                                    class="caption-subject font-red sbold uppercase">Levantamiento de datos</span>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="btn-group btn-group-devided"
                                                                     data-toggle="buttons">
                                                                    <label
                                                                        class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                                                                        <input type="radio" name="options"
                                                                               class="toggle"
                                                                               id="option1">Actions</label>
                                                                    <label
                                                                        class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options"
                                                                               class="toggle" id="option2">Settings</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="table-toolbar">
                                                                <div class="row">
                                                                    <div class="col-md-6">

                                                                        <div class="btn-group">
                                                                            <button id="addRow" class="btn green">
                                                                                Agregar Nueva
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                        </div>

                                                                        <div class="btn-group">
                                                                            <button id="saveMonitoreo"
                                                                                    class="btn blue">
                                                                                Guardar
                                                                                <i class="fa fa-save"></i>
                                                                            </button>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="btn-group pull-right">
                                                                            <button
                                                                                class="btn green btn-outline dropdown-toggle"
                                                                                data-toggle="dropdown">Herramientas
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;">
                                                                                        Imprimir </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;"> Guardar
                                                                                        en PDF </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;"> Exportar
                                                                                        en Excel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <table
                                                                class="table table-striped table-hover table-bordered"
                                                                id="monitoreo_data">
                                                                <thead>
                                                                    <tr>
                                                                        <th> N° Parcela</th>
                                                                        <th> N° Árbol</th>
                                                                        <th> Especie</th>
                                                                        <th> Altura Total</th>
                                                                        <th> Mortandad</th>
                                                                        <th> Editar</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>



                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- END EXAMPLE TABLE PORTLET-->
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-3">Causas de mortalidad
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <div class="checkbox-list">
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="1"
                                                                   data-title="Incendio"/> Incendio</label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="2"
                                                                   data-title="Inundacion"/> Inundación </label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="3"
                                                                   data-title="Granizada"/> Granizada</label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="4"
                                                                   data-title="Helada"/> Helada</label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="5"
                                                                   data-title="Vientos"/> Vientos</label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="6"
                                                                   data-title="Sequia"/> Sequía</label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="7"
                                                                   data-title="Exceso_hidrico"/> Exceso hídrico
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="8"
                                                                   data-title="Vandalismo"/> Vandalismo</label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="9"
                                                                   data-title="Plagas"/> Plagas</label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="10"
                                                                   data-title="Ataque_de_fauna"/> Ataque de
                                                            fauna</label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="11"
                                                                   data-title="Tecnica_inadecuada"/> Técnica
                                                            inadecuada</label>
                                                        <label>
                                                            <input type="checkbox" name="mortalidad" value="12"
                                                                   data-title="Competencia_con_la_vegetacion"/>
                                                            Competencia con la vegetación</label>

                                                    </div>

                                                    <div id="form_payment_error"></div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre responsable
                                                    <span class="required"> * </span>
                                                </label>

                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="responsable"/>
                                                    <span class="help-block"> Nombre del responsable</span>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-3">Observaciones</label>

                                                <div class="col-md-4">
                                                    <textarea class="form-control" rows="3"
                                                              name="observaciones"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane" id="tab4">
                                            <h3 class="block">Confirmar llenado</h3>
                                            <h4 class="form-section">General</h4>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Fecha del seguimiento:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static"
                                                       data-display="fecha_seguimiento"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Seguimiento N°:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static"
                                                       data-display="num_seguimiento"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Año plantación:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static"
                                                       data-display="anio_plantacion"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Codigo plantación:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static"
                                                       data-display="cod_plantacion"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Superficie plantación:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static"
                                                       data-display="sup_plantacion"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Superficie PPM:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="sup_ppm"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Departamento:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="departamento"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Provincia:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="provincia"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Municipio:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="municipio"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Comunidad:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="comunidad"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre del predio:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="nombre_predio"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre del
                                                    propietario:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static"
                                                       data-display="nombre_propietario"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Cuenca:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="cuenca"></p>
                                                </div>
                                            </div>

                                            <h4 class="form-section">Datos Monitoreo</h4>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Card Holder Name:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="card_name"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Card Number:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="card_number"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">CVC:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="card_cvc"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Expiration:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static"
                                                       data-display="card_expiry_date"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Payment Options:</label>

                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="payment[]"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <a href="javascript:;" class="btn default button-previous">
                                                <i class="fa fa-angle-left"></i> Back </a>
                                            <a href="javascript:;" class="btn btn-outline green button-next">
                                                Continue
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                            <a href="javascript:;" class="btn green button-submit"> Submit
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
<?php } ?>

<?php include_once('footer.php'); ?>


<script type="text/javascript">

    $('#saveMonitoreo').hide();


    var url = '<?php echo $path = $BASE_PATH  . "/routes/get_lista_detalle_monitoreo.php?id=$idProyecto";?>';

    console.log(url);


    $('#monitoreo_data').dataTable({
        "ajax": url,
        "columns": [
            {"num_parcela": "num_parcela"},
            {"num_arbol": "num_arbol"},
            {"especie": "especie"},
            {"altura": "altura"},
            {"mortandad": "mortandad"},
            {"id_monitoreo": "id_monitoreo"}
        ]
    });





    $(function () {
        var t = $('#monitoreo_data').DataTable();
        var url = '<?php echo $path = $BASE_PATH  . "/routes/get_lista_detalle_monitoreo.php?id=$idProyecto";?>';
        var counter = 1;

        $('#addRow').on('click', function () {

            t.row.add([
                '<input class="form-control" name="parcela" id="parcela" type="text" id="value">',
                '<input class="form-control" name="nroArboles" id="nroArboles" type="text" id="value">',


                '<div class="col-md-12">' +
                '<select class="form-control" name="especie" id="especie">' +
                '</select>' +
                '</div>',

                '<input class="form-control" name="alturaTotal" id="alturaTotal" type="text" id="value">',

                '<div class="col-md-12">' +
                '<select class="form-control" name="mortandad" id="mortandad">' +
                '<option value="1">Planta presente y viva</option>' +
                '<option value="2">Planta ausente o muerto en pie</option>' +
                '</select>' +
                '</div>',

                '<a class="delete" href="javascript:;"> Eliminar </a>'
            ]).draw(true);

            fillEspecieSelect();

            counter++;

            $('#addRow').hide();
            $('#saveMonitoreo').show();

        });


        $('#saveMonitoreo').on('click', function () {

            var parcela = $('#parcela').val();
            var nroArboles = $('#nroArboles').val();

            var especie = $("#especie option:selected").text();
            var alturaTotal = $('#alturaTotal').val();
            var mortandad = $('#mortandad').val();

            var idMonitoreo = '<?php echo $idProyecto?>';


            $.post('routes/insert_detalle_monitoreo.php', {
                    parcela: parcela,
                    nroArboles: nroArboles,
                    especie: especie,
                    alturaTotal: alturaTotal,
                    mortandad: mortandad,
                    idMonitoreo: idMonitoreo
                },
                function (data) {
                    console.log(data);


                });

            $('#addRow').show();
            $('#saveMonitoreo').hide();

            t.ajax.reload();

            return false;

        });

    });

    function fillEspecieSelect() {
        $.getJSON("routes/get_especie.php?id=1", function (json) {
            $('#especie').empty();
            $.each(json, function (i, obj) {
                $('#especie').append($('<option>').text(obj.value).attr('value', obj.id));
            });
        });
    }




</script>


</body>

</html>