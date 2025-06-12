<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{

    // public function crearAdmin(){
    //     //crear directamente un admin // importante
    //     User::create([
    //         'name' => 'Facultad Autodidacta',
    //         'email' => 'admin@admin.com',
    //         'password' => Hash::make('admin'),
    //         'activo' => true,
    //         'rol' => 'admin'
    //     ]);

    //     return "Admin creado con exito!!";
    // }


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jose Luis',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'activo' => true,
            'rol' => 'admin',
        ]);

          //Llamo al factory
         User::factory(15)->create();
    }
}
