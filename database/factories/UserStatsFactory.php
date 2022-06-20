<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserStatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'location' => $this->faker->address(),
            'datetime' => $this->faker->dateTime()
        ];
    }
}
