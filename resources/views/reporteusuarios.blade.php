@extends('layouts/app')

@section('content')
<div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-btns">
              <a href="#" class="panel-close">×</a>
              <a href="#" class="minimize">−</a>
              <h4 class="panel-title">Reporte Usuarios </h4>
              <p>Todos los usuarios registrados en el sistema.</p>
            </div>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                    <div class="table-responsive">
                    <table class="table table-striped mb30">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Documento</th>
                          <th>Nombre de Usuario</th>
                          <th>Perfil</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                			      <tr>
                			        <td>{{ $user->id }}</td>
                			        <td>{{ $user->document }}</td>
                			        <td>{{ $user->userName }}</td>
                			        <td>{{ $user->idPerfil }}</td>
                			      </tr>
                				@endforeach
                      </tbody>
                    </table>
                    </div><!-- table-responsive -->
                  </div>
          </div>
        </div>
@stop
