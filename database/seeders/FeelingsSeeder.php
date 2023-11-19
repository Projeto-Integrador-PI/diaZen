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
            'Em paz',
            'Feliz',
            'Neutro',
            'Triste',
            'Raiva'
        ];

        foreach ($feelings as $feeling) {
            Feelings::create([
                'name' => $feeling
            ]);
        }
    }
}
