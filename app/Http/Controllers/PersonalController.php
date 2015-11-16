<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cargo;
use App\Profesion;
use App\TipoContrato;
use App\TipoDocumento;
use App\Personal;
use App\Departamento;
use App\Municipio;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function personal(Request $request)
     {
         //$documento = Cargo::create(['descripcion' => 'Alimentación']);
         //$documento->save();
         $cargo = Cargo::all();
         $profesion = Profesion::all();
         $tipoDocumento = TipoDocumento::all();
         $tipoContrato = TipoContrato::all();
         $departamento = Departamento::all();
         $array = array();
         array_push($array, $tipoDocumento, $departamento, $profesion,  $cargo, $tipoContrato);

         return view('personal')->with('array', $array);
     }

     public function guardar(Request $Request){



          $Persona = new Personal();

          $Persona->nombre = $Request->nombres;
          $Persona->documento = $Request->documento;
          $Persona->idTipoDocumento = $Request->tipoDocumento;
          $Persona->primerApellido = $Request->prApellido;
          $Persona->segundoApellido = $Request->sgApellido;
          $Persona->fechaNacimiento = $Request->fechaNaci;
          $Persona->idDepartamento = $Request->departamento;
          $Persona->idMunicipio = $Request->municipio;
          $Persona->tipoSangre = $Request->sangre;
          $Persona->tipoRh = $Request->rh;
          $Persona->direccion = $Request->direccion;
          $Persona->correo = $Request->email;
          $Persona->telefono = $Request->telfijo;
          $Persona->telefonoMovil = $Request->telMovil;
          $Persona->idProfesion = $Request->profesion;
          $Persona->fechaTitulo = $Request->fechaTitulo;
          $Persona->otrosEstudios = $Request->otrosEstu;
          $Persona->finalizacion = $Request->fechaFin;
          $Persona->obtenido = "Si";
          $Persona->idCargo = $Request->cargo;
          $Persona->idTipoContrato = $Request->contrato;
          $Persona->fechaContrato = $Request->fechaContra;
          $Persona->estado = $Request->estado;

          $Persona->save();
          return view('guardado');
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id, 2015-11-16 09:37:40, 2015-11-16 09:37:40) returning "id")
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $municipios = Municipio::where('idDepartamento', '=', $id)->get();

        return dd($municipios);//->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
