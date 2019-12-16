<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->nombre = "admin";
        $role->descripcion = "Administrador del sistema";
        $role->save();

        $role = new Role();
        $role->nombre = "administrativo";
        $role->descripcion = "Personal de kardex u contabilidad";
        $role->save();

        $role = new Role();
        $role->nombre = "docente";
        $role->descripcion = "docente de la institución";
        $role->save();

        $role = new Role();
        $role->nombre = "estudiante";
        $role->descripcion = "estudiante de la institución";
        $role->save();
    }
}
