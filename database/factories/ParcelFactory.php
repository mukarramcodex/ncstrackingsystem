<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parcel>
 */
class ParcelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'customer_name' => $this->faker->name(),
            'customer_name' => $this->faker->randomElement([
                'Moosa Khan', 'Nouman Dildar', 'Ahmad', 'Osama Khan', 'Ahad Malik', 'Umer Rajpoot', 'Sheikh Mukarram', 'Amjad', 'Jannat Khan', 'Ali Haider', 'Fiyaz', 'Asif Malik', 'Zia Khasmiri', 'Nouman Jatt'
            ]),
            'tracking_id' => Str::uuid(),
            'tracking_number' => 'NCS' . $this->faker->unique()->numerify('######'),
            'delivery_date' => $this->faker->dateTimeBetween('+2 days', '+10 days')->format('Y-m-d'),
            'sender_email' => $this->faker->unique()->safeEmail(),
            'receiver_email' => $this->faker->unique()->safeEmail(),
            'receiver_number' => $this->faker->numerify('03#########'),
            'origin' => $this->faker->randomElement([
                'Karachi', 'Lahore', 'Islamabad', 'Rawalpindi', 'Peshawar', 'Multan', 'Faisalabad', 'Quetta', 'Jhelum'
            ]),
            'destination' => $this->faker->randomElement([
                'Karachi', 'Lahore', 'Islamabad', 'Rawalpindi', 'Peshawar', 'Multan', 'Faisalabad', 'Quetta', 'Jhelum'
            ]),
            'status' => $this->faker->randomElement(['Pending', 'In Transit', 'Delivered']),
            'weight' => $this->faker->randomFloat(2, 1, 10, 0.5, 0.7, 25, 50, 38, 42, 0.6, 3, 9, 2.5, 4, 7, 25, 16, 3, 0.9),
            'price' => $this->faker->randomFloat(250, 138, 1740, 5680, 540, 3570, 540, 250, 249, 128, 349, 780, 580, 950, 1150, 1230, 820),
            'notes' => $this->faker->sentence(6),
        ];
    }
}
