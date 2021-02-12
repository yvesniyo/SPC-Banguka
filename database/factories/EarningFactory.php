<?php

namespace Database\Factories;

use App\Models\Earning;
use Illuminate\Database\Eloquent\Factories\Factory;

class EarningFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Earning::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $this->faker->dateTimeBetween(now()->subYears(2), now()),
            "amount" => $this->faker->randomNumber()
        ];
    }
}
