<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Roberto Mendoza Figueroa',
            'tipo_doc' => 'DNI',
            'num_doc' => '72185817',
            'celular' => '926854831',
            'email' => 'arnorouge55@gmail.com',
            'direccion' => 'Jr. Francisco de Zela 524',
            'password' => bcrypt('Admin')
        ])->assignRole('Admin');
    }
}
