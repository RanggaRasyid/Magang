<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $superadminRole = Role::where('name', 'superadmin')->first();
        if (!$superadminRole) {
            Role::create([
                'name' => 'superadmin',
                'guard_name' => 'web'
            ]);
        }
    
        
        $adminRole = Role::where('name', 'admin')->first();
        if (!$adminRole) {
            Role::create([
                'name' => 'mahasiswa',
                'guard_name' => 'web'
            ]);
        }
    }
}
