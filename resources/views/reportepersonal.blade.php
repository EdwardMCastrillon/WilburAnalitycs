@extends('layouts/app')

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-btns">
              <a href="#" class="panel-close">×</a>
              <a href="#" class="minimize">−</a>
              <h4 class="panel-title">Reporte Personal </h4>
              <p>Todos los empleados registrados en el sistema.</p>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                    <div class="table-responsive">
                    <table class="table table-striped mb30">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tipo Documento</th>
                          <th>Documento</th>
                          <th>Nombre</th>
                          <th>Apellidos</th>
                          <th>Fecha Nacimiento</th>
                          <th>Departamento</th>
                          <th>Municipio</th>
                          <th>Cargo</th>
                          <th>Tipo Contrato</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($personas as $persona)
                			      <tr>
                			        <td>{{ $persona->id }}</td>
                			        <td>{{ $persona->idTipoDocumento }}</td>
                			        <td>{{ $persona->documento }}</td>
                			        <td>{{ $persona->nombre }}</td>
                			        <td>{{ $persona->primerApellido." ".$persona->segundoApellido }}</td>
                			        <td>{{ $persona->fechaNacimiento }}</td>
                			        <td>{{ $persona->idDepartamento }}</td>
                			        <td>{{ $persona->idMunicipio }}</td>
                			        <td>{{ $persona->idCargo }}</td>
                			        <td>{{ $persona->idTipoContrato }}</td>
                			      </tr>
                				@endforeach
                      </tbody>
                    </table>
                    </div><!-- table-responsive -->
                  </div>
          </div>
        </div>
@stop
