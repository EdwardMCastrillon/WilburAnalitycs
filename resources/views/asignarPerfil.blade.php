@extends('layouts/app')

@section('content')
<div class="row">
  <div class="col-md-8">
    <form novalidate="novalidate" id="formAsigPerfil" action="{{ route('save_asigperfil_path') }}" class="form-horizontal">
    <div class="panel panel-default">
        <div class="panel-heading">
          @include('partials.succesfull')
          <div class="panel-btns">
            <a href="#" class="panel-close">×</a>
            <a href="#" class="minimize">−</a>
          </div>
          <h4 class="panel-title">Asignar Perfil</h4>
        </div>
        <div class="panel-body">
          <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="patch">
          <div class="form-group">
            <label class="col-sm-3"><span class="asterisk">*</span>Documento</label>
            <div class="col-sm-9">
              <input name="documento" id="documento" class="form-control" placeholder="Type your name..." required="" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3"><span class="asterisk">*</span>Nombre</label>
            <div class="col-sm-9">
              <input name="name" id="name" class="form-control" placeholder="Type your name..." required="" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3"><span class="asterisk">*</span>Perfil</label>
            <div class="col-sm-9">
              <select class="form-control" name="perfil" id="perfil">
                <option value="0">Seleccione un Perfil</option>
                  @foreach($perfiles as $perfil)
                      <option value="{{ $perfil->idPerfil }}">{{ $perfil->descripcion }}</option>
                  @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3"><span class="asterisk">*</span>Nombre de Usuario</label>
            <div class="col-sm-9">
              <input name="userName" id="userName" class="form-control" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3"><span class="asterisk">*</span>Contraseña</label>
            <div class="col-sm-9">
              <input name="password" id="password" class="form-control" placeholder="Type your email..." required="" type="password">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3"><span class="asterisk">*</span>Repetir Contraseña</label>
            <div class="col-sm-9">
              <input name="respassword" id="respassword" class="form-control" placeholder="Type your email..." required="" type="password">
            </div>
          </div>
        </div><!-- panel-body -->
        <div class="panel-footer">
          <ul class="pager wizard"><button id="nuevo" class="btn btn-danger">Nuevo</button>
            <input type="submit" id="guardar" class="btn btn-danger" value="Guardar"/>
            <button id="modificar" class="btn btn-danger">Modificar</button>
            <button id="consultar" class="btn btn-danger">Consultar</button>
            <button id="eliminar" class="btn btn-danger">Eliminar</button>
            <button id="listar" class="btn btn-danger">Listar</button>
            <button id="limpiar" class="btn btn-danger">Limpiar</button>
            <button id="salir" class="btn btn-danger">Salir</button>
        </ul>
      </div>

    </div><!-- panel -->
    </form>


  </div>
</div>
@stop

@section('js')

  <script src="{{ URL::asset('js/application/Personal/AsignarPerfil.js') }}"></script>

@stop
