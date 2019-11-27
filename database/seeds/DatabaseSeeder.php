<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            DocentesTableSeeder::class,
            Plan_CurricularTableSeeder::class,
            CursosTableSeeder::class,
            MateriasTableSeeder::class,
            EstudiantesTableSeeder::class,
            EstudiantesTableSeeder::class,
        ]);

        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);

    }
}
