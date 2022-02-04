<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $libro = Libro::class;
    public function definition()
    {
        return [
            'titulo'=>$this->faker->jobTitle(),
            'autor'=>$this->faker->name(),
            'anio'=>$this->faker->year(),
            'genero'=>$this->faker->randomElement(['Aventura','Ciencia ficción','Policíaca','Paranormal','Fantástica','Suspeso','Misterio']),
            'sinopsis'=>$this->faker->sentence(20),
        ];
    }
}
