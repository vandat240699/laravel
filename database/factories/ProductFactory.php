<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        $slug = Str::slug($name, '-');
        return [
            'name' => $name,
            'image' => $this ->faker -> imageUrl(150,100),
            'category' => $this ->faker -> numberBetween(1,9),
            'price' => $this ->faker -> numberBetween(1,10000000000),
            'status' => $this -> faker -> text(),
            'sl' => $this -> faker -> numberBetween(0,50),
            'slug' => $slug,

        ];
    }
}
