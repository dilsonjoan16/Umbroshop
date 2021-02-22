<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*return [
            'nombre'=>$this->faker->randomElement(["Franela","Zapatilla","Chaqueta","Gorra","Bermuda","Tacos Profesionales","Puntillas Profesionales"]),
            'codigo'=>$this->faker->randomElement(["AB-24","AAB-1","BBE-22","CA-2D"]),
            'categoria'=>$this->faker->randomElement(["Deportiva","Casual","Clasica","Retro","Vintage"]),
            'talla'=>$this->faker->randomElement(["42","39","41","40","37","38"])
        ];*/
    }
}
