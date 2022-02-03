<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'rol-uno']);
        $role2 = Role::create(['name' => 'rol-dos']);

        $permission = Permission::create(['name' => 'admin.inicio', 'description' => 'Mostrar inicio'])->syncRoles([$role1, $role2 ]);

        $permission = Permission::create(['name' => 'admin.fpsrfi.index', 'description' => 'Ver FPSRFI'])->syncRoles([$role1, $role2 ]);
        $permission = Permission::create(['name' => 'admin.fpsrfi.create', 'description' => 'Crear FPSRFI'])->syncRoles([$role1, $role2 ]);
        $permission = Permission::create(['name' => 'admin.fpsrfi.edit', 'description' => 'Editar FPSRFI'])->syncRoles([$role1, $role2 ]);
        $permission = Permission::create(['name' => 'admin.fpsrfi.destroy', 'description' => 'Borrar FPSRFI'])->syncRoles([$role1, $role2 ]);

        $permission = Permission::create(['name' => 'admin.users.index', 'description' => 'Ver usuarios'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.users.edit', 'description' => 'Editar usuarios'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.users.update', 'description' => 'Actualizar usuarios'])->syncRoles([$role1]);
    }
}
