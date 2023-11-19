<?php

namespace Database\Seeders;

use App\Models\CategoryEvents;
use Illuminate\Database\Seeder;

class CategoryEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryEvents::create([
            'name' => 'Trabalho',
        ]);
        CategoryEvents::create([
            'name' => 'Lazer',
        ]);
        CategoryEvents::create([
            'name' => 'Família',
        ]);
        CategoryEvents::create([
            'name' => 'Amigos',
        ]);
        CategoryEvents::create([
            'name' => 'Outros',
        ]);
    }
}
