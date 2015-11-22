<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Personal::class, function (Faker\Generator $faker) {
    return [
        'id'   =>$faker->unique()->randomDigit,
        'documento' => $faker->randomDigit,
        'idTipoDocumento' => 1,
        'nombre' => 'Edward',
        'primerApellido' => 'Monsalve',
        'SegundoApellido' => 'Castrillon',
        'fechaNacimiento' => '19950213',
        'primerApellido' => 'Monsalve',
        'email' => $faker->email,
        'ciudad'     =>  $faker->city,
        'estado'    => 1,
        'codigoPostal' =>  $faker->postcode,
        'IdMunicipio'  =>  $faker->country,
        'TipoSangre'  =>  $faker->country,
        'IdDepartamento'  =>  $faker->country,
        'telefono'    =>  $faker->phoneNumber,
        'telefonoMovil'    =>  $faker->phoneNumber,
        'imagenPersonal'  =>  $faker->imageUrl($width = 200, $height = 200),
        'fechaContrato' => $faker->text,
        'direccion' => $faker->text,
        'fechaTitulo' => $faker->email,
        'IdProfesion' => $faker->email,
        'obtenido' => $faker->text,
        'IdTipoContrato' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
