<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Employee::class;
    public function definition(): array
    {
        // return [
        //     'firstname' => fake()->firstName(),
        //     'lastname' => fake()->lastName(),
        //     'email' => fake()->email(),
        //     'age' => fake()->numberBetween(25, 50),
        //     'position_id' => Position::factory()
        // ];

        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'age' => $this->faker->numberBetween(25, 50),
            'position_id' => $this->faker->numberBetween(1, 3)
        ];
    }
}