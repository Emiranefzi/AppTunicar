<?php

namespace Database\Factories;

use App\Models\voiture;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\voiture>
 */
class voitureFactory extends Factory
{
    protected $model = voiture::class;


    public function definition()
    {
        return [
            "modele" => $this->faker->name,
            "matricule" => $this->faker->swiftBicNumber,
            "etat"=> array_rand(["Excellent", "très bon", "bon","correct"], 1),
            "kilometrage" => $this->faker->numberBetween($min=50, $max=100000),
            "prix" => $this->faker->numberBetween($min=50, $max=5000),
            "disponibilite" => array_rand(["Disponible", "Non disponible"], 1),
            "image" =>"images/imageplaceholder.png"

        ];
    }
}
