<?php

namespace Database\Factories;

use App\Models\Direccione;
use Illuminate\Database\Eloquent\Factories\Factory;

class DireccioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => $this->faker ->randomElement(['1','2']),
            'nombre' => $this->faker ->sentence(),
            'direccion' => $this->faker ->sentence(),
            'localidad' => $this->faker ->randomElement(['Suba','Teusaquillo', 'Chapinero'])
        ];
    }
}
