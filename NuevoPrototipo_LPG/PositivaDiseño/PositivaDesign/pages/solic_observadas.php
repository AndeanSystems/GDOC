<section class="content-header" ng-app>
    <section class="content">
        <div class="row margin-top body-container">
            <div class="col-md-12 page-container">
                <div class="header-with-border"><h3 class="box-title">Solicitudes observadas</h3></div>
                <div class="row box_control">
                    <div class="col-md-12">
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
                            <div class="header-with-border"><h3 class="box-title">Observaciones del documento</h3></div>
                            <div class="form-group">
                                <label>Detalle de la observación presentada</label>
                                <textarea class="form-control" placeholder="Comentario"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>