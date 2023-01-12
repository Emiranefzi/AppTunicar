<?php

namespace Database\Factories;


use App\Models\client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\client>
 */
class clientFactory extends Factory
{
    protected $model = Client::class;

    
    public function definition()
    {
        return [
            "nom" => $this->faker->lastName,
            "prenom" => $this->faker->firstName,
            "dateNaissance" => $this->faker->dateTimeBetween("1980-01-01", "2001-12-30"),
            "tel" => $this->faker->phoneNumber,
            "ville" => $this->faker->city,
            "email" => $this->faker->unique()->safeEmail(),
            "cin" =>  $this->faker->creditCardNumber,
        ];
    }
}
