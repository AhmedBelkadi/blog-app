<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Article::factory(100)->create();

        // \App\Models\Article::factory()->create([
        //     'titre' => 'learn test',
        //     'slug' => 'learn test',
        //     'content' => 'learn test learn test learn test learn test',
        // ]);

    }
}
