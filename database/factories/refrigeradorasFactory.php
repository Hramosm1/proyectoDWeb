<?php

namespace Database\Factories;

use App\Models\refrigeradoras;
use Illuminate\Database\Eloquent\Factories\Factory;

class refrigeradorasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = refrigeradoras::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idmarcas' => $this->faker->randomDigitNotNull,
        'refridesc' => $this->faker->word,
        'refricantidad' => $this->faker->randomDigitNotNull,
        'idubicacion' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
