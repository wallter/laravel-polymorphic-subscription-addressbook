<?php

namespace Database\Factories;

use App\Enum\AddressTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'street1' => $this->faker->streetAddress(),
            'street2' => $this->faker->secondaryAddress(),
            'zip' => $this->faker->postcode(),
            'state' => $this->faker->stateAbbr(),
            'type' => $this->faker->randomElement(AddressTypeEnum::cases()),
            'is_default' => $this->faker->boolean(),
        ];
    }
}
