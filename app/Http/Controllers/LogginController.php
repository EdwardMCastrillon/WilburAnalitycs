<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LogginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('loggin');
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
    public function login(Request $request)
    {
      $this->validate($request, [
           'userName'    => 'required',
           'password' => 'required',
       ]);
       if (!auth()->attempt($request->only(['userName', 'password']))) {
           return redirect()->route('auth_show_path')->withErrors('El usuario no se encuentra registrado.');
       }
       return redirect()->route('show_menu_path');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
      auth()->logout();
      return redirect()->route('auth_show_path');
    }
}
