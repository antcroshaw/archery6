<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Handicap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
//
//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
        Category::factory()->create([
            'name' => 'Outdoor GNAS'
        ]);
        Category::factory()->create([
            'name' => 'Indoor GNAS'
        ]);
        Handicap::factory()->create([
            'name' => 'York',
            'categoryId' => 1
        ]);
        Handicap::factory()->create([
            'name' => 'Western',
            'categoryId' => 1
        ]);
        Handicap::factory()->create([
            'name' => 'American',
            'categoryId' => 2
        ]);
        Handicap::factory()->create([
            'name' => 'Junior York',
            'categoryId' => 2
        ]);

        \App\Models\Scores::factory(10)->create();



    }
}
