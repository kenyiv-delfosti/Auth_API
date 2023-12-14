<?php

namespace Database\Seeders;

use App\Models\CapabilityRole;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::create([
            'user_id' => 1,
            'capability_role_id' => 1,
        ]);

        UserRole::create([
            'user_id' => 2,
            'capability_role_id' => 2,
        ]);

        UserRole::create([
            'user_id' => 3,
            'capability_role_id' => 2,
        ]);

        UserRole::create([
            'user_id' => 4,
            'capability_role_id' => 2,
        ]);
    }
}
