<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Animal;

class AnimalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consult($id)
    {
        $Animal = App\Animal::find($id);

        return $Animal;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $Request)
    {
        $Animal = new Animal();

        $Animal->idAnimal  = $Request->codigo;
        $Animal->procedencia = $Request->procedencia;
        $Animal->codigo = $Request->codigo;
        $Animal->raza = $Request->raza;
        $Animal->sexo = $Request->sexo;
        $Animal->estado = $Request->estado;
        $Animal->fechaDestete = $Request->fechadestete;
        $Animal->pesoNacer = $Request->pesoNacer;
        $Animal->pesoDestete = $Request->pesoDestete;
        $Animal->fechaConsumo = $Request->fechaConsumo;
        $Animal->codigoParto = $Request->codParto;
        $Animal->fechaParto = $Request->fechaparto;
        $Animal->codigoMadre = $Request->codMadre;
        $Animal->Edad = $Request->edad;
        $Animal->razaMadre = $Request->razamadre;
        $Animal->razaPadre = $Request->razapadre;
        $Animal->tipoAnimal = $Request->tipoAnimal;
        $Animal->remember_token = $Request->_token;

        $Animal->save();

        return redirect('MenuPrincipal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
