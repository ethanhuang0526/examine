<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = Category::whereNotNull('parent_id')->get(['id']);
        $price = intval($this->faker->randomFloat(0, 100, 10000));
        $percents = range(0.1, 0.9, 0.1);

        return [
            'title' => $this->faker->name(),
            'image' => $this->faker->imageUrl(),
            'category_id' => $categories->random()->id,
            'color' => $this->faker->colorName(),
            'score' => $this->faker->randomElement([1,2,3,4,5]),
            'sale_price' => random_int(1, 10) % 10 === 0
                ? null
                : intval($price * $percents[array_rand($percents)]),
            'price' => $price,
        ];
    }
}
