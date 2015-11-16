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
                      <li class="previous disabled"><a href="javascript:void(0)">Previous</a></li>
                      <li class="next"><a href="javascript:void(0)">Next</a></li>
                      <p>
                        <button id="nuevo" class="btn btn-danger">Nuevo</button>
                        <button id="guardar" class="btn btn-danger" >Guardar</button>
                        <button id="modificar" class="btn btn-danger">Modificar</button>
                        <button id="ConsultarUsr" class="btn btn-danger">Consultar</button>
                        <button id="eliminar" class="btn btn-danger">Eliminar</button>
                        <button id="listar" class="btn btn-danger">Listar</button>
                        <button id="limpiar" class="btn btn-danger">Limpiar</button>
                        <button id="salir" class="btn btn-danger">Salir</button>
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
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar Mensaje</button>
       </div>
     </div>
   </div>
</div>


@section('js')
<script src="{{ URL::asset('js/application/Animales/DatosAnimal.js') }}"></script>
@stop
	<script>
		jQuery(document).ready(function(){

		  	// Basic Wizard
		  	jQuery('#basicWizard').bootstrapWizard();

		  	// Progress Wizard
		  	$('#progressWizard').bootstrapWizard({
		    	'nextSelector': '.next',
		    	'previousSelector': '.previous',
		    	onNext: function(tab, navigation, index) {
		      		var $total = navigation.find('li').length;
		      		var $current = index+1;
		      		var $percent = ($current/$total) * 100;
		      		jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
		    	},

		    	onPrevious: function(tab, navigation, index) {
		    		var $total = navigation.find('li').length;
		      		var $current = index+1;
		      		var $percent = ($current/$total) * 100;
		      		jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
		    	},

		    	onTabShow: function(tab, navigation, index) {
		      		var $total = navigation.find('li').length;
				    var $current = index+1;
				    var $percent = ($current/$total) * 100;
				    jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
				}
		 	});

		  	// Disabled Tab Click Wizard
		  	jQuery('#disabledTabWizard').bootstrapWizard({
		    	tabClass: 'nav nav-pills nav-justified nav-disabled-click',
		    	onTabClick: function(tab, navigation, index) {
		      		return false;
		    	}
		  	});

		  	// With Form Validation Wizard
		  	var $validator = jQuery("#firstForm").validate({
		    	highlight: function(element) {
		      	jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		    	},

		    	success: function(element) {
		      		jQuery(element).closest('.form-group').removeClass('has-error');
		    	}
		  	});

		  	jQuery('#validationWizard').bootstrapWizard({
		    	tabClass: 'nav nav-pills nav-justified nav-disabled-click',
		    	onTabClick: function(tab, navigation, index) {
		      		return false;
		    	},

		    	onNext: function(tab, navigation, index) {
		      		var $valid = jQuery('#firstForm').valid();
		      		if(!$valid) {

		        		$validator.focusInvalid();
		        		return false;
		      		}
		    	}
		  	});
		});
	</script>

	<script>
		jQuery(document).ready(function(){

			// Chosen Select
		  	jQuery(".chosen-select").chosen({'width':'100%','white-space':'nowrap'});

		  	// Tags Input
		  	jQuery('#tags').tagsInput({width:'auto'});

		  	// Textarea Autogrow
		  	jQuery('#autoResizeTA').autogrow();

		  	// Color Picker
		 //  	if(jQuery('#colorpicker').length > 0) {
		 //  		jQuery('#colorSelector').ColorPicker({
		 //  			onShow: function (colpkr) {
		 //  				jQuery(colpkr).fadeIn(500);
		 //  				return false;
		 //  			},

			// 		onHide: function (colpkr) {
			// 			jQuery(colpkr).fadeOut(500);
			// 			return false;
			// 		},

			// 		onChange: function (hsb, hex, rgb) {
			// 			jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
			// 			jQuery('#colorpicker').val('#'+hex);
			// 		}
			// 	});
			// }

		  	// Color Picker Flat Mode
		 //  	jQuery('#colorpickerholder').ColorPicker({
		 //  		flat: true,
		 //  		onChange: function (hsb, hex, rgb) {
		 //  			jQuery('#colorpicker3').val('#'+hex);
			// 	}
			// });

			// Date Picker
			// jQuery('#datepicker').datepicker();

			// jQuery('#datepicker-inline').datepicker();

			jQuery('#datepicker-multiple').datepicker({
				numberOfMonths: 3,
				showButtonPanel: true
			});

			// Spinner
			// var spinner = jQuery('#spinner').spinner();
			// spinner.spinner('value', 0);

			// Input Masks
			jQuery("#date").mask("99/99/9999");
			// jQuery("#phone").mask("(999) 999-9999");
			// jQuery("#ssn").mask("999-99-9999");

			// // Time Picker
			// jQuery('#timepicker').timepicker({defaultTIme: false});
			// jQuery('#timepicker2').timepicker({showMeridian: false});
			// jQuery('#timepicker3').timepicker({minuteStep: 15});
		});
	</script>
	<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi ui-datepicker-multi-3" style="position: absolute; top: 4774px; left: 280px; z-index: 1; display: block; width: 51em;"><div class="ui-datepicker-group ui-datepicker-group-first"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">September</span>&nbsp;<span class="ui-datepicker-year">2015</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">4</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">5</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">11</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">12</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">18</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">19</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">25</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">26</a></td></tr><tr><td class=" ui-datepicker-week-end  ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default ui-state-highlight" href="#">27</a></td><td class="  ui-datepicker-current-day" data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default ui-state-active" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="8" data-year="2015"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-middle"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix"><div class="ui-datepicker-title"><span class="ui-datepicker-month">October</span>&nbsp;<span class="ui-datepicker-year">2015</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">2</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">3</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">9</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">10</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">16</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">17</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">23</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">24</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="9" data-year="2015"><a class="ui-state-default" href="#">31</a></td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-last"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">November</span>&nbsp;<span class="ui-datepicker-year">2015</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">6</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">7</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">13</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">14</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">20</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">21</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">27</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">28</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div><div class="ui-datepicker-buttonpane ui-widget-content"><button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" data-handler="today" data-event="click">Today</button><button type="button" class="ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all" data-handler="hide" data-event="click">Done</button></div></div>
@stop
