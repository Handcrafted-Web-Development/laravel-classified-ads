<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\State;
use App\Models\User;
use App\Models\Ad;

class SecondClassifiedAd extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ad::factory()->create([
            'title' => "Voiture d'occasion : Toyota Camry 2018, faible kilométrage",
            'description' => "Toyota Camry 2018 en excellent état, seulement 30 000 km au compteur, intérieur en cuir, toutes options.",
            'price' => 15000,
            'year' => 2017,
            'size' => 1000,
            'brand' => "Toyota Camry",
            'due_date' => now(),
            'guarantee' => "Aucune",
            'exchange' => fake()->boolean(['0', '1']),
            'author_id' => User::factory(),
            'category_name' => Category::create(['name' => 'Car']),
            'delivery_name' => Delivery::create(['name' => 'Click and Collect']),
            'state_name' => State::create(['name' => 'Good']),
            'picture_id' => Picture::create()
        ]);
    }
}
