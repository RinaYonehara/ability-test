<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
       * The name of the factory's corresponding model.
       *
       * @var string
       */
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->unique()->safeEmail,
            'tel' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
        ];
    }
}
