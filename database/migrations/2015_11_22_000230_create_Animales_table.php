<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalesTable extends Migration
{
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
        Schema::create('Animales', function (Blueprint $table) {
          $table->increments('idAnimal');
          $table->String('procedencia', 70);
          $table->String('codigo', 30)->index();
          $table->String('raza', 30);
          $table->String('estado', 2);
          $table->String('pesoNacer', 10);
          $table->String('pesoDestete', 10);
          $table->date('fechaDestete');
          $table->String('fechaConsumo');
          $table->String('codigoParto', 30);
          $table->date('fechaParto');
          $table->String('codigoMadre', 30);
          $table->String('Edad', 3);
          $table->String('razaMadre',30);
          $table->String('razaPadre', 30);
          $table->String('tipoAnimal', 30);
          $table->rememberToken();
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
          Schema::drop('Animales');
      }
}
