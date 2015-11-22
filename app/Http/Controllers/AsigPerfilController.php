<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AsigPerfilController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new User();

        $user->document = $request->documento;
        $user ->idPerfil = $request->perfil;
        $user->userName = $request->userName;
        $user->password = password_hash($request->contra, PASSWORD_DEFAULT);
        $user->remember_token = $request->_token;

        $user->save();

        return redirect()->route('show_asigperfil_path')->withErrors('El usuario se guardo satisfactoriamente.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consulta($id)
    {
        $user = User::where('document', '=', $id)->get();
        $json = json_encode($user);
        return response()->json($user);
    }

    public function all()
    {
      $user = User::all();
      return  json_encode($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
      $user = User::where('document', '=', $id)->get();
        if (is_null ($user))
        {
            return redirect()->route('show_asigperfil_path')->withErrors('El usuario no se encuentra registrado.');
        }

        $user->delete();

        return response()->json(['mensaje' => 'El registro se elimino correctamente']);
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
      $user = User::findOrFail($Request->id);

      $user->document = $request->documento;
      $user ->idPerfil = $request->perfil;
      $user->userName = $request->userName;
      $user->password = password_hash($request->contra, PASSWORD_DEFAULT);
      $user->remember_token = $request->_token;

      $user->save();

      return redirect()->route('show_asigperfil_path')->withErrors('El usuario se modifico satisfactoriamente.');
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
