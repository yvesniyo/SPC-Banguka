<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bookable_id' => $this->faker->word,
        'customer_id' => $this->faker->word,
        'starts_at' => $this->faker->date('Y-m-d H:i:s'),
        'ends_at' => $this->faker->date('Y-m-d H:i:s'),
        'canceled_at' => $this->faker->date('Y-m-d H:i:s'),
        'timezone' => $this->faker->word,
        'price' => $this->faker->word,
        'quantity' => $this->faker->randomDigitNotNull,
        'total_paid' => $this->faker->word,
        'currency' => $this->faker->word,
        'notes' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
