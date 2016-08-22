<section class="content-header" ng-app>
    <section class="content">
        <div class="row margin-top body-container">
            <div class="col-md-12 page-container">
                <div class="header-with-border"><h3 class="box-title">Evaluación de servicios pendientes</h3></div>
                <div class="row box_control">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar evalucion de servicios pendientes">
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
                                    <th>Fecha <i class="fa fa-sort"></i></th>
                                    <th>Tipo Solicitud <i class="fa fa-sort"></i></th>
                                    <th>Proveedor <i class="fa fa-sort"></i></th>
                                    <th>Remitente <i class="fa fa-sort"></i></th>
                                    <th>Indicador <i class="fa fa-sort"></i></th>
                                    <th>Acciones</th>
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
                                            <a data-toggle="modal" data-target="#modal_form_eva_service"><i class="fa fa-check-circle" data-toggle="tooltip" title="Evaluar"></i></a>
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
                                            <a data-toggle="modal" data-target="#modal_form_eva_service"><i class="fa fa-check-circle" data-toggle="tooltip" title="Evaluar"></i></a>
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
                                            <a data-toggle="modal" data-target="#modal_form_eva_service"><i class="fa fa-check-circle" data-toggle="tooltip" title="Evaluar"></i></a>
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
                                            <a data-toggle="modal" data-target="#modal_form_eva_service"><i class="fa fa-check-circle" data-toggle="tooltip" title="Evaluar"></i></a>
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
                                            <a data-toggle="modal" data-target="#modal_form_eva_service"><i class="fa fa-check-circle" data-toggle="tooltip" title="Evaluar"></i></a>
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

    <!--modal forms -->
    <div class="modal fade" id="modal_form_eva_service" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn btn-default pull-right" data-dismiss="modal"><i class="fa fa-times" data-toggle="tooltip" title="Cerrar"></i></button>
                    <button class="btn btn-default pull-right"><i class="fa fa-floppy-o" data-toggle="tooltip" title="Guardar"></i></button>
                    <button class="btn btn-default pull-right" data-toggle="modal" data-target="#modal_attach_file"><i class="fa fa-file-pdf-o" data-toggle="tooltip" title="Ver Solicitud"></i></button>
                    <h4 class="modal-title">Evaluación de servicios pendientes</h4>
                </div>
                <div class="modal-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" data-target="#one_search" aria-expanded="true">
                                        <i class="fa fa-plus-circle"></i> Información del proveedor
                                    </a>
                                </h4>
                            </div>

                            <div id="one_search" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item"><label>Proveedor : </label> <span>Métrica Andina S.A.C. (RUC: 20557509802)</span></li>
                                                <li class="list-group-item"><label>N° Orden de Pedido : </label> <span>001-LPG-201508</span></li>
                                                <li class="list-group-item"><label>Fecha : </label> <span>26 de Agosto, 2015</span></li>
                                                <li class="list-group-item"><label>Posiciones x Evaluar: </label> <input type="text" class="form-control" placeholder="Posiciones x Evaluar"> </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item"><label>Posiciones evaluadas : </label> <span> 10,20,30</span></li>
                                                <li class="list-group-item"><label>Importe (Monto Total) : </label> <span>S/. 45.000.00</span></li>
                                                <li class="list-group-item"><label>N° Hoja de Entrada : </label> 001-LPG-201508<span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--panel resumen de colaboradores-->
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" data-target="#two_search">
                                        <i class="fa fa-plus-circle"></i> Resumen de Colaboradores del Proveedor
                                    </a>
                                </h4>
                            </div>
                            <div id="two_search" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nombre Colaborador</label>
                                                <input type="text" placeholder="Nombre de Colaborador" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Promedio Evaluación</label>
                                                <input type="number" placeholder="Promedio Evaluación" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Observaciones</label>
                                                <textarea class="form-control" placeholder="Observaciones"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--panel califacion al proveedor-->                
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" data-target="#three_search">
                                        <i class="fa fa-plus-circle"></i> Marca con una "X" para calificar la gestión del proveedor de acuerdo con los criterios indicados
                                    </a>
                                </h4>
                            </div>
                            <div id="three_search" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <th>Critetios</th>
                                                <th><button class="btn btn-default" data-toggle="tooltip" data-original-title="Muy Insatisfecho">0</button> </th>
                                                <th><button class="btn btn-default" data-toggle="tooltip" data-original-title="Insatisfecho">1</button> </th>
                                                <th><button class="btn btn-default" data-toggle="tooltip" data-original-title="Regular">2</button> </th>
                                                <th><button class="btn btn-default" data-toggle="tooltip" data-original-title="Satisfecho">3</button> </th>
                                                <th><button class="btn btn-default" data-toggle="tooltip" data-original-title="Muy Satisfecho">4</button> </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1). Calidad de los Productos/Servicios del Proveedor.</td>
                                                    <td>
                                                        <label class="radio-inline"><input type="radio" name="radioGroup"></label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup"></label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup"></label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup"></label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup"></label>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>2). Relación Precio/Calidad de los productos/servicios del Proveedor.</td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup1"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup1"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup1"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup1"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup1"></label>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>3). Tiempo de desarrollo y/o entrega de las soluciones.</td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup2"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup2"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup2"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup2"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup2"></label>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>4). Cumplimiento de acuerdos y cronogramas pactados./td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup3"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup3"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup3"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup3"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup3"></label>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>5). Actitud y disposición del personal del Proveedor.</td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup4"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup4"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup4"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup4"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup4"></label>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>6). Asesoramiento técnico y asesoría posterior.</td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup5"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup5"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup5"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup5"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup5"></label>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>7). Conocimiento y profesionalismo.</td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup6"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup6"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup6"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup6"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup6"></label>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>8). Calidad de atención brindada por el personal del Proveedor.</td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup7"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup7"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup7"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup7"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup7"></label>
                                                    </td>
                                                </tr>
                                                 <tr>
                                                    <td>9). ¿En términos generales, como califica su nivel de satisfacción con el Proveedor de TI?</td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup8"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup8"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup8"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup8"> </label>
                                                    </td>
                                                    <td>
                                                        <label class="radio-inline"><input  type="radio" name="radioGroup8"></label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- panel detallar -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" data-target="#four_search">
                                        <i class="fa fa-plus-circle"></i> Sugerencias para el Proveedor
                                    </a>
                                </h4>
                            </div>
                            <div id="four_search" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Sugerencias</label>
                                                <textarea class="form-control" placeholder="Calidad de atención"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--modal de sinput type file-->
    <div class="modal fade" id="modal_attach_file" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn btn-default pull-right" data-dismiss="modal"><i class="fa fa-times" data-placement="top" data-toggle="tooltip" title="Cerrar"></i></button>
                    <h4 class="modal-title">Vista previa solicitud</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <object data="img/DE0002-2015-FPC-GPD.pdf" type="application/pdf" width="90%" height="550px"></object>
                            </center>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>