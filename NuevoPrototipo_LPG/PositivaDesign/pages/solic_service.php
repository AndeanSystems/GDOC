<script>
	$(document).ready(function(){
		$(".select2").select2();
	});
</script>
<section class="content-header" ng-app>
	<section class="content">
	    <div class="row margin-top body-container">
	      	<div class="col-md-12 page-container">
	        	<div class="header-with-border"><h3 class="box-title">Solicitud de Servicios</h3></div>
		        <div class="row box_control">
		            <div class="col-md-2"></div>
		            <div class="col-md-6">
		              	<div class="input-group">
		                	<input type="text" class="form-control" placeholder="Buscar Solicitudes">
		                	<span class="input-group-btn">
		                  		<button class="btn btn-default"><i class="fa fa-search"></i></button>
		                	</span>
		              	</div>
		            </div>
		            <div class="col-md-2">
          				<button class="btn btn-default" data-toggle="modal" data-target="#modal_form_service"><i class="fa fa-file fa-1x"  data-toggle="tooltip" data-original-title="Nuevo"></i></button>
        			</div>
        			<div class="col-md-2"></div>

                    <div class="col-md-12">
                        <h6>Solicitudes en borrador</h6>
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
                                            <a href=""><i class="fa fa-times" data-toggle="tooltip" data-original-title="Eliminar"></i></a>
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
                                            <a data-toggle="modal" data-target="#modal_form_service"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href=""><i class="fa fa-times" data-toggle="tooltip" data-original-title="Eliminar"></i></a>
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
                                            <a data-toggle="modal" data-target="#modal_form_service"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href=""><i class="fa fa-times" data-toggle="tooltip" data-original-title="Eliminar"></i></a>
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
                                            <a data-toggle="modal" data-target="#modal_form_service"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href=""><i class="fa fa-times" data-toggle="tooltip" data-original-title="Eliminar"></i></a>
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
                                            <a data-toggle="modal" data-target="#modal_form_service"><i class="fa fa-pencil-square-o"></i></a>
                                            <a href=""><i class="fa fa-times" data-toggle="tooltip" data-original-title="Eliminar"></i></a>
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
    <!--modal windows -->
    <div class="modal fade modal_form_service" id="modal_form_service" tabindex="-1">
    	<div class="modal-dialog modal-lg">
    		<div class="modal-content">
    			<div class="modal-header">
                    <button class="btn btn-default pull-right" data-dismiss="modal"><i class="fa fa-times" data-placement="top" data-toggle="tooltip" data-original-title="Cerrar"></i></button>
                    <button class="btn btn-default pull-right" data-toggle="modal" data-target="#modal_prov_uni"><span class="glyphicon glyphicon-floppy-saved" data-placement="top" data-toggle="tooltip" data-original-title="Guardar enviar"></span></button>
                    <button class="btn btn-default pull-right"><i class="fa fa-floppy-o" data-toggle="tooltip" data-original-title="Guardar"></i></button>
                    <h4 class="modal-title">Solicitud de Servicio  N° {{numero}}</h4>
    			</div>
    			<div class="modal-body">
    				<div class="row">
    					<form class="form-horizontal">
    						<div class="col-md-6">
    							<div class="header-with-border"><h4 class="box-title">Detalle de la compra</h4></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group no-margin-bottom">
                                            <label>Empresa</label>
                                            <select class="form-control">
                                                <option selected="selected">La Positiva Generales</option>
                                                <option>La Positiva Vida</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group no-margin-bottom">
                                            <label>Tipo de compra</label>
                                            <select class="form-control select2">
                                                <option>Servicios Outsourcing</option>
                                                <option>Desarrollo de software</option>
                                                <option>Consultoria</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
    							
								<div class="form-group no-margin-bottom">
									<label>Objetivo del servicio </label>
									<textarea class="form-control" placeholder="Detallar el objetivo"></textarea>
								</div>

								<div class="form-group no-margin-bottom">
									<label>Centro de costo y/o áreas beneficiadas</label>
									<select class="form-control select2" multiple="multiple" data-placeholder="Selecione centro costo">
                                      	<option>1010-Gerencia TI</option>
                                      	<option>2010-Gerencia Riesgos</option>
                                        <option>3010-Gerencia Adm.</option>
                                        <option>4010-Gerencia RRHH</option>
                                    </select>
								</div>

								<div class="form-group no-margin-bottom">
									<label>Propuestas de solución - Problematica</label>
									<textarea class="form-control" placeholder="Detallar las Propuestas"></textarea>
								</div>

                                <div class="form-group no-margin-bottom">
                                    <label>Adjuntar (RFP)</label>
                                    <input type="file" multiple  ng-model="file" class="form-control">
                                </div>

								<div class="form-group">
    								<label>Conclusiones y/o Recomendaciones</label>
    								<textarea class="form-control" placeholder="Conclusiones y/o Recomendaciones"></textarea>
    							</div>

    						</div>

    						<div class="col-md-6">
    							<div class="header-with-border"><h4 class="box-title">Convocatoria</h4></div>
    							<div class="form-group no-margin-bottom">
    								<label>Tipo de convocatoria</label>
    								<select class="form-control select2" ng-model="convocatoria">
    									<option value=""> --seleccione-- </option>
    									<option value="1">Proveedor único</option>
    									<option value="2">Multiples proveedores</option>
    								</select>
    							</div>
                                
                                <div class="form-group no-margin-bottom">
                                    <label>Formas de cancelación</label>
                                    <section class="form-control select2">
                                        <option>Factura</option>
                                        <option>RxH</option>
                                    </section>
                                </div>

                                <div class="form-group no-margin-bottom">
                                    <label>Moneda</label>
                                    <section class="form-control select2">
                                        <option>Soles</option>
                                        <option>Dólares</option>
                                    </section>
                                </div>

    							<div class="form-group no-margin-bottom">
    								<label>Proveedor</label>
                                    <div class="input-group">
        								<select class="form-control select2">
        									<option selected="selected">Métrica Andina</option>
        									<option>Bit Solutions</option>
        									<option>MDP Consulting</option>
                                            <option>IBM</option>
    								    </select>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" ng-disabled="convocatoria == '1'"><i class="fa fa-plus"></i></button>
                                        </span>
                                    </div>
    							</div>

    							<div class="table-responsive">
    								<table class="table">
    									<thead>
    										<th>Empresa</th>
    										<th>Importe (Incl. Imp.)</th>
    										<th>Adjunto</th>
    									</thead>
    									<tbody>
    										<tr>
    											<td>Alternativa A</td>
    											<td><input type="text" value="S/. 000.00"></td>
    											<td><a data-toggle="modal" data-target="#modal_input_file"><i class="fa fa-paperclip"></i>  1</a>
                                                    <a href=""><i class="fa fa-times"></i></a>
                                                </td>
    										</tr>
    										<tr>
    											<td>Alternativa B</td>
    											<td><input type="text" value="S/. 000.00"></td>
    											<td><a data-toggle="modal" data-target="#modal_input_file"><i class="fa fa-paperclip"></i>  2</a>
                                                    <a href=""><i class="fa fa-times"></i></a>
                                                </td>
    										</tr>
    										<tr>
    											<td>Alternativa C</td>
    											<td><input type="text" value="S/. 000.00"></td>
    											<td><a data-toggle="modal" data-target="#modal_input_file"><i class="fa fa-paperclip"></i>  3</a>
                                                    <a href=""><i class="fa fa-times"></i></a>
                                                </td>
    										</tr>
    									</tbody>
    								</table>
    							</div>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: 35%">
                                        <span class="sr-only">35% Completado</span>
                                    </div>
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 25%">
                                        <span class="sr-only">25% Observado</span>
                                    </div>
                                    <div class="progress-bar progress-bar-danger" style="width: 15%">
                                        <span class="sr-only">15% para Copletar</span>
                                    </div>
                                </div>



    							<!--<div ng-if="convocatoria == '1'">
    								<div class="header-with-border"><h4 class="box-title">Criterios de seleción</h4></div>
									<ul class="list-group no-margin-bottom">
									    <li class="list-group-item"><span class="pull-right"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></span> Representación único de marca y/o producto</li>
									    <li class="list-group-item"><span class="pull-right"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></span> Conocimiento, experiencia y/o reconocimiento diferenciado en el producto y/o servicio</li>  
									    <li class="list-group-item"><span class="pull-right"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></span> Amplio conocimiento y/o experiencia en la instalación de LPG</li>  
									    <li class="list-group-item"><span class="pull-right"><label><input type="checkbox" class="ios-switch green tinyswitch" /><div><div></div></div></label></span> Flexibilidad del producto y/o servicio según necesidades de LPG</li> 
									</ul>

									<div class="form-group">
										<label>Justificación</label>
										<textarea class="form-control" placeholder="Justificación"></textarea>
									</div>
    							</div>
    						</div>-->

    						<!--<div class="col-md-4">
    							<div class="header-with-border"><h4 class="box-title">Revision Presupuestal</h4></div>
								
								<div class="form-group no-margin-bottom">
    								<label class="col-sm-4">Presupuestado</label>
    								<div class="col-sm-8" style="margin-top:1%;">
										<label><input type="checkbox" class="ios-switch green tinyswitch" checked /><div><div></div></div></label>
									</div>
    							</div>

    							<div class="form-group no-margin-bottom">
									<label>Código de Necesidad</label>
									<input type="text" class="form-control">
								</div>

								<div class="form-group">
									<label>Partida Presupuestal</label>
									<input type="text" class="form-control">
								</div>

    							<div class="header-with-border"><h4 class="box-title">Aprobaciones tecnicas y presupuestales</h4></div>
    							<div class="form-group no-margin-bottom">
    								<label>Sub - Gerencia de --</label>
    								<select class="form-control select2" multiple="multiple" data-placeholder="Selecione gerencia">
                                      	<option>Positiva01</option>
                                      	<option>Positiva02</option>
                                    </select>
    							</div>

    							<div class="form-group no-margin-bottom">
    								<label>Jefe de proyecto y/o Responsable</label>
    								<select class="form-control select2" multiple="multiple" data-placeholder="Selecione jefe del proyecto">
                                      	<option>Positiva01</option>
                                      	<option>Positiva02</option>
                                    </select>
    							</div>

    							<div class="form-group">
    								<label>Gestor de Proveedor y control presupuestal</label>
    								<select class="form-control select2" multiple="multiple" data-placeholder="Selecione gestor de proveedor">
                                      	<option>Positiva01</option>
                                      	<option>Positiva02</option>
                                    </select>
    							</div>-->
    						</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <!--modal de sinput type file-->
    <div class="modal fade" id="modal_input_file" tabindex="-1">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-body">
    				<div class="row">
    					<div class="col-md-12">
    						<div class="form-group">
    							<label>Seleccione el adjunto</label>
    							<input type="file" onchange="close_file();" ng-model="file">
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
<!-- proveedor unico-->
    <div class="modal fade" id="modal_prov_uni" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn btn-default pull-right" data-dismiss="modal"><i class="fa fa-times" data-placement="top" data-toggle="tooltip" data-original-title="Cerrar"></i></button>
                    <button class="btn btn-default pull-right"><i class="fa fa-floppy-o" data-placement="top" data-toggle="tooltip" data-original-title="Guardar"></i></button>
                    <h4 class="modal-title">Justicación de Proveedor unico</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Proveedor</label>
                                <input type="text" value="Métrica Andina S.A.C. (RUC: 20557509802)" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Giro del negocio</label>
                                <input type="text" value="Consultoria informatica" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Tipo de servicio</label>
                                <input type="text" value="Servicios Outsourcing" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nombre del contacto</label>
                                <input type="text" value="Karina Robles" class="form-control">
                            </div>
                            
                            <div class="form-group">
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
<script>
	function close_file(){
		$("#modal_input_file").modal("hide");
	}
</script>