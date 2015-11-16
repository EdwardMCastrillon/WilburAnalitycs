<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
  /**
* Run the migrations.
*
* @return void
*/
public function up()
{
   Schema::create('Personal', function (Blueprint $table) {
       $table->increments('id')->index();
       $table->string('documento', 15)->unique();
       $table->integer('idTipoDocumento');
       $table->string('nombre', 40);
       $table->string('primerApellido', 30);
       $table->string('segundoApellido', 30)->nullable();
       $table->date('fechaNacimiento')->nullable();
       $table->integer('idDepartamento')->nullable();
       $table->integer('idMunicipio')->nullable();
       $table->string('tipoSangre')->nullable();
       $table->string('tipoRh')->nullable();
       $table->string('direccion', 60);
       $table->string('correo', 60)->unique();
       $table->string('telefono', 8);
       $table->string('telefonoMovil', 11);
       $table->integer('idProfesion')->nullable();
       $table->date('fechaTitulo')->nullable();
       $table->string('otrosEstudios', 60)->nullable();
       $table->date('finalizacion')->nullable();
       $table->string('obtenido', 2)->nullable();
       $table->integer('idCargo')->nullable();
       $table->integer('idTipoContrato')->nullable();
       $table->date('fechaContrato')->nullable();
       $table->string('estado', 2);
       $table->timestamps();
   });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
   Schema::drop('Personal');
  }
}
