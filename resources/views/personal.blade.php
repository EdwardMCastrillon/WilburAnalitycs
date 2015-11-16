@extends('layouts/app')

@section('content')



<div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-btns">
              <a href="#" class="panel-close">×</a>
              <a href="#" class="minimize">−</a>
            </div>
            <h4 class="panel-title">Registro Personal</h4>
          </div>
          <div class="panel-body panel-body-nopadding">
            <!-- BASIC WIZARD -->
            <div id="validationWizard" class="basic-wizard">

              <ul class="nav nav-pills nav-justified nav-disabled-click">
                <li class="active"><a href="#vtab1" data-toggle="tab"><span></span>Datos Personales</a></li>
                <li><a href="#vtab2" data-toggle="tab"><span></span>Datos Residencia</a></li>
                <li><a href="#vtab3" data-toggle="tab"><span></span>Datos Academicos</a></li>
                <li><a href="#vtab4" data-toggle="tab"><span></span>Datos Laborales</a></li>
              </ul>

              <form action="/guardarUsuario" novalidate="novalidate" class="form" id="firstForm">
              <div class="tab-content">

                <div class="tab-pane active" id="vtab1">
                  <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Documento</label>
                      <div class="col-sm-5">
                        <input name="documento" id="documento" class="form-control" required="" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4">Tipo Documento</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="tipoDocumento" id="tipoDocumento">
                          <option value="0">Seleccione...</option>
                            @foreach($array[0] as $combo)
                                <option value="{{ $combo->idTipoDocumento }}">{{ $combo->descripcion }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nombres</label>
                      <div class="col-sm-6">
                        <input name="nombres" id="nombres" class="form-control" required="" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Primer Apellido</label>
                      <div class="col-sm-6">
                        <input name="prApellido" id="prApellido" class="form-control" required="" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Segundo Apellido</label>
                      <div class="col-sm-6">
                        <input name="sgApellido" id="sgApellido" class="form-control" required="" type="text">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </div>
                    </div>
                </div>
                  <div class="col-md-5">

                    <div class="form-group">
                      <label class="col-sm-4">Fecha Nacimiento</label>
                      <div class="col-sm-6">
                        <div class="input-group">
                          <input class="form-control hasDatepicker" placeholder="mm/dd/yyyy" id="datepicker-multiple fechaNaci" type="text" name="fechaNaci" >
                          <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4">Departamento</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="departamento" id="departamento">
                          <option value="0">Seleccione...</option>
                            @foreach($array[1] as $combo)
                                <option value="{{ $combo->idDepartamento }}">{{ $combo->descripcion }}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4">Municipio</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="municipio" id="municipio">
                          <option value="0">Seleccione una Opcion</option>
                          <option value="1">Cedula Ciudadania</option>
                          <option value="2">Cedula Extranjeria</option>
                          <option value="3">Pasaporte</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4">Tipo Sangre</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="sangre" id="sangre">
                          <option value="0">Seleccione una Opcion</option>
                          <option value="1">A</option>
                          <option value="2">B</option>
                          <option value="3">O</option>
                          <option value="4">AB</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4">Tipo Rh</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="rh" id="rh">
                          <option value="0">Seleccione una Opcion</option>
                          <option value="1">+</option>
                          <option value="2">-</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
                </div>
                </div>

                <div class="tab-pane" id="vtab2">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Direccion</label>
                      <div class="col-sm-7">
                        <input name="direccion" id="direccion" class="form-control" required="" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Correo Electronico</label>
                      <div class="col-sm-7">
                        <input name="email" id="email" class="form-control" required="" type="email">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Telefono Fijo</label>
                      <div class="col-sm-4">
                        <input name="telfijo" id="telfijo" class="form-control" required="" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Telefono Movil</label>
                      <div class="col-sm-4">
                        <input name="telMovil" id="telMovil" class="form-control" required="" type="text">
                      </div>
                    </div>

                </div>

                <div class="tab-pane" id="vtab3">
                  <div class="form-group">
                    <label class="col-sm-3">Profesion</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="profesion" id="profesion">
                        <option value="0">Seleccione...</option>
                          @foreach($array[2] as $combo)
                              <option value="{{ $combo->idProfesion }}">{{ $combo->descripcion }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3">Fecha Obtencion Titulo</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <input class="form-control hasDatepicker" placeholder="mm/dd/yyyy" id="datepicker-multiple fechaTitulo" type="text" name="fechaTitulo">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Otros Estudios</label>
                    <div class="col-sm-7">
                      <input name="otrosEstu" id="otrosEstu" class="form-control" required="" type="text">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3">Fecha Finalizacion</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <input class="form-control hasDatepicker" placeholder="mm/dd/yyyy" id="datepicker-multiple fechaFin" type="text" name="fechaFin">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Titulo Obtenido</label>
                    <div class="col-sm-6">
                     <div class="radio"><label><input type="radio" name="si" id="si"> Si</label></div>
                     <div class="radio"><label><input type="radio" name="no" id="no"> No</label></div>
                    </div>
                  </div>

                </div>

                <div class="tab-pane" id="vtab4">

                <div class="form-group">
                  <label class="col-sm-3">Cargo</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="cargo" id="cargo">
                      <option value="0">Seleccione...</option>
                        @foreach($array[3] as $combo)
                            <option value="{{ $combo->idCargo }}">{{ $combo->descripcion }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>

                  <div class="form-group">
                    <label class="col-sm-3">Tipo Contrato</label>
                    <div class="col-sm-7">
                      <select class="form-control" name="contrato" id="contrato">
                        <option value="0">Seleccione...</option>
                          @foreach($array[4] as $combo)
                              <option value="{{ $combo->idTipoContrato }}">{{ $combo->descripcion }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3">Fecha Contrato</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <input class="form-control hasDatepicker" placeholder="mm/dd/yyyy" id="datepicker-multiple fechaContra" type="text" name="fechaContra">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3">Estado</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="estado" id="estado">
                        <option value="0">Seleccione uno</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                      </select>
                    </div>
                  </div>

                </div>


              </div><!-- tab-content -->
              <ul class="pager wizard">
                  <li class="previous disabled"><a href="javascript:void(0)">Previous</a></li>
                  <li class="next"><a href="javascript:void(0)">Next</a></li>
                  <p>
                    <button id="nuevo" class="btn btn-danger">Nuevo</button>
                    <input type="submit" id="guardar" class="btn btn-danger" value="guardar"/>
                    <button id="modificar" class="btn btn-danger">Modificar</button>
                    <button id="consultar" class="btn btn-danger">Consultar</button>
                    <button id="eliminar" class="btn btn-danger">Eliminar</button>
                    <button id="listar" class="btn btn-danger">Listar</button>
                    <button id="limpiar" class="btn btn-danger">Limpiar</button>
                    <button id="salir" class="btn btn-danger">Salir</button>
                  </p>
              </ul>
              </form>
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


            </div><!-- #validationWizard -->

          </div><!-- panel-body -->
        </div><!-- panel -->
      </div>
@stop

@section('js')




<script src="{{ URL::asset('js/bootstrap-wizard.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.maskedinput.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.tagsinput.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.mousewheel.js') }}"></script>
<script src="{{ URL::asset('js/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('js/colorpicker.js') }}"></script>
<script src="{{ URL::asset('js/application/personal.js') }}"></script>

<script src="{{ URL::asset('js/personal/wizard.js') }}"></script>
<tester id="tags_tag_autosize_tester" style="position: absolute; top: -9999px; left: -9999px; width: auto; font-size: 13px; font-family: &quot;LatoRegular&quot;,&quot;Lucida Grande&quot;,&quot;Lucida Sans Unicode&quot;,Helvetica,sans-serif; font-weight: 400; letter-spacing: 0px; white-space: nowrap;"></tester>
<div style="left: 674.5px; top: 4634.07px; display: none;" id="collorpicker_535" class="colorpicker"><div style="background-color: rgb(255, 0, 0);" class="colorpicker_color"><div><div style="left: 105px; top: 117px;"></div></div></div><div class="colorpicker_hue"><div style="top: 150px;"></div></div><div style="background-color: rgb(56, 17, 17);" class="colorpicker_new_color"></div><div style="background-color: rgb(255, 0, 0);" class="colorpicker_current_color"></div><div class="colorpicker_hex"><input maxlength="6" size="6" type="text"></div><div class="colorpicker_rgb_r colorpicker_field"><input maxlength="3" size="3" type="text"><span></span></div><div class="colorpicker_rgb_g colorpicker_field"><input maxlength="3" size="3" type="text"><span></span></div><div class="colorpicker_rgb_b colorpicker_field"><input maxlength="3" size="3" type="text"><span></span></div><div class="colorpicker_hsb_h colorpicker_field"><input maxlength="3" size="3" type="text"><span></span></div><div class="colorpicker_hsb_s colorpicker_field"><input maxlength="3" size="3" type="text"><span></span></div><div class="colorpicker_hsb_b colorpicker_field"><input maxlength="3" size="3" type="text"><span></span></div><div class="colorpicker_submit"></div></div>
<div style="position: absolute; top: 4484.4px; left: 280px; z-index: 1; display: none; width: 51em;" id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi ui-datepicker-multi-3"><div class="ui-datepicker-group ui-datepicker-group-first"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">November</span>&nbsp;<span class="ui-datepicker-year">2015</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">6</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">7</a></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-days-cell-over  ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default ui-state-highlight" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">13</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">14</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">20</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">21</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">27</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">28</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="10" data-year="2015"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-middle"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix"><div class="ui-datepicker-title"><span class="ui-datepicker-month">December</span>&nbsp;<span class="ui-datepicker-year">2015</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">4</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">5</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">11</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">12</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">18</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">19</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">25</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">26</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="11" data-year="2015"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-group ui-datepicker-group-last"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">January</span>&nbsp;<span class="ui-datepicker-year">2016</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th><span title="Monday">Mo</span></th><th><span title="Tuesday">Tu</span></th><th><span title="Wednesday">We</span></th><th><span title="Thursday">Th</span></th><th><span title="Friday">Fr</span></th><th class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">1</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">2</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">8</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">9</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">15</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">16</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">22</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">23</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">29</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">30</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="0" data-year="2016"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div><div class="ui-datepicker-row-break"></div><div class="ui-datepicker-buttonpane ui-widget-content"><button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" data-handler="today" data-event="click">Today</button><button type="button" class="ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all" data-handler="hide" data-event="click">Done</button></div></div>
<input style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;" multiple="multiple" type="file">

@stop
