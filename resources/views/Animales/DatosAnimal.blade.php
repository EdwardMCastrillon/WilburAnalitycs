@extends('layouts/app')


@section('content')
  <div class="content-panel">


	<div class="col-md-10" style = "margin: 30 5 0 80;">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-btns">
					<a href="#" class="panel-close">×</a>
                	<a href="#" class="minimize">−</a>
                </div>
                <h4 class="panel-title">Gestión Datos Animal</h4>
            </div>
            <div class="panel-body panel-body-nopadding">
            	<!-- BASIC WIZARD -->
            	<div id="validationWizard" class="basic-wizard">
            		<ul class="nav nav-pills nav-justified nav-disabled-click">
            			<li class="active"><a href="#vtab1" data-toggle="tab"><!-- <span>Step 1:</span> --> Identificación del Animal</a></li>
                  		<li class=""><a href="#vtab2" data-toggle="tab"><!-- <span>Step 2:</span> --> Peso del Animal</a></li>
                  		<li><a href="#vtab3" data-toggle="tab"><!-- <span>Step 3:</span> --> Datos del Parto</a></li>
                  	</ul>

                  	<form class="form" id="firstForm" novalidate="novalidate" action="/gestionAnimal/animales/store">
                  		<div class="tab-content">
                  			<div class="tab-pane active" id="vtab1">
		                  		<div class="form-group has-error">
		                  			<label class="col-sm-4 control-label">Procedencia</label>
		                  			<div class="col-sm-8">
		                  				<select name="procedencia" class="form-control valid" >
		                  					    <option value="">Seleccione uno</option>
                                    <option value="prueba">Granja Propia</option>
				                            <option value="prueba">Granjas SENA</option>
				                        </select>
				                        <label for="" class="error" style="display: inline-block;">Este campo es obligatorio.</label>
				                    </div>
				                </div>

                  				<div class="form-group has-error">
                  					<label class="col-sm-4 control-label">Código</label>
                  					<div class="col-sm-4">
                  						<input type="text" name="codigo" class="form-control valid" >
                  						<label for="codigo" class="error" style="display: inline-block;">Este campo es obligatorio.</label>
                  					</div>
                  				</div>

                  				<div class="form-group has-error">
		                  			<label class="col-sm-4 control-label">Raza</label>
		                  			<div class="col-sm-4">
		                  				<select name="raza" class="form-control valid" >
		                  					<option value="">...</option>
				                            <option value="prueba">Opción</option>
				                        </select>
				                        <label for="" class="error" style="display: inline-block;">Este campo es obligatorio.</label>
				                    </div>
				                </div>

				                <div class="form-group has-error">
		                  			<label class="col-sm-4 control-label">Sexo</label>
		                  			<div class="col-sm-4">
		                  				<select name ="sexo" class="form-control valid" >
		                  					<option value="">...</option>
				                            <option value="prueba">Opción</option>
				                        </select>
				                        <label for="" class="error" style="display: inline-block;">Este campo es obligatorio.</label>
				                    </div>
				                </div>

				                <div class="form-group">
				                	<label class="col-sm-4 control-label">Estado</label>
				                	<div class="col-sm-8">
				                		<div class="rdio rdio-primary">
				                			<input type="radio" id="vivo" value="m" name="estado"  class="valid">
				                			<label for="vivo">Vivo</label>
				                		</div>

				                		<div class="rdio rdio-primary">
				                			<input type="radio" value="f" id="muerto" name="estado" class="valid">
				                			<label for="muerto">Muerto</label>
				                		</div>
				                		<label class="error" for="estado" style="display: inline-block;">Este campo es obligatorio.</label>
				                	</div>
				                </div>
                 			</div>

                 			<div class="tab-pane" id="vtab2">
                 				<div class="form-group has-error">
                 					<label class="col-sm-4 control-label">Al Nacer (Kg)</label>
                 					<div class="col-sm-4">
                 						<input type="text" name="pesoNacer" class="form-control valid" >
                 						<label for="pesoNacer" class="error" style="display: inline-block;">Este campo es obligatorio.</label>
                 					</div>
                 				</div>
                 				<div class="form-group has-error">
                 					<label class="col-sm-4 control-label">Al Destete (Kg)</label>
                 					<div class="col-sm-4">
                 						<input type="text" name="pesoDestete" class="form-control valid" >
                 						<label for="pesoDestete" class="error" style="display: inline-block;">Este campo es obligatorio.</label>
                 					</div>
                 				</div>
                 				<div class="form-group">
                 					<label class="col-sm-4 control-label">Fecha del Destete</label>
                 					<div class="panel-body">
                 						<div class="input-group">
                 							<input name="fechadestete" type="text" onfocus=".datepicker()" class="form-control hasDatepicker" placeholder="mm/dd/yyyy" id="datepicker-multiple">
                 							<span class="input-group-addon">
                 								<i class="glyphicon glyphicon-calendar"></i>
                 							</span>
                 						</div>
									</div>
				                </div>
				                <div class="form-group">
                 					<label class="col-sm-4 control-label">Fecha Consumo Alimento</label>
                 					<div class="panel-body">
                 						<div class="input-group">
                 							<input name="fechaConsumo" type="text" class="form-control hasDatepicker" placeholder="mm/dd/yyyy" id="datepicker-multiple">
                 							<span class="input-group-addon">
                 								<i class="glyphicon glyphicon-calendar"></i>
                 							</span>
                 						</div>
									</div>
				                </div>
				            </div>

				            <div class="tab-pane" id="vtab3">
				            	<div class="form-group">
				            		<label class="col-sm-4 control-label">Código del Parto</label>
				            		<div class="col-sm-4">
				            			<input type="text" name="codParto" class="form-control">
				            		</div>
				            	</div>

				            	<div class="form-group has-error">
                 					<label class="col-sm-4 control-label">Fecha del Parto</label>
                 					<div class="panel-body">
                 						<div class="input-group">
                 							<input name="fechaparto" type="text" class="form-control hasDatepicker" placeholder="mm/dd/yyyy" id="datepicker-multiple">
                 							<span class="input-group-addon">
                 								<i class="glyphicon glyphicon-calendar"></i>
                 							</span>
                 						</div>
									</div>
				                </div>

								<div class="form-group">
				            		<label class="col-sm-4 control-label">Código de la madre</label>
				            		<div class="col-sm-4">
				            			<input type="text" name="codMadre" class="form-control">
				            		</div>
				            	</div>

				            	<div class="form-group">
				            		<label class="col-sm-4 control-label">Edad</label>
				            		<div class="col-sm-4">
				            			<input type="text" name="edad" class="form-control">
				            		</div>
				            	</div>

				            	<div class="form-group">
		                  			<label class="col-sm-4 control-label">Raza de la Madre</label>
		                  			<div class="col-sm-4">
		                  				<select name="razamadre" class="form-control valid" >
		                  					<option value="">...</option>
				                            <option value="prueba">Opción</option>
				                        </select>
				                    </div>
				                </div>

				                <div class="form-group">
		                  			<label class="col-sm-4 control-label">Raza del Padre</label>
		                  			<div class="col-sm-4">
		                  				<select name="razapadre" class="form-control valid" >
		                  					<option value="">...</option>
				                            <option value="prueba">Opción</option>
				                        </select>
				                    </div>
				                </div>

				                <div class="form-group">
				                	<label class="col-sm-4 control-label">Tipo Animal</label>
				                	<div class="col-sm-8">
				                		<div class="rdio rdio-primary">
				                			<input type="radio" id="reemplazo" value="m" name="tipoAnimal"  class="valid">
				                			<label for="reemplazo">Para Reemplazo</label>
				                		</div>

				                		<div class="rdio rdio-primary">
				                			<input type="radio" value="f" id="engorde" name="tipoAnimal" class="valid">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
				                			<label for="engorde">Para Engorde</label>
				                		</div>
				                	</div>
				                </div>
				            </div>
                  		</div><!-- tab-content -->
                  <ul class="pager wizard">
                      <p>
                        <button id="Nuevo" class="btn btn-danger">Nuevo</button>
                        <button id="Guardar" class="btn btn-danger" >Guardar</button>
                        <button id="Modificar" class="btn btn-danger">Modificar</button>
                        <button id="ConsultarUsr" class="btn btn-danger">Consultar</button>
                        <button id="Eliminar" class="btn btn-danger">Eliminar</button>
                        <button id="Limpiar" class="btn btn-danger">Limpiar</button>
                      </p>
                </ul>
                	</form>

              	</div><!-- #validationWizard -->
            </div><!-- panel-body -->
        </div><!-- panel -->
    </div>
</div>


<div class="modal" id="ModalAlertas">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h4 class="modal-title">Mensaje</h4>
       </div>
       <div class="modal-body">
         <p id="TextoAlerta"></p>
         <div class="cuerpo">

         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-danger text-button" >Guardar</button>
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar Mensaje</button>
       </div>
     </div>
   </div>
</div>


  @section('js')
  <script src="{{ URL::asset('js/application/Animales/DatosAnimal.js') }}"></script>
  @stop

@stop
