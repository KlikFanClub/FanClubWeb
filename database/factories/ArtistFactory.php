<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(20),
            'profile_picture' => $this->faker->imageUrl(),
            'bio'=> $this->faker->text(),
            'website'=> $this->faker->text(),
            'email'=> $this->faker->unique()->safeEmail(),
            'instagram'=> $this->faker->url(),
            'facebook'=> $this->faker->url(),
            'twitter'=> $this->faker->url(),
            'other_socials' => $this->faker->url(),
            'highlighted'=>$this->faker->boolean(),
        ];
    }
}
