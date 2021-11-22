<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = UserFactory::new()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        PostFactory::new()
            ->hasComments(3, [
                'user_id' => $user->id,
            ])
            ->count(10)
            ->create([
                'user_id' => $user->id,
            ]);
    }
}
