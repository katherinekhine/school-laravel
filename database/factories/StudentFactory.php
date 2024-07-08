<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName() . " " . fake()->lastName(),
            'photo' => 'https://picsum.photos/id/' . rand(0, 80) . '/200/300',
            'email' => fake()->email(),
            'address' => fake()->address(),
            'dob' => fake()->dateTimeBetween('-30 years', '-16 years'),
            'classroom_id' => rand(1, 10),
        ];
    }
}
