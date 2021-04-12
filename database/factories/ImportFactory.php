<?php

namespace Database\Factories;

use App\Models\Import;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Import::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => $this->faker->year,
            'id_month' => $this->faker->randomElement([1, 2, 3]),
            'description_beginning' => $this->faker->date,
            'description_final' => $this->faker->date
        ];
    }
}
