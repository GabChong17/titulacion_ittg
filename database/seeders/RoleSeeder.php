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
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'egresado']);
        $role3 = Role::create(['name' => 'division']);
        $role4 = Role::create(['name' => 'jefatura']);
        $role5 = Role::create(['name' => 'academia']);
        $role6 = Role::create(['name' => 'escolares']);
        $role7 = Role::create(['name' => 'asesor']);
    }
}
