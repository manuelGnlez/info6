<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Categories;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category = Categories::count();
        return [
            //
            'category_id' => $this->faker->numberBetween(1, $category),
            'title' => $this->faker->name(),
            'url_clean' => Str::random(10).'_'.Str::random(5),
            'content' => $this->faker->name(),
            'posted' => $this->faker->randomElement(['yes', 'no'])
        ];
    }
}
