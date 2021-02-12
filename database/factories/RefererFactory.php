<?php

namespace Database\Factories;

use App\Models\Referer;
use Illuminate\Database\Eloquent\Factories\Factory;

class RefererFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Referer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->randomElement([
                "Google",
                "Twitter",
                "Facebook",
                "Bing",
                "Vimeo"
            ])
        ];
    }
}
