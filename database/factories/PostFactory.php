<?php

namespace Database\Factories;

use App\Enums\PostTagEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'   => fake()->name,
            'slug'    => fake()->slug,
            'visible' => true,
            'body'    => fake()->text,
            'tag'     => PostTagEnum::ALPINEJS->value
        ];
    }
}
