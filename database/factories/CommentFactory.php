<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => UserFactory::new(),
            'post_id' => PostFactory::new(),
            'content' => $this->faker->paragraphs(3, true),
        ];
    }
}
