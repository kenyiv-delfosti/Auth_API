<?php

namespace Database\Seeders;

use App\Models\CapabilityPermission;
use App\Models\CapabilityRole;
use App\Models\RolePermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 1,
        ]);

        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 2,
        ]);

        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 3,
        ]);
        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 4,
        ]);

        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 5,
        ]);

        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 6,
        ]);

        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 7,
        ]);

        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 8,

        ]);

        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 9,
        ]);

        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 10,
        ]);

        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 11,
        ]);

        RolePermission::create([
            'capability_role_id' => 1,
            'capability_permission_id' => 12,
        ]);

        RolePermission::create([
            'capability_role_id' => 2,
            'capability_permission_id' => 12,
        ]);
    }
}
