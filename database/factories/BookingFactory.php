<?php

namespace Database\Factories;
use App\Models\service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'service_id'=>service::factory(),
            'date'=>fake()->date(),
            'time'=>fake()->time(),
            'status'=>fake()->randomElement(['waiting','confirmed','cancelled']),
        ];
    }
}
