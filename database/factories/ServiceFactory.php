<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'service_category_id' => $this->faker->word,
            'price' => $this->faker->word,
            'employee_id' => $this->faker->word,
            'status' => $this->faker->word,
            'description' => $this->faker->text,
            'slug' => $this->faker->word,
            'discount' => $this->faker->word,
            'discount_type' => $this->faker->word,
            'time_required' => $this->faker->randomDigitNotNull,
            'time_required_type' => $this->faker->word,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'deleted_at' => null
        ];
    }
}
