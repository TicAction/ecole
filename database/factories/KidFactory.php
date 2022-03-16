<?php

namespace Database\Factories;

use App\Models\Kid;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class KidFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kid::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
        ];
    }
}
