<?php
use Illuminate\Support\Str;
//use Illuminate\Support\Int;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Docente;

class DocenteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Docente::class, 10)->create();
        
    }
}
