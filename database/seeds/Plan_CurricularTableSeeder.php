<?php

use Illuminate\Database\Seeder;

class Plan_CurricularTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Plan_Curricular::class, 4)->create();
    }
}
