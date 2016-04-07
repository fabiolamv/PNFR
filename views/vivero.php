<?php include_once('header.php'); ?>

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
                                        <span class="caption-subject font-red bold uppercase"> Forulario Viveros -
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
                                            <a href="#tab4" data-toggle="tab" class="step active">
                                                <span class="number"> 4 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Levantamiento de datos </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab5" data-toggle="tab" class="step">
                                                <span class="number"> 5 </span>
                                                            <span class="desc">
                                                                <i class="fa fa-check"></i> Confirmación </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="bar" class="progress progress-striped" role="progressbar">
                                        <div class="progress-bar progress-bar-success"> </div>
                                    </div>


                                    <div class="tab-content">
                                        <div class="alert alert-danger display-none">
                                            <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                        <div class="alert alert-success display-none">
                                            <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                        <div class="tab-pane active" id="tab1">
                                            <h3 class="block">Planilla de seguimiento de viveros</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre financiador
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="nombre_financiador" id="nombre_financiador"/>
                                                    <span class="help-block"> Nombre del financiador </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre cofinanciador
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="nombre_cofinanciador" id="nombre_cofinanciador"/>
                                                    <span class="help-block"> Nombre del cofinanciador</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre entidad ejecutora
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="entidad_ejecutora" id="entidad_ejecutora" />
                                                    <span class="help-block"> Nombre de la entidad ejecutora </span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Superficie del vivero (m <sup>2</sup> )
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="superficie_vivero" id= "superficie_vivero"/>
                                                    <span class="help-block"> Superficie del vivero en metros cuadrados </span>
                                                </div>
                                            </div>
                                            <h4 class="block">Presupuesto ejecutado en Bolivianos(Bs)</h4>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Ejecutor
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="presupuesto_ejecutor" id= "presupuesto_ejecutor"/>
                                                    <span class="help-block"> Presupuesto ejecutado por parte del ejecutor </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Contraparte
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="presupuesto_contraparte" id= "presupuesto_contraparte"/>
                                                    <span class="help-block"> Presupuesto ejecutado por la contraparte </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Total presupuesto
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="total_presupuesto" id="total_presupuesto"/>
                                                    <span class="help-block"> Total presupuesto ejecutado </span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Interveción</label>
                                                <div class="col-md-4">
                                                    <select name="intervencion" id="intervencion" class="form-control">
                                                        <option value=""></option>
                                                        <option value="0">Comunitario</option>
                                                        <option value="1">Individual</option>
                                                    </select>
                                                </div>
                                            </div>


                                            
                                        </div>


                                        <div class="tab-pane" id="tab2">
                                            <h3 class="block">Ubicación geográfica</h3>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Departamento</label>

                                                <div class="col-md-4">
                                                    <select name="departamento" id="departamento" class="form-control">
                                                        
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Provincia</label>

                                                <div class="col-md-4">
                                                    <select name="provincia" id="provincia" class="form-control">
                                                        <option value="0">Seleccione provincia</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Municipio</label>

                                                <div class="col-md-4">
                                                    <select name="municipio" id="municipio" class="form-control">
                                                        <option value="0">Seleccione municipio</option>
                                                    </select>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Comunidad</label>
                                                <div class="col-md-4">
                                                    
                                                    <div class="checkbox-list" id= "comunidad">
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Ecoregión</label>
                                                <div class="col-md-4">
                                                    <select name="ecoregion" id="ecoregion" class="form-control">
                                                        <option value=""></option>
                                                        <option value="1">Altiplano</option>
                                                        <option value="2">Valles interandinos</option>
                                                        <option value="3">Valles</option>
                                                        <option value="4">Trópico</option>
                                                        <option value="5">Subtrópico</option>
                                                        <option value="6">Chaco</option>
                                                        <option value="7">Llanura</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre del predio
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="nombre_predio" id="nombre_predio"/>
                                                    <span class="help-block"> Nombre del predio </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre del propietario/ Institución
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="nombre_propietario" id="nombre_propietario" />
                                                    <span class="help-block"> Nombre del propietario o institución </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Capacidad productiva
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="capacidad_productiva" id="capacidad_productiva" />
                                                    <span class="help-block"> Capacidad productiva del vivero</span>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="tab-pane" id="tab3">
                                            <h4 class="block">Empleos permanentes</h4>


                                            <div class="form-group">
                                                <label class="control-label col-md-3">Hombre
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="permanente_hombre" id="permanente_hombre"/>
                                                    <span class="help-block"> Total de Hombres con empleo permanente </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Mujer
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="permanente_mujer" id="permanente_mujer"/>
                                                    <span class="help-block"> Total de mujeres con empleo permanente </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Total de empleos permanentes
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="permanente_total" id="permanente_total" />
                                                    <span class="help-block"> Total de empleos permanentes</span>
                                                </div>
                                            </div>

                                            <h4 class="block">Empleos temporales</h4>


                                            <div class="form-group">
                                                <label class="control-label col-md-3">Hombre
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="temporal_hombre" id="temporal_hombre"/>
                                                    <span class="help-block"> Total de Hombres con empleo temporal </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Mujer
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="temporal_mujer" id="temporal_mujer" />
                                                    <span class="help-block"> Total de mujeres con empleo temporal </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Total de empleos temporal
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="temporal_total" id="temporal_total"/>
                                                    <span class="help-block"> Total de empleos temporales</span>
                                                </div>
                                            </div>
                                           

                                            <h4 class="block">Datos del vivero</h4>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Fase del vivero
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <div class="checkbox-list">
                                                        <label>
                                                            <input type="checkbox" name="fase_vivero" id= "fase_vivero" value="1" data-title="Produccion" /> Producción</label>
                                                        <label>
                                                            <input type="checkbox" name="fase_vivero" id= "fase_vivero" value="2" data-title="Mejoramiento" /> Fortalecimiento </label>
                                                        <label>
                                                            <input type="checkbox" name="fase_vivero" id= "fase_vivero" value="3" data-title="Contrucción" /> Contrucción</label>
                                                    </div>

                                                    <div id="form_payment_error"> </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Tipo de vivero</label>
                                                <div class="col-md-4">
                                                    <select name="tipo_vivero" id="tipo_vivero" class="form-control">
                                                        <option value=""></option>
                                                        <option value="0">Temporal</option>
                                                        <option value="1">Permanente</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="block">Fuentes de abastecimiento de agua</h4>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Superficiales:</label>
                                                <div class="input-group">
                                                    <div class="icheck-inline">
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="1"> Ríos</label>
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="2"> Lagos </label>
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="3"> Arroyos </label>
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="4"> Embalses </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Subterraneas:</label>
                                                <div class="input-group">
                                                    <div class="icheck-inline">
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="5"> Manantial</label>
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="6"> Pozos </label>
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="7"> Galería filtrante </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Pluviales:</label>
                                                <div class="input-group">
                                                    <div class="icheck-inline">
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="8"> Atajado</label>
                                                        
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="10"> Ferro cemento </label>
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="13"> Lluvia </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Otras:</label>
                                                <div class="input-group">
                                                    <div class="icheck-inline">
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="11"> Aljibe</label>
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="12"> Cisterna </label>
                                                        <label>
                                                            <input type="checkbox" class="icheck" name="abastecimiento_agua" id="abastecimiento_agua" value="9"> Red de distribución de agua </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="tab-pane" id="tab4">
                                            <h3 class="block">Producción de especies</h3>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                    <div class="portlet light portlet-fit bordered">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-settings font-red"></i>
                                                                <span class="caption-subject font-red sbold uppercase">Producción de especies nativas</span>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                    <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                                                                        <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                                    <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="table-toolbar">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="btn-group">
                                                                            <button id="sample_editable_1_new" class="btn green"> Agregar
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="btn-group pull-right">
                                                                            <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Herramientas
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;"> Imprimir </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;"> Guardar en PDF </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;"> Exportar en Excel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                                <thead>
                                                                <tr>
                                                                    <th> N°  </th>
                                                                    <th> Nombre común </th>
                                                                    <th> N° plantines producidos </th>
                                                                    <th> Tasa de eficiencia % </th>
                                                                    <th> Total Producción </th>
                                                                    <th> Editar </th>
                                                                    <th> Eliminar </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td> 1 </td>
                                                                    <td> 1 </td>
                                                                    <td> aliso </td>
                                                                    <td class="center"> 0,5 </td>
                                                                    <td class="center"> 1 </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Editar </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Eliminar </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> 2 </td>
                                                                    <td> 2 </td>
                                                                    <td>  </td>
                                                                    <td class="center">  </td>
                                                                    <td class="center">  </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Editar </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Eliminar </a>
                                                                    </td>
                                                                </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- END EXAMPLE TABLE PORTLET-->
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                    <div class="portlet light portlet-fit bordered">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class="icon-settings font-red"></i>
                                                                <span class="caption-subject font-red sbold uppercase">Producción de especies introducidas</span>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                    <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                                                                        <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                                    <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                                                        <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="table-toolbar">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="btn-group">
                                                                            <button id="sample_editable_1_new" class="btn green"> Agregar
                                                                                <i class="fa fa-plus"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="btn-group pull-right">
                                                                            <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Herramientas
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </button>
                                                                            <ul class="dropdown-menu pull-right">
                                                                                <li>
                                                                                    <a href="javascript:;"> Imprimir </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;"> Guardar en PDF </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:;"> Exportar en Excel </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                                <thead>
                                                                <tr>
                                                                    <th> N°  </th>
                                                                    <th> Nombre común </th>
                                                                    <th> N° plantines producidos </th>
                                                                    <th> Tasa de eficiencia % </th>
                                                                    <th> Total Producción </th>
                                                                    <th> Editar </th>
                                                                    <th> Eliminar </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td> 1 </td>
                                                                    <td> 1 </td>
                                                                    <td> aliso </td>
                                                                    <td class="center"> 0,5 </td>
                                                                    <td class="center"> 1 </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Editar </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Eliminar </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> lisa </td>
                                                                    <td> Lisa Wong </td>
                                                                    <td> 434 </td>
                                                                    <td class="center"> new user </td>
                                                                    <td class="center"> power user </td>
                                                                    <td>
                                                                        <a class="edit" href="javascript:;"> Edit </a>
                                                                    </td>
                                                                    <td>
                                                                        <a class="delete" href="javascript:;"> Delete </a>
                                                                    </td>
                                                                </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- END EXAMPLE TABLE PORTLET-->
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="control-label col-md-3">Total Especies Nativas
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="total_nativa" id="total_nativa" />
                                                    <span class="help-block"> Total de especies nativas</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Total Especies Introducidas
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="total_introducida" id="total_introducida" />
                                                    <span class="help-block"> Total de especies introducidas</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Total produccion de especies
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="total_produccion" id="total_produccion" />
                                                    <span class="help-block"> Total de producción de especies</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre responsable
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="nombre_responsable" id="nombre_responsable" />
                                                    <span class="help-block"> Nombre del responsable del llenado de la planilla</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Observaciones</label>
                                                <div class="col-md-4">
                                                    <textarea class="form-control" rows="3" name="observaciones"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane" id="tab5">
                                            <h3 class="block">Confirmar llenado</h3>
                                            <h4 class="form-section">General</h4>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre Financiador:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="nombre_financiador"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre Cofinanciador:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="nombre_cofinanciador"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre Entidad Ejecutora:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="entidad_ejecutora"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Codigo vivero:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="codigo_vivero"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Superficie Vivero (m <sup>2</sup>)</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="superficie_vivero"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Presupuesto Ejecutor:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="presupuesto_ejecutor"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Presupuesto Contraparte:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="presupuesto_contraparte"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Total presupuesto</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="total_presupuesto"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Interrvención:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="intervencion"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Departamento:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="departamento"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Provincia:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="provincia"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Municipio:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="municipio"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Comunidad:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="comunidad"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Ecoregión:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="ecoregion"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre del predio:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="nombre_predio"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre del propietario:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="nombre_propietario"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Capacidad productiva:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="capacidad_productiva"> </p>
                                                </div>
                                            </div>

                                            <h4 class="form-section">Datos del vivero</h4>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Empleos permanentes Hombres:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="permanente_hombre"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Empleos permanentes Mujeres:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="permanente_mujer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Empleos permanentes:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="permanente_total"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Empleos temporales Hombres:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="temporal_hombre"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Empleos temporales Mujeres:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="temporal_mujer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Empleos temporales:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="temporal_total"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Fase del vivero:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="fase_vivero"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Tipo de vivero:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="tipo_vivero"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Expiration:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="card_expiry_date"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Payment Options:</label>
                                                <div class="col-md-4">
                                                    <p class="form-control-static" data-display="payment[]"> </p>
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
                                            <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                            <a href="javascript:;" class="btn green button-submit"> Submit
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button id="guardarVivero" type="button">Guardar</button>
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
<?php include_once('footer.php');?>



<script>

 $('#guardarVivero').on('click', function () {


       
       var nombre_financiador = $('#nombre_financiador').val();
       var nombre_cofinanciador = $('#nombre_cofinanciador').val();
       var entidad_ejecutora = $('#entidad_ejecutora').val();
       var superficie_vivero = $('#superficie_vivero').val();
       var presupuesto_ejecutor = $('#presupuesto_ejecutor').val();
       var presupuesto_contraparte = $('#presupuesto_contraparte').val();
       var intervencion = $("#intervencion option:selected").val();
       var nombre_predio = $('#nombre_predio').val();
       var nombre_propietario = $('#nombre_propietario').val();
       var capacidad_productiva = $('#capacidad_productiva').val();
       var permanente_hombre = $('#permanente_hombre').val();
       var permanente_mujer = $('#permanente_mujer').val();
       var temporal_hombre = $('#temporal_hombre').val();
       var temporal_mujer = $('#temporal_mujer').val();
       var fase_vivero = getAllSelectedFaseVivero();
       var tipo_vivero = $("#tipo_vivero option:selected").val();
       var nombre_responsable = $('#nombre_responsable').val();
       var abastecimiento_agua = getAllSelectedAbastecimientoAgua();

       var departamento = $('#departamento').val();
       var provincia = $('#provincia').val();
       var municipio = $('#municipio').val();
       var comunidad = getAllSelectedComunidades();


         $.post('inserts/insert_vivero.php', {

                   
                   nombre_financiador: nombre_financiador,
                   nombre_cofinanciador: nombre_cofinanciador,
                   entidad_ejecutora: entidad_ejecutora,
                   superficie_vivero: superficie_vivero,
                   presupuesto_ejecutor: presupuesto_ejecutor,
                   presupuesto_contraparte: presupuesto_contraparte,
                   intervencion: intervencion,
                   nombre_predio: nombre_predio,
                   nombre_propietario: nombre_propietario,
                   capacidad_productiva: capacidad_productiva,
                   permanente_hombre: permanente_hombre,
                   permanente_mujer: permanente_mujer,
                   temporal_hombre: temporal_hombre,
                   temporal_mujer: temporal_mujer,
                   fase_vivero: fase_vivero,
                   tipo_vivero: tipo_vivero,
                   nombre_responsable: nombre_responsable, 
                   abastecimiento_agua: abastecimiento_agua,
                   departamento: departamento,
                   provincia: provincia,
                   municipio: municipio,
                   comunidad: comunidad

             },
             function (data) {
                 console.log(data);



             });

            return false;
       });

        function getAllSelectedFaseVivero(){
            
            var frm = $('input[name="fase_vivero"]:checked');
            return JSON.stringify(frm.serializeArray());
        }

        function getAllSelectedAbastecimientoAgua(){
            
            var frm = $('input[name="abastecimiento_agua"]:checked');
            return JSON.stringify(frm.serializeArray());
        }


//-----Departamentos
fillDepartamentosSelect();

 function fillDepartamentosSelect() {
        $.getJSON("routes/get_departamentos.php", function (json) {
            $('#departamento').append($('<option>').text("Seleccione departamento").attr('value', 0));
            $.each(json, function (i, obj) {
                $('#departamento').append($('<option>').text(obj.value).attr('value', obj.id));
            });
            
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

    $('#municipio').on('change', function (e) {
        var valueSelected = this.value;
        fillComunidadesSelect(valueSelected);
    });


    function fillComunidadesSelect(idMunicipio) {
        var route = "routes/get_comunidades.php?id=" + idMunicipio;

        $.getJSON(route, function (json) {
            $('#comunidad').empty();

            $.each(json, function (i, obj) {
                $('#comunidad').append('<label><input type="checkbox" name="comunidad" id= "comunidad" value="' + obj.id + '" data-title="' + obj.value + '" /> ' + obj.value + '</label>');
            });
        });
    }

    //--Guardar Departamentos, provincias, municipios y comunidades

    

    function getAllSelectedComunidades(){
        
        var frm = $('input[name="comunidad"]:checked');
        return JSON.stringify(frm.serializeArray());
    }





</script>

</body>

</html>