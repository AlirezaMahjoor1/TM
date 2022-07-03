<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use TM\Core\Models\User;

class UserFactory extends Factory
{

    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
            'cell_number'=> $this->faker->phoneNumber,
            'verified'=>1,
            'password'=>bcrypt('123456789'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
