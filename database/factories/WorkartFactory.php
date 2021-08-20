<?php

namespace Database\Factories;

use App\Models\Workart;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Workart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(),
            'imageworkart' => $this->faker->imageUrl(),
            'artistname' => $this->faker->text(),
            'edition' => $this->faker->text(),
            'price' => $this->faker->randomNumber(2),
            'technique' => $this->faker->text(),
            'theme' => $this->faker->text(),
            'others' => $this->faker->text(),
            'category' => $this->faker->text(),
        ];
    }
}
