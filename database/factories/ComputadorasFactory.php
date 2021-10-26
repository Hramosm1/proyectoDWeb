<?php

namespace Database\Factories;

use App\Models\Computadoras;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComputadorasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Computadoras::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idmarca' => $this->faker->randomDigitNotNull,
        'descripcion' => $this->faker->word,
        'cantidad' => $this->faker->randomDigitNotNull,
        'idubicacion' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
