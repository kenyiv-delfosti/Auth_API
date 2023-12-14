<?php

namespace Database\Seeders;

use App\Models\CapabilityRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapabilityRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CapabilityRole::create([
            'name' => 'admin',
        ]);

        CapabilityRole::create([
             'name' => 'consumer',
        ]);
    }
}
