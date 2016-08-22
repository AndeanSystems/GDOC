<section class="content-header" ng-app>
    <section class="content">
        <div class="row margin-top body-container">
            <div class="col-md-12 page-container">
                <div class="header-with-border"><h3 class="box-title">Evaluación de servicios pendientes</h3></div>
                <div class="row box_control">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar evalucion de servicios">
                            <span class="input-group-btn">
                                <button class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                
                    <div class="col-md-12">
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Fecha <i class="fa fa-sort"></i></th>
                                    <th>Tipo Solicitud <i class="fa fa-sort"></i></th>
                                    <th>Proveedor</th>
                                    <th>Remitente <i class="fa fa-sort"></th>
                                    <th>Indicador <i class="fa fa-sort"></th>
                                    <th>Adjunto</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>25-08-2015 </td>
                                        <td>Outsourcing</td>
                                        <td>Métrica Andina S.A.C</td>
                                        <td>La positiva generales</td>
                                        <td>
                                            <i class="fa fa-circle circle-green"></i>
                                        </td>
                                        <td>
                                            <a data-toggle="modal" data-target="#modal_attach_file"><i class="fa fa-paperclip"></i> Documento 1</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25-08-2015 </td>
                                        <td>Desarrollo de software</td>
                                        <td>Métrica Andina S.A.C</td>
                                        <td>La positiva generales</td>
                                        <td>
                                            <i class="fa fa-circle circle-green"></i>
                                        </td>
                                        <td>
                                            <a data-toggle="modal" data-target="#modal_attach_file"><i class="fa fa-paperclip"></i> Documento 6</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25-08-2015 </td>
                                        <td>Outsourcing</td>
                                        <td>Métrica Andina S.A.C</td>
                                        <td>La positiva generales</td>
                                        <td>
                                            <i class="fa fa-circle circle-red"></i>
                                        </td>
                                        <td>
                                            <a data-toggle="modal" data-target="#modal_attach_file"><i class="fa fa-paperclip"></i> Documento 8</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25-08-2015 </td>
                                        <td>Consultoria</td>
                                        <td>Métrica Andina S.A.C</td>
                                        <td>La positiva generales</td>
                                        <td>
                                            <i class="fa fa-circle circle-orange"></i>
                                        </td>
                                        <td>
                                            <a data-toggle="modal" data-target="#modal_attach_file"><i class="fa fa-paperclip"></i> Documento 20</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25-08-2015 </td>
                                        <td>Desarrollo de software</td>
                                        <td>Métrica Andina S.A.C</td>
                                        <td>La positiva generales</td>
                                        <td>
                                            <i class="fa fa-circle circle-red"></i>
                                        </td>
                                        <td>
                                            <a data-toggle="modal" data-target="#modal_attach_file"><i class="fa fa-paperclip"></i> Documento 12</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>
    </section>

        <!--modal de sinput type file-->
    <div class="modal fade" id="modal_attach_file" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Vista previa solicitud</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <center>
                                <object data="img/DE0002-2015-FPC-GPD.pdf" type="application/pdf" width="90%" height="550px"></object>
                            </center>
                        </div>

                        <div class="col-md-4">
                            <div class="header-with-border"><h3 class="box-title">Detalle del documento</h3></div>
                            <div class="form-group">
                                <label>Comentario</label>
                                <textarea class="form-control" placeholder="Comentario"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-default pull-right btn-col-4">Rechazar</button>
                                <button class="btn btn-default pull-right btn-col-4">Aprobar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>