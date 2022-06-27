<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = Category::get($columns = ['id']);
        return [
            //
            'title' => $this->faker->word(),
            'info' => $this->faker->sentence(),
            'category_id' => $this->faker->randomElement($category),


        ];
    }
}
