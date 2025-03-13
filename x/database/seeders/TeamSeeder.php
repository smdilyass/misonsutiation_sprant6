<?php

namespace Database\Seeders;

use App\Models\team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        team::factory()->create([
            'name' => 'RAJA',
            'city' => 'casablanca',
            'create_at' => '08/06/1949',
            'counrty' => 'Morocco'
        ]); 
    }
}
