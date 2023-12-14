<?php

namespace Database\Seeders;

use App\Models\CapabilityPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapabilityPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        CapabilityPermission::create([
            'name' => 'create_user',
            'module' => 'user',
        ]);

        CapabilityPermission::create([
            'name' => 'update_user',
            'module' => 'user',
        ]);

        CapabilityPermission::create([
            'name' => 'delete_user',
            'module' => 'user',
        ]);

        CapabilityPermission::create([
            'name' => 'edit_user',
            'module' => 'user',
        ]);

        CapabilityPermission::create([
            'name' => 'create_project',
            'module' => 'project',
        ]);

        CapabilityPermission::create([
            'name' => 'update_project',
            'module' => 'project',
        ]);

        CapabilityPermission::create([
            'name' => 'delete_project',
            'module' => 'project',
        ]);

        CapabilityPermission::create([
            'name' => 'edit_project',
            'module' => 'project',
        ]);

        CapabilityPermission::create([
            'name' => 'create_task',
            'module' => 'task',
        ]);

        CapabilityPermission::create([
            'name' => 'update_task',
            'module' => 'task',
        ]);

        CapabilityPermission::create([
            'name' => 'delete_task',
            'module' => 'task',
        ]);

        CapabilityPermission::create([
            'name' => 'edit_task',
            'module' => 'task',
        ]);

    }

}
