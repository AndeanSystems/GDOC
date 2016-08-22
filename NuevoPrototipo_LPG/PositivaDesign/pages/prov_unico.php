<section class="content-header" ng-app>
    <section class="content">
        <div class="row margin-top body-container">
            <div class="col-md-12 page-title">
                <div class="header-with-border">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h3 class="box-title">Solicitudes  de Formato Proveedor Único </h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
            <div class="col-md-3"></div>

            <div class="col-md-12">
            <br>
                 <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>Nº Solicitud <i class="fa fa-sort"></i></th>
                            <th>Fecha <i class="fa fa-sort"></i></th>
                            <th>Tipo Solicitud <i class="fa fa-sort"></i></th>
                            <th>Centro costo  <i class="fa fa-sort"></i></th>
                            <th>Estado <i class="fa fa-sort"></i></th>
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
                                    <a data-toggle="modal" data-target="#modal_form_prov_unico"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-original-title="Ver Detalle"></i></a>
                                    <a><i class="fa fa-times"></i></a>
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
                                    <a data-toggle="modal" data-target="#modal_form_prov_unico"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-original-title="Ver Detalle"></i></a>
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
                                    <a data-toggle="modal" data-target="#modal_form_prov_unico"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-original-title="Ver Detalle"></i></a>
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
                                    <a data-toggle="modal" data-target="#modal_form_prov_unico"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-original-title="Ver Detalle"></i></a>
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
                                    <a data-toggle="modal" data-target="#modal_form_prov_unico"><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-original-title="Ver Detalle"></i></a>
                                    <a href=""><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--modal-->
        <div class="modal fade" id="modal_form_prov_unico" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="btn btn-default pull-right" data-dismiss="modal"><i class="fa fa-times" data-placement="top" data-toggle="tooltip" data-original-title="Cerrar"></i></button>
                        <button class="btn btn-default pull-right"><i class="fa fa-floppy-o" data-placement="top" data-toggle="tooltip" data-original-title="Guardar"></i></button>
                        <h4 class="modal-title">Solicitud de Servicio  N° 001-LPG-201508</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item"><label>Proveedor : </label> <span>Métrica Andina S.A.C. (RUC: 20557509802)</span></li>
                                    <li class="list-group-item"><label>Giro del negocio : </label> <span>Consultoria informatica</span></li>

                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item"><label>Tipo de servicio : </label> <span>Servicios Outsourcing</span></li>
                                    <li class="list-group-item"><label>Nombre del contacto : </label> <span>Karina Robles</span></li>

                                </ul>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Criterios de seleción</label>
                                    <ul class="list-group no-margin-bottom">
                                        <li class="list-group-item"><span class="pull-right"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></span> Representación única de marca y/o producto</li>
                                        <li class="list-group-item"><span class="pull-right"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></span> Conocimiento, experiencia y/o reconocimiento diferenciado en el producto y/o servicio</li>  
                                        <li class="list-group-item"><span class="pull-right"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></span> Amplio conocimiento y/o experiencia en la instalación de LPG</li>  
                                        <li class="list-group-item"><span class="pull-right"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></span> Flexibilidad del producto y/o servicio según necesidades de LPG</li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>