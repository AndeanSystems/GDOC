<section class="content-header" ng-app>
    <section class="content">
        <div class="row margin-top body-container">
            <div class="col-md-12 page-title">
                <div class="header-with-border">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h3 class="box-title">Busquedas </h3>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 control-palete">
                        <button class="btn btn-default pull-right" data-toggle="collapse" data-parent="#accordion" data-target="#two_search"><i class="fa fa-search" data-placement="top" data-toggle="tooltip" data-original-title="Buscar"></i></button>
                    </div>
                </div>
            </div>

            <div class="panel-group" id="accordion">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" data-target="#one_search" aria-expanded="true">
                                <i class="fa fa-plus-circle"></i> Criterios
                            </a>
                        </h4>
                    </div>

                    <div id="one_search" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>N° Solicitud</label>
                                        <input type="text" value="005-LPV-201508" class="form-control">
                                    </div>

                                     <div class="form-group">
                                        <label>Centro de costo</label>
                                        <input type="text" value="1010-Gerencia TI" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Importe de Gasto o inversión presupuestado?</label>
                                        <label class="form-control"><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Proveedor</label>
                                        <input type="text" value="Métrica Andina S.A.C. (RUC: 20557509802)" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Importe Compra</label>
                                        <input type="text" value="S/. 45.000.00" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Codigo de necesidad</label>
                                        <input type="number" value="" class="form-control">
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Partida Presupuestal</label>
                                        <input type="number" value="" class="form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" data-target="#two_search">
                                <i class="fa fa-plus-circle"></i> Resultados
                            </a>
                        </h4>
                    </div>
                    <div id="two_search" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Nº Solicitud <i class="fa fa-sort"></i></th>
                                        <th>Fecha <i class="fa fa-sort"></i></th>
                                        <th>Tipo Solicitud <i class="fa fa-sort"></i></th>
                                        <th>Centro costo  <i class="fa fa-sort"></th>
                                        <th>Estado <i class="fa fa-sort"></th>
                                        <th>Acciones</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>001-LPG-201508</td>
                                            <td>06-08-2015</td>
                                            <td>Outsourcing</td>
                                            <td>1010-Gerencia TI</td>
                                            <td>
                                                <i class="fa fa-circle"></i>
                                            </td>
                                            <td>
                                                <input type="hidden" ng-model="numero" value="001-LPG-201508">
                                                <a data-toggle="modal" data-target="#modal_form_service"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href=""><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>00-LPG-201508</td>
                                            <td>01-08-2015</td>
                                            <td>Desarrollo de software</td>
                                            <td>2010-Gerencia Riesgos</td>
                                            <td>
                                                <i class="fa fa-circle"></i>
                                            </td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal_attach_file"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href=""><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>003-LPV-201508</td>
                                            <td>01-08-2015</td>
                                            <td>Outsourcing</td>
                                            <td>3010-Gerencia Adm.</td>
                                            <td>
                                                <i class="fa fa-circle"></i>
                                            </td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal_attach_file"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href=""><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>004-LPG-201508</td>
                                            <td>01-08-2015</td>
                                            <td>Consultoria</td>
                                            <td>1010-Gerencia TI</td>
                                            <td>
                                                <i class="fa fa-circle"></i>
                                            </td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal_attach_file"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href=""><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>005-LPV-201508</td>
                                            <td>01-08-2015</td>
                                            <td>Desarrollo de software</td>
                                            <td>4010-Gerencia RRHH</td>
                                            <td>
                                                <i class="fa fa-circle"></i>
                                            </td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal_attach_file"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href=""><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>