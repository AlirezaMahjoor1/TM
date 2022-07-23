<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use TM\Core\Models\Technician;


class TechnicianFactory extends Factory
{
    protected $model = Technician::class;

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
            'district_id'=>rand(1,16),
            'skill_id'=>rand(1,50)
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
