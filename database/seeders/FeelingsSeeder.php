<?php

namespace Database\Seeders;

use App\Models\Feelings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeelingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feelings = [
            'Feliz',
            'Triste',
            'Ansiedade',
            'Alegria',
            'Animação',
            'Incomodo',
            'Timidez',
            'Satisfação'
        ];

        foreach ($feelings as $feeling) {
            Feelings::create([
                'name' => $feeling
            ]);
        }
    }
}
