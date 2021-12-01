<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);
        $role->permissions()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21]);

        $role = Role::create(['name' => 'Proveedor']);
        $role->syncPermissions(['Buscar', 'Cargar listas', 'Descargar listas', 'Crear usuario', 'Leer usuarios', 'Editar usuarios', 'Cargar incremental', 'Cargar completa', 'Descargar incremental', 'Descargar completa', 'Buscar honduras', 'Descargar incremental honduras', 'Descargar completa honduras', 'Listar entidades']);

        $role = Role::create(['name' => 'Cliente']);
        $role->syncPermissions(['Buscar', 'Descargar listas', 'Descargar incremental', 'Descargar completa']);

        $role = Role::create(['name' => 'Cliente Honduras']);
        $role->syncPermissions(['Buscar honduras', 'Descargar listas', 'Descargar incremental honduras', 'Descargar completa honduras']);
    }
}
