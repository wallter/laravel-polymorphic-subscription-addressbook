<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    use WithFaker;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->email(),
            'name' => $this->faker->unique()->name()
        ];
    }

    public function withAddress()
    {
        return $this->afterCreating(function ($customer) {
            $customer->addresses()->save(AddressFactory::new()->make());
        });
    }
}
