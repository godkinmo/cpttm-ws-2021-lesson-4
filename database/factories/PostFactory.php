<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => UserFactory::new(),
            'title' => $this->faker->sentences(1, true),
            'content' => $this->faker->paragraphs(3, true),
        ];
    }
}
