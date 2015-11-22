<?php

use Illuminate\Database\Seeder;

class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ejemplo 1
      /*  DB::table("Personal")->insert([
            //Array con los valores
        ]);*/

        factory(App\Personal::class,100)->create();

    }
}
