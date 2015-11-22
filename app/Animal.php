<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Animal extends Model implements AuthenticatableContract,
                                         AuthorizableContract,
                                         CanResetPasswordContract
{
  use Authenticatable, Authorizable, CanResetPassword;

    //

    protected $table = 'Animales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = ['documento', 'idTipoDocumento', 'nombre', 'primerApellido',
                           'direccion', 'correo', 'telefono', 'telefonoMovil', 'estado'];*/

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['remember_token'];

}
