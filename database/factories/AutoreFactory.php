<?php

namespace Database\Factories;

use App\Models\Autore;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Autore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $i = 1;
        return [
            //
            'nome'      => $this->faker->name(20),
            'cognome'   => $this->faker->lastname(200),
            'autore_id' => $i++,
        ];
    }
}
