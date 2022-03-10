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
            'id_usuario' => $this->faker ->randomElement(['1','2']),
            'fecha_nacimiento'=>$this->faker->date(),
            'nombre'=>$this->faker->name(),
            'sexo'=>$this->faker->randomElement(['Masculino', 'Femenino']),
            'edad'=>$this->faker->numberBetween(0, 100),
            'peso'=>$this->faker->randomElement(['1','2']),
            'altura'=>$this->faker->numberBetween(0, 250),
            'grupo_sanguineo'=>$this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'rh'=>$this->faker->randomElement(['+', '-']),
            'aseguradora'=>$this->faker->word(),
            'ciudad'=>$this->faker->word(),
            'direccion'=>$this->faker->address(),
            'telefono'=>$this->faker->numberBetween(10, 11),
            'correo'=>$this->faker->unique()->safeEmail(),
            'tipo_paciente'=>$this->faker->word(),
            'diagnostico'=>$this->faker->paragraph()
        ];
    }
}
