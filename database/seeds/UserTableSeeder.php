<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('nombre','admin')->first();
        $role_user = Role::where('nombre','estudiante')->first();


        $user = new User(); 
        $user->name = "admin";
        $user->apellPaterno = "";
        $user->apellMaterno = "";
        $user->ci = 1;
        $user->privilegio = "admin";
        $user->observacion = "";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User(); 
        $user->name = "luis";
        $user->apellPaterno = "";
        $user->apellMaterno = "";
        $user->ci = 2;
        $user->privilegio = "estudiante";
        $user->observacion = "";
        $user->email = "estudiante@gmail.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_user);

    }

}
