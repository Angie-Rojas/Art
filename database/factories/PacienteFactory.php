<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_nacimiento'=>$this->faker->dateTime(),
            'nombre'=>$this->faker->name(),
            'sexo'=>$this->faker->randomElements(['Masculino', 'Femenino']),
            'edad'=>$this->faker->numberBetween(0, 100),
            'peso'=>$this->faker->randomFloat(1, 0, 250),
            'altura'=>$this->faker->numberBetween(0, 250),
            'grupo_sanguineo'=>$this->faker->randomElements(['A', 'B', 'AB', 'O']),
            'rh'=>$this->faker->randomElements(['+', '-']),
            'aseguradora'=>$this->faker->word(),
            'ciudad'=>$this->faker->word(),
            'direccion'=>$this->faker->address(),
            'telefono'=>$this->faker->numberBetween(10, 11),
            'correo'=>$this->faker->unique()->safeEmail(),
            'tipo_paciente'=>$this->faker->word(),
            'diagnostico'=>$this->faker->paragraph(),
        ];
    }
}
