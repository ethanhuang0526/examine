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

        Category::factory(10)->create()->each(function ($category) {
            for ($i = 0; $i < random_int(1, 5); $i++) {
                $faker = Category::factory()->make(['parent_id' => $category->id]);
                $category->children()->create($faker->toArray());
            }
        });
    }
}
