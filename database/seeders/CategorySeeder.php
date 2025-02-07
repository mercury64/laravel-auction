<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name' => 'Silent'
        ]);
        Category::factory()->create([
            'name' => 'Live'
        ]);
        Category::factory()->create([
            'name' => 'Other'
        ]);
        // Category::factory(5)->create();
    }
}
