<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;

    public function definition()
    {
        $random_date = $this->faker->dateTimeBetween('-1year', '-1day');
        return [
            'title' => $this->faker->realText(rand(20, 50)),
            'body' => $this->faker->realText(rand(100, 200)),
            'is_public' => $this->faker->boolean(90),
            'published_at' => $random_date,
            'created_at' => $random_date,
            'updated_at' => $random_date
        ];
    }
}
