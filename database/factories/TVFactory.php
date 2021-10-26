<?php

namespace Database\Factories;

use App\Models\TV;
use Illuminate\Database\Eloquent\Factories\Factory;

class TVFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TV::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idmarcas' => $this->faker->randomDigitNotNull,
        'tvdescripcion' => $this->faker->word,
        'tvcantidad' => $this->faker->randomDigitNotNull,
        'idubicacion' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
