<?php

namespace Database\Seeders;

use App\Models\player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        player::factory()->create([
            'firstname' => 'ilyass',
            'lastname' => 'samoudi',
            'age' => '24',
            'wight' => '60',
            'hight' => '170',
            'foot' => 'right'            
        ]);
    }
}
