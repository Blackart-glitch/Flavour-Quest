<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Create roles using the RoleFactory
        Role::factory()->count(1)->create([
            'name' => 'admin',
        ]);

        Role::factory()->count(1)->create([
            'name' => 'user',
        ]);

        Role::factory()->count(1)->create([
            'name' => 'guest',
        ]);
    }
}
