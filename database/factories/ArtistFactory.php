<?php

namespace Database\Factories;

use App\Models\artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = artist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'artistname' => $this->faker->text(),
            'artistpicture' => $this->faker->imageUrl(),
            'bio'=> $this->faker->text(),
            'website'=> $this->faker->text(),
            'email'=> $this->faker->unique()->safeEmail(),
            'instagram'=> $this->faker->url(),
            'facebook'=> $this->faker->url(),
            'twiter'=> $this->faker->url(),
        ];
    }
}
